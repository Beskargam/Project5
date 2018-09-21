<?php

abstract class CommentsManager
{
    abstract public function getValidListComments($id);

    abstract public function getListComments($id);

    abstract protected function addComments($id, $content_comment);

    abstract public function deleteComments($id_comment);

    abstract protected function updateComments(comment $id_comment, $NewContent_comment);
}