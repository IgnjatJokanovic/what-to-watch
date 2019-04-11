<?php
session_start();
include_once('../models/Category.php');
use models\Category;
$category = new Category();
if(isset($_POST['delC']))
{
    extract($_POST);
    $category->destroy($id);
    $_SESSION['success'] = "<div class='alert alert-success text-center'>Deleted category</div>";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>