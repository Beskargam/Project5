<?php

abstract class BackCommentsManager
{
    abstract public function getValidListComments($id);

    abstract public function getCommentsValidationList();

    abstract public function validateComment($id_comment);

    abstract public function deleteComment($id_comment);

    abstract public function getEditCommentForm($id_comment);

    abstract public function updateComment($id_comment, $NewContent_comment);
}