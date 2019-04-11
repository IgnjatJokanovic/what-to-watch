<?php
session_start();
include_once('../models/User.php');
use models\User;
    if(isset($_POST['esubi']))
    {
        extract($_POST);
        $user = new User();
        $user->name = $name;
        $user->surname = $sur;
        $user->password = $pass;
        $id =  $_SESSION['user']->id;
        $user->updateInfo($id, $_SESSION['user']->amg_id);
        if(empty($user->err))
        {
            $_SESSION['user'] = $user->findBy('id', $id);
            $_SESSION['success'] = "<div class='alert alert-success text-center'>Updated information on profile</div>";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        else
        {
            $_SESSION['err'] = $user->err;
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            
        }
    }
?>