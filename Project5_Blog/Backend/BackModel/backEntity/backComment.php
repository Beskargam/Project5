<?php

class BackComment
{
    private $id_comment;
    private $id_news;
    private $pseudo;
    private $rank_user;
    private $content_comment;
    private $dateAdd_comment;
    private $dateEdit_comment;

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
    public function id_comment()
    {
        return $this->id_comment;
    }

    public function id_news()
    {
        return $this->id_news;
    }

    public function pseudo()
    {
        return $this->pseudo;
    }

    public function rank_user()
    {
        return $this->rank_user;
    }

    public function content_comment()
    {
        return $this->content_comment;
    }

    public function dateAdd_comment()
    {
        return $this->dateAdd_comment;
    }

    public function dateEdit_comment()
    {
        return $this->dateEdit_comment;
    }

// SETTERS
    public function setId_comment($id_comment)
    {
        $this->id_comment = $id_comment;
    }

    public function setId_news($id)
    {
        $this->id_news = (int)$id;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function setRank_user($rank_user)
    {
        $this->rank_user = $rank_user;
    }

    public function setContent_comment($content_comment)
    {
        $this->content_comment = $content_comment;
    }

    public function setDateAdd_comment(DateTime $dateAdd_comment)
    {
        $this->dateAdd_comment = $dateAdd_comment;
    }

    public function setDateEdit_comment(DateTime $dateEdit_comment)
    {
        $this->dateEdit_comment = $dateEdit_comment;
    }
}