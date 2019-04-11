<?php
session_start();
include_once('../models/User.php');
use models\User;
if(isset($_POST['resub']))
{
    extract($_POST);
    extract($_FILES);
    $user = new User();
    $user->name = $name;
    $user->surname = $sur;
    $user->uname = $uname;
    $user->email = $email;
    $user->password = $pass;
    $user->image = $img;
    $user->save();
    if(empty($user->err))
    {
        $_SESSION['success'] = "<div class='alert alert-success text-center'>Thank you for registering, activation email has been sent to your emali</div>";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        
    }
    else{
        $_SESSION['err'] = $user->err;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

?>