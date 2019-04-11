<?php
session_start();
include_once('../models/Actor.php');
include_once('../models/Movie.php');
include_once('../models/Category.php');
use models\Actor;
use models\Movie;
use models\Category;
$movie = new Movie();
$category = new Category();
$actor = new Actor();

    if(isset($_POST['editTxt']))
    {
        extract($_POST);
        $err = array();
        if($title == '')
        {
            array_push($err, "<div class='alert alert-danger text-center'>Title field is required</div>");
        }
        if($story == '')
        {
            array_push($err, "<div class='alert alert-danger text-center'>Storyline field is required</div>");
        }
        if($d == 0)
        {
            array_push($err, "<div class='alert alert-danger text-center'>Select day</div>");
        }
        if($m == 0)
        {
            array_push($err, "<div class='alert alert-danger text-center'>Select month</div>");
        }
        if($y == 0)
        {
            array_push($err, "<div class='alert alert-danger text-center'>Select year</div>");
        }
        if($country == "0")
        {
            array_push($err, "<div class='alert alert-danger text-center'>Select Country</div>");
        }
        if(empty($err))
        {
            $movie = new movie();
            $movie->title = ucfirst($title);
            $movie->story = ucfirst($story);
            $movie->country = $country;
            $movie->release = mktime(0,0,0,$m,$d,$y);
            $movie->updateInfo($id, $ids);
            
            $_SESSION['success'] = "<div class='alert alert-success text-center'>Updated basic info for movie</div>";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            

            

        }
        else
        {
           
            $_SESSION['err'] = $err;
            header('Location: ' . $_SERVER['HTTP_REFERER']);
          
        }
    }
    if(isset($_POST['editImage']))
    {
        $err = array();
        extract($_FILES);
        extract($_POST);
        $mimes = array("image/jpg", "image/jpeg", "image/png");
        if($image['size'] == 0)
        {
            array_push($err, "<div class='alert alert-danger text-center'>Main image is required</div>");
        }
        if($image['size'] != 0 && !in_array($image['type'], $mimes)){
            array_push($err, "<div class='alert alert-danger text-center'>Main image must be an image format</div>");
        }
        if(empty($err))
        {
            $main_img = time().$image['name'];
            if(move_uploaded_file($image['tmp_name'], "C:/xampp/htdocs/imdb/img/$main_img")){
                $img = "img/$main_img";
                $movie->updateImages($id_main, $img);
                $_SESSION['success'] = "<div class='alert alert-success text-center'>Updated Main image for movie</div>";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
            
           
            

            

        }
        else
        {
           
            $_SESSION['err'] = $err;
            header('Location: ' . $_SERVER['HTTP_REFERER']);
          
        }

    }
    if(isset($_POST['editGalery']))
    {
        $err = array();
        extract($_POST);
        extract($_FILES);
        $mimes = array("image/jpg", "image/jpeg", "image/png");
        if($galery['size'] == 0)
        {
            array_push($err, "<div class='alert alert-danger text-center'>Galery image is required</div>");
        }
        if($galery['size'] != 0 && !in_array($galery['type'], $mimes)){
            array_push($err, "<div class='alert alert-danger text-center'>Galery image must be an image format</div>");
        }
        if(empty($err))
        {
            $main_img = time().$galery['name'];
            if(move_uploaded_file($galery['tmp_name'], "C:/xampp/htdocs/imdb/img/$main_img")){
                $img = "img/$main_img";
                $movie->updateImages($id_galery, $img);
                $_SESSION['success'] = "<div class='alert alert-success text-center'>Updated Galery image for movie</div>";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
            

            

        }
        else
        {
           
            $_SESSION['err'] = $err;
            header('Location: ' . $_SERVER['HTTP_REFERER']);
          
        }

    }
    if(isset($_POST['add/remove']))
    {
        extract($_POST);
        $movie->actorControls($id, $actor, $controll);
        $_SESSION['success'] = "<div class='alert alert-success text-center'>Updated actors on movie</div>";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    if(isset($_POST['add/remove_c']))
    {
        extract($_POST);
        $movie->categoryControls($id, $category, $controll);
        $_SESSION['success'] = "<div class='alert alert-success text-center'>Updated categories for movie</div>";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

?>