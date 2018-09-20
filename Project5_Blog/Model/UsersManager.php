<?php

abstract class UsersManager
{
    abstract public function getConnexionUser($pseudo);

    abstract  public  function getAddUser($pseudo, $password);
}
