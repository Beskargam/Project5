<?php

abstract class CommentsManager
{
    abstract public function getValidListComments($id);

    abstract public function addComment($id, $content_comment);
}
