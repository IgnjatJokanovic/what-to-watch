<?php
session_start();
include_once('../models/Movie.php');
use models\Movie;
$movie = new Movie();
if(isset($_POST['delete']))
{
    
    extract($_POST);
    $movie->destroy($id);
    $_SESSION['success'] = "<div class='alert alert-success text-center'>Successfully deleted movie</div>";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}


?>