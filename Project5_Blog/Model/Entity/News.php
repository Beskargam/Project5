<?php

class News
{
    private $id_news;
    private $pseudo_user;
    private $rank_user;
    private $title;
    private $content_news;
    private $dateAdd_news;
    private $dateEdit_news;

// CONSTRUCTOR
    public function __construct($value = [])
    {
        if (!empty($value)) {
            $this->hydrate($value);
        }

    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

// GETTERS
    public function id_news()
    {
        return $this->id_news;
    }

    public function pseudo_user()
    {
        return $this->pseudo_user;
    }

    public function rank_user()
    {
        return $this->rank_user;
    }

    public function title()
    {
        return $this->title;
    }

    public function content_news()
    {
        return $this->content_news;
    }

    public function dateAdd_news()
    {
        return $this->dateAdd_news;
    }

    public function dateEdit_news()
    {
        return $this->dateEdit_news;
    }

// SETTERS
    public function setId_news($id)
    {
        $this->id_news = (int)$id;
    }

    public function setPseudo_user($pseudo_user)
    {
        $this->pseudo_user = $pseudo_user;
    }

    public function setRank_user($rank_user)
    {
        $this->rank_user = $rank_user;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setContent_news($content_news)
    {
        $this->content_news = $content_news;
    }

    public function setDateAdd_news(DateTime $dateAdd_news)
    {
        $this->dateAdd_news = $dateAdd_news;
    }

    public function setDateEdit_news(DateTime $dateEdit_news)
    {
        $this->dateEdit_news = $dateEdit_news;
    }
}
