<?php

class BackNewsManagerPDO extends BackNewsManager
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getListNews()
    {
        $request = $this->db->query(
            'SELECT n.id id_news, u.pseudo pseudo_user, r.rank rank_user, title, content_news, dateAdd_news, dateEdit_news 
			FROM news n
			INNER JOIN users u
			ON n.pseudo_id = u.id
			INNER JOIN ranks r
			ON u.rank_id = r.id
			ORDER BY dateEdit_news DESC 
			LIMIT 0, 20');

        $request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'BackNews');

        $newsList = $request->fetchAll();

        foreach ($newsList as $news) {
            $news->setDateAdd_news(new DateTime($news->dateAdd_news()));
            $news->setDateEdit_news(new DateTime($news->dateEdit_news()));
        }
        $request->closeCursor();
        return $newsList;
    }

    public function getNews($id)
    {
        $request = $this->db->prepare(
            'SELECT n.id id_news, u.pseudo pseudo_user, r.rank rank_user, title, content_news, dateAdd_news, dateEdit_news 
			FROM news n
			INNER JOIN users u
			ON n.pseudo_id = u.id
			INNER JOIN ranks r
			ON u.rank_id = r.id
			WHERE n.id = :id');
        $request->bindValue(':id', (int)$id, PDO::PARAM_INT);
        $request->execute();

        $request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'BackNews');

        $news = $request->fetch();
        $news->setDateAdd_news(new DateTime($news->dateAdd_news()));
        $news->setDateEdit_news(new DateTime($news->dateEdit_news()));

        return $news;
    }

    public function AddNews($title, $content_news)
    {
        $request = $this->db->prepare(
            'INSERT INTO news (pseudo_id, title, content_news, dateAdd_news, dateEdit_news) 
            VALUES (:session_id , :title, :content_news, NOW(), NOW())');
        $request->bindValue(':session_id', $_SESSION['id'], PDO::PARAM_INT);
        $request->bindValue(':title', $title, PDO::PARAM_STR);
        $request->bindValue(':content_news', $content_news, PDO::PARAM_STR);
        $request->execute();
    }

    public function deleteNews($id_news)
    {
        $request = $this->db->prepare(
            'DELETE FROM news 
            WHERE id = :id_news');
        $request->bindValue(':id_news', $id_news, PDO::PARAM_INT);
        $request->execute();
    }

    public function getEditNewsForm($id_news)
    {
        $request = $this->db->prepare(
            'SELECT n.id id_news, title, u.pseudo pseudo_user, content_news, dateAdd_news
			FROM news n
			INNER JOIN users u
			ON n.pseudo_id = u.id
			WHERE n.id = :id');
        $request->bindValue(':id', $id_news, PDO::PARAM_INT);
        $request->execute();

        $request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'BackNews');

        $editNewsForm = $request->fetch();
        $editNewsForm->setDateAdd_news(new DateTime($editNewsForm->dateAdd_news()));
        return $editNewsForm;
    }

    public function updateNews($id_news, $newContent_news, $newTitle_news)
    {
        $request = $this->db->prepare(
            'UPDATE news
            SET  title = :newTitle_news, content_news = :newContent_news, dateEdit_news = NOW()
            WHERE id = :id_news');
        $request->bindValue(':newTitle_news', $newTitle_news, PDO::PARAM_STR);
        $request->bindValue(':newContent_news', $newContent_news, PDO::PARAM_STR);
        $request->bindValue(':id_news', $id_news, PDO::PARAM_INT);
        $request->execute();
    }
}