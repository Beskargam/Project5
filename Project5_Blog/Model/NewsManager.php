<?php

abstract class NewsManager
{
    abstract public function getHome();

    abstract public function getListNews();

    abstract public function getNews($id);
}
