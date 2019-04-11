<?php
session_start();
    include_once('../models/Category.php');
    include_once('../models/Actor.php');
    include_once('../models/Movie.php');
    use models\Category;
    use models\Actor;
    use models\Movie;
if(isset($_POST['insert']))
{
    extract($_POST);
    extract($_FILES);
    $err = array();
    $mimes = array("image/jpg", "image/jpeg", "image/png");
    if($title == '')
    {
        array_push($err, "<div class='alert alert-danger text-center'>Title field is required</div>");
    }
    if($story == '')
    {
        array_push($err, "<div class='alert alert-danger text-center'>Storyline field is required</div>");
    }
    if($image['size'] == 0)
    {
        array_push($err, "<div class='alert alert-danger text-center'>Image is required</div>");
    }
    if(!in_array($image['type'], $mimes))
    {
        array_push($err, "<div class='alert alert-danger text-center'>Image must be of image format</div>");
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
    if(!isset($categories))
    {
        array_push($err, "<div class='alert alert-danger text-center'>Select atleast one category</div>");
    }
    if(!isset($actors))
    {
        array_push($err, "<div class='alert alert-danger text-center'>Select atleast one actor</div>");
    }
    for($i = 1; $i <= 6; $i++)
    {
        if(${'galery' . $i}['size'] == 0)
        {
            array_push($err, "<div class='alert alert-danger text-center'>Galerry image($i) is required</div>");

        }
        if(!in_array(${'galery' . $i}['type'], $mimes)){
            $erors[] = "<div class='alert alert-danger text-center'>Galerry image($i) must be an image format</div>";
        }

    }

    if(empty($err))
    {
        $movie = new Movie();
        $movie->title = $title;
        $movie->release = mktime(0,0,0,$m,$d,$y);
        $movie->country = $country;
        $movie->story = $story;
        $movie->actors = $actors;
        $movie->categories = $categories;
        $main_img = time().$image['name'];
        if(move_uploaded_file($image['tmp_name'], "C:/xampp/htdocs/imdb/img/$main_img"))
        {
            $movie->image = "img/$main_img";

        }
        for($i = 1; $i <=6; $i++)
        {
            $galery = time().${'galery' . $i}['name'];
            if(move_uploaded_file(${'galery' . $i}['tmp_name'], "C:/xampp/htdocs/imdb/img/$galery"))
            {
                array_push($movie->galery, "img/$galery");
            }

        }
        $movie->save();
        $_SESSION['success'] = "<div class='alert alert-success text-center'>Successfully added new movie</div>";
        header('Location: ' . $_SERVER['HTTP_REFERER']);


    }
    else
    {
       
        $_SESSION['err'] = $err;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    
}


?>