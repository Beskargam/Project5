<?php

class UsersManagerPDO extends UsersManager
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getConnexionUser($pseudo)
    {
        $request = $this->db->prepare(
            'SELECT * 
            FROM users u
			INNER JOIN ranks r
			ON u.rank_id = r.id 
            WHERE pseudo = :pseudo');
        $request->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $request->execute();

        $request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'user');

        $user = $request->fetch();
        return $user;
    }

    public function getAddUser($pseudo, $password)
    {
        $request = $this->db->prepare(
            'INSERT INTO users(pseudo, password)
            VALUES (:pseudo, :password)');
        $request->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $request->bindValue(':password', $password, PDO::PARAM_STR);
        $request->execute();
    }
}
