<?php
session_start();
include_once('../models/Category.php');
use models\Category;
$category = new Category();
if(isset($_POST['update']))
{
    $err = array();
    extract($_POST);
    if($txt == '')
    {
        array_push($err, "<div class='alert alert-danger text-center'>Name field is required</div>");
    }
    if(empty($err)){
        $category->name = $txt;
        $category->update($idU);
        $_SESSION['success'] = "<div class='alert alert-success text-center'>Updated category</div>";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else {
        $_SESSION['err'] = $err;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    
}


?>