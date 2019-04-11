<?php
session_start();
include_once('../models/User.php');
use models\User;
    if(isset($_POST['esub']))
    {
        extract($_FILES);
        extract($_POST);
        $err = array();
        if($pic['size'] == 0)
        {
            array_push($err, "<div class='alert alert-danger text-center'>Image field is required</div>");
        }
        if(empty($err))
        {
            $user = new User();
            $img = time().$pic['name'];
            if(move_uploaded_file($pic['tmp_name'], "C:/xampp/htdocs/imdb/img/$img"))
            {
                $user->image = "img/$img";
                $user->updatePic($img_id);
                $id =  $_SESSION['user']->id;
                $_SESSION['user'] = $user->findBy('id', $id);
                $_SESSION['success'] = "<div class='alert alert-success text-center'>Updated profile picture</div>";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
           

        }

        else
        {
            $_SESSION['err'] = $err;
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        
    }
?>