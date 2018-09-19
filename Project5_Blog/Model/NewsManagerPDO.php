<?php

class NewsManagerPDO extends NewsManager
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
			LIMIT 0, 3');

        $request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'News');

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

        $request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'News');

        $news = $request->fetch();
        $news->setDateAdd_news(new DateTime($news->dateAdd_news()));
        $news->setDateEdit_news(new DateTime($news->dateEdit_news()));

        return $news;
    }

    protected function addNews(News $news)
    {
        $request = $this->db->prepare(
            'INSERT INTO news (pseudo_id, title, content_news, dateAdd_news, dateEdit_news) 
            VALUES (:pseudo_id , :title, :content_news, NOW(), NOW());');
        $request->bindValue(':pseudo_id', $news->pseudo_id());
        $request->bindValue(':title', $news->title());
        $request->bindValue(':content_news', $news->content_news());

        $request->execute();
    }

    public function deleteNews($id)
    {
        $this->db->exec('DELETE FROM news WHERE id = ' . (int)$id);
    }

    protected function updateNews(News $news)
    {
        $request = $this->db->prepare(
            'UPDATE news SET pseudo_id = :pseudo_id, title = :title, content_news = :content_news, dateEdit_news = NOW()
            WHERE id = :id');
        $request->bindValue('pseudo_id', $news->pseudo_id());
        $request->bindValue('title', $news->title());
        $request->bindValue('content_news', $news->content_news());
        $request->bindValue('id', $news->id(), PDO::PARAM_INT);

        $request->execute();
    }
}
