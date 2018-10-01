<?php
session_start();

class CommentsManagerPDO extends CommentsManager
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getValidListComments($id)
    {
        $request = $this->db->prepare(
            'SELECT n.id id_news, c.id id_comment, pseudo, r.rank rank_user, content_comment, dateAdd_comment, dateEdit_comment, publication 
			FROM news n
			INNER JOIN comments c
			ON n.id = c.news_id
			INNER JOIN users u
			ON c.pseudo_id = u.id
			INNER JOIN ranks r
			ON u.rank_id = r.id
			WHERE n.id = :id AND publication = 1
			ORDER BY dateEdit_comment DESC 
			LIMIT 0, 10');
        $request->bindValue(':id', (int)$id, PDO::PARAM_INT);
        $request->execute();

        $request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'comment');

        $commentsList = $request->fetchall();
        foreach ($commentsList as $comment) {
            $comment->setDateAdd_comment(new DateTime($comment->dateAdd_comment()));
            $comment->setDateEdit_comment(new DateTime($comment->dateEdit_comment()));
        }
        $request->closeCursor();
        return $commentsList;
    }

    public function addComment($id, $content_comment)
    {
        $request = $this->db->prepare(
            'INSERT INTO comments(news_id, pseudo_id, content_comment, dateAdd_comment, dateEdit_comment) 
            VALUES (:id, :session_id, :content_comment, NOW(), NOW())');
        $request->bindValue(':id', (int)$id, PDO::PARAM_INT);
        $request->bindValue(':session_id', $_SESSION['id'], PDO::PARAM_INT);
        $request->bindValue(':content_comment', $content_comment, PDO::PARAM_STR);
        $request->execute();
    }
}
