<?php
session_start();
include_once('../models/Category.php');
use models\Category;
if(isset($_POST['insert']))
{
    $err = array();
    extract($_POST);
    
    if($name == '')
    {
        array_push($err, "<div class='alert alert-danger text-center'>Name field is required</div>");
    }
    if(empty($err)){
        $category = new Category();
        $category->name = $name;
        $category->save();
        $_SESSION['success'] = "<div class='alert alert-success text-center'>Inserted category</div>";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else{
        $_SESSION['err'] = $err;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}


?>