<?php

class UserSession{
    public function__construct(){
        session_start();

    }

    public function setCurrentUser(){
        $_SESSION['user'] = $user;
    }

    public function getCurrentUser(){
        return $_SESSION['user'];

    }

    public function closeSession(){
        session_unset();
        session_destroy();

    }
}


?>