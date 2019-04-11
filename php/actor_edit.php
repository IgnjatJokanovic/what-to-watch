<?php
session_start();
include_once('../models/Actor.php');
use models\Actor;
$actor = new Actor();
    if(isset($_POST['editTxt']))
    {
        extract($_POST);
        $err = array();
        if($name == '')
        {
            array_push($err, "<div class='alert alert-danger text-center'>Name field is required</div>");
        }
        if($surname == '')
        {
            array_push($err, "<div class='alert alert-danger text-center'>Surname field is required</div>");
        }
        if($description == '')
        {
            array_push($err, "<div class='alert alert-danger text-center'>Description field is required</div>");
        }
        if(empty($err))
        {
            $actor = new Actor();
            $actor->name = ucfirst($name);
            $actor->surname = ucfirst($surname);
            $actor->description = $description;
            $actor->updateInfo($id, $ids);
            $_SESSION['success'] = "<div class='alert alert-success text-center'>Updated info for actor</div>";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            

            

        }
        else
        {
           
            $_SESSION['err'] = $err;
            header('Location: ' . $_SERVER['HTTP_REFERER']);
          
        }
            
       
       //$data->galery
    }
    if(isset($_POST['editImage']))
    {
        extract($_FILES);
        extract($_POST);
        $err = array();
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
                $actor->updateImages($id_main, $img);
                $_SESSION['success'] = "<div class='alert alert-success text-center'>Updated main image for actor</div>";
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
        extract($_POST);
        extract($_FILES);
        $err = array();
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
                $actor->updateImages($id_galery, $img);
                $_SESSION['success'] = "<div class='alert alert-success text-center'>Updated galery image for actor</div>";
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