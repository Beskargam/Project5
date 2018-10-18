<?php

class NewsManagerPDO extends NewsManager
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getHome()
    {
        $request = $this->db->query(
            'SELECT n.id id_news, u.pseudo pseudo_user, r.rank rank_user, title, content_news, dateAdd_news, dateEdit_news 
			FROM news n
			INNER JOIN users u
			ON n.pseudo_id = u.id
			INNER JOIN ranks r
			ON u.rank_id = r.id
			ORDER BY dateEdit_news DESC 
			LIMIT 0, 6');

        $request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'News');

        $newsHome = $request->fetchAll();

        foreach ($newsHome as $news) {
            $news->setDateAdd_news(new DateTime($news->dateAdd_news()));
            $news->setDateEdit_news(new DateTime($news->dateEdit_news()));
        }
        $request->closeCursor();
        return $newsHome;
    }

    public function getListNews()
    {
        $request = $this->db->query(
            'SELECT n.id id_news, u.pseudo pseudo_user, r.rank rank_user, title, intro, content_news, dateAdd_news, dateEdit_news 
			FROM news n
			INNER JOIN users u
			ON n.pseudo_id = u.id
			INNER JOIN ranks r
			ON u.rank_id = r.id
			ORDER BY dateEdit_news DESC 
			LIMIT 0, 20');

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
            'SELECT n.id id_news, u.pseudo pseudo_user, r.rank rank_user, title, intro, content_news, dateAdd_news, dateEdit_news 
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
}
