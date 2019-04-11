<?php
session_start();
include_once('../models/Actor.php');
use models\Actor;
    if(isset($_POST['insert']))
    {
        extract($_FILES);
        extract($_POST);
        $err = array();
        $mimes = array("image/jpg", "image/jpeg", "image/png");
        if($name == '')
        {
            array_push($err, "<div class='alert alert-danger text-center'>Name field is required</div>");
        }
        if($surname == '')
        {
            array_push($err, "<div class='alert alert-danger text-center'>Surname field is required</div>");
        }
        if($image['size'] == 0)
        {
            array_push($err, "<div class='alert alert-danger text-center'>Main image is required</div>");
        }
        if($description == '')
    {
            array_push($err, "<div class='alert alert-danger text-center'>Description field is required</div>");
        }
        for($i = 1; $i <= 6; $i++)
        {
            if(${'galery' . $i}['size'] == 0)
            {
                array_push($err, "<div class='alert alert-danger text-center'>Galerry image($i) is required</div>");

            }
            if(!in_array(${'galery' . $i}['type'], $mimes)){
                $erors[] = '<p class="text-danger">Galerry image($i) must be an image format</div>';
            }

        }
        if(!in_array($image['type'], $mimes)){
            $erors[] = '<p class="text-danger">Main image must be an image format</div>';
        }
        if(empty($err))
        {
            $actor = new Actor();
            $actor->name = ucfirst($name);
            $actor->surname = ucfirst($surname);
            $actor->description = $description;
            $main_img = time().$image['name'];
            if(move_uploaded_file($image['tmp_name'], "C:/xampp/htdocs/imdb/img/$main_img")){
                $actor->image = "img/$main_img";
            }
            for($i = 1; $i <=6; $i++)
            {
                $galery = time().${'galery' . $i}['name'];
                if(move_uploaded_file(${'galery' . $i}['tmp_name'], "C:/xampp/htdocs/imdb/img/$galery"))
                {
                    array_push($actor->galery, "img/$galery");
                }

            }
            $actor->save();
            $_SESSION['success'] = "<div class='alert alert-success text-center'>Successfully added new actor</div>";
            header('Location: ' . $_SERVER['HTTP_REFERER']);

            

        }
        else
        {
           
            $_SESSION['err'] = $err;
            header('Location: ' . $_SERVER['HTTP_REFERER']);
          
        }
            
       
       //$data->galery
    }

?>