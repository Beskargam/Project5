<?php

class Comment
{
    private $id_comment;
    private $news_id;
    private $pseudo_id;
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

    public function news_id()
    {
        return $this->news_id;
    }

    public function pseudo_id()
    {
        return $this->pseudo_id;
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

    public function setNews_id($news_id)
    {
        $this->news_id = $news_id;
    }

    public function setPseudo_id($pseudo_id)
    {
        $this->$pseudo_id = $pseudo_id;
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