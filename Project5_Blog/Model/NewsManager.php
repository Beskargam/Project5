<?php

abstract class NewsManager
{
    abstract public function getListNews();

    abstract public function getNews($id);

    abstract protected function addNews(News $news);

    abstract public function deleteNews($id);

    abstract protected function updateNews(News $news);
}
