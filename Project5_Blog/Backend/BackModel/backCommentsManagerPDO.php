<?php
session_start();

class BackCommentsManagerPDO extends BackCommentsManager
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

        $request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'BackComment');

        $commentsList = $request->fetchall();
        foreach ($commentsList as $comment) {
            $comment->setDateAdd_comment(new DateTime($comment->dateAdd_comment()));
            $comment->setDateEdit_comment(new DateTime($comment->dateEdit_comment()));
        }
        $request->closeCursor();
        return $commentsList;
    }

    public function getCommentsValidationList()
    {
        $request = $this->db->prepare(
            'SELECT n.id id_news, n.title title_news, c.id id_comment, pseudo, r.rank rank_user, content_comment, dateAdd_comment, dateEdit_comment, publication 
			FROM news n
			INNER JOIN comments c
			ON n.id = c.news_id
			INNER JOIN users u
			ON c.pseudo_id = u.id
			INNER JOIN ranks r
			ON u.rank_id = r.id
			WHERE publication = 0
			ORDER BY dateEdit_comment DESC');
        $request->execute();

        $request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'BackComment');

        $commentsValidationList = $request->fetchall();
        foreach ($commentsValidationList as $comment) {
            $comment->setDateAdd_comment(new DateTime($comment->dateAdd_comment()));
            $comment->setDateEdit_comment(new DateTime($comment->dateEdit_comment()));
        }
        $request->closeCursor();
        return $commentsValidationList;
    }

    public function validateComment($id_comment)
    {
        $request = $this->db->prepare(
            'UPDATE comments
            SET publication = 1
            WHERE id = :id_comment');
        $request->bindValue(':id_comment', $id_comment, PDO::PARAM_INT);
        $request->execute();
    }

    public function deleteComment($id_comment)
    {
        $request = $this->db->prepare(
            'DELETE FROM comments 
            WHERE id = :id_comment');
        $request->bindValue(':id_comment', $id_comment, PDO::PARAM_INT);
        $request->execute();
    }

    public function getEditCommentForm($id_comment)
    {
        $request = $this->db->prepare(
            'SELECT n.id id_news, c.id id_comment, pseudo, content_comment, dateAdd_comment
			FROM news n
			INNER JOIN comments c
			ON n.id = c.news_id
			INNER JOIN users u
			ON c.pseudo_id = u.id
			WHERE c.id = :id');
        $request->bindValue(':id', $id_comment, PDO::PARAM_INT);
        $request->execute();

        $request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'BackComment');

        $editCommentForm = $request->fetch();
        $editCommentForm->setDateAdd_comment(new DateTime($editCommentForm->dateAdd_comment()));
        return $editCommentForm;
    }

    public function updateComment($id_comment, $NewContent_comment)
    {
        $request = $this->db->prepare(
            'UPDATE comments
            SET content_comment = :NewContent_comment, dateEdit_comment = NOW()
            WHERE id = :id_comment');
        $request->bindValue(':NewContent_comment', $NewContent_comment, PDO::PARAM_STR);
        $request->bindValue(':id_comment', $id_comment, PDO::PARAM_INT);
        $request->execute();
    }
}