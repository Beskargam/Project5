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

    public function getListComments($id)
    {
        // TODO: Implement getListComments() method.
    }

    public function addComments($id, $content_comment)
    {
        $request = $this->db->prepare(
            'INSERT INTO comments(news_id, pseudo_id, content_comment, dateAdd_comment, dateEdit_comment) 
            VALUES (:id, :session_id, :content_comment, NOW(), NOW())');
        $request->bindValue(':id', (int)$id, PDO::PARAM_INT);
        $request->bindValue(':session_id', $_SESSION['id'], PDO::PARAM_INT);
        $request->bindValue(':content_comment', $content_comment, PDO::PARAM_STR);
        $request->execute();
    }

    public function deleteComments($id_comment)
    {
        $request = $this->db->prepare(
            'DELETE FROM comments 
            WHERE id = :id_comment');
        $request->bindValue(':id_comment', $id_comment, PDO::PARAM_INT);
        $request->execute();
    }

    public function updateComments(comment $id_comment, $NewContent_comment)
    {
        $request = $this->db->prepare(
            'UPDATE comments
            SET content_comment = :$NewContent_comment, dateEdit_comment = NOW()
            WHERE id = :id_comment');
        $request->bindValue(':NewContent_comment', $NewContent_comment, PDO::PARAM_STR);
        $request->bindValue(':id_comment', $id_comment, PDO::PARAM_INT);
        $request->execute();
    }
}