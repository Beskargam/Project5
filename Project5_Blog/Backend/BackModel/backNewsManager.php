<?php

abstract class BackNewsManager
{
    abstract public function getListNews();

    abstract public function getNews($id);

    abstract public function AddNews($title, $content_news);

    abstract public function deleteNews($id_news);

    abstract public function getEditNewsForm($id_news);

    abstract public function updateNews($id_news, $newContent_news, $newTitle_news);
}