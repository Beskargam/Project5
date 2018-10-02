<?php

class BackUsersManagerPDO extends BackUsersManager
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getUsersList()
    {
        $request = $this->db->prepare(
            'SELECT * 
            FROM users u
			INNER JOIN ranks r
			ON u.rank_id = r.id
			ORDER BY r.id, pseudo');
        $request->execute();

        $request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'BackUser');

        $user = $request->fetchall();
        $request->closeCursor();
        return $user;
    }
}