<?php
session_start();
include_once('../models/Movie.php');
include_once('../models/ComentMovie.php');
use models\ComentMovie;
use models\Movie;
$instance = new ComentMovie();
if(isset($_POST['comment']))
{
    $err = array();
    extract($_POST);
    $validator = "/^[A-Za-z0-9\s]+$/";
    if(!isset($_SESSION['user']))
    {
        array_push($err, "<div class='alert alert-danger text-center'>You must be logged in to comment</div>");
    }
    if(isset($_SESSION['user']) && $body == '')
    {
        array_push($err, "<div class='alert alert-danger text-center'>You must write somethinh in your comment</div>");
    }
    if(isset($_SESSION['user']) && $body != '' && !preg_match($validator, $body))
    {
        array_push($err, "<div class='alert alert-danger text-center'>You can write only numbers and letters in comment</div>");
    }
    if(empty($err))
    {
        $instance->comment = $body;
        $instance->created_at = time();
        $instance->id_user = $_SESSION['user']->id;
        $instance->id_movie = $id;
        $instance->save();
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }
    else{
        $_SESSION['err'] = $err;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

}



?>