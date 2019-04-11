<?php
session_start();
include_once('../models/Actor.php');
use models\Actor;
$actor = new Actor();
if(isset($_POST['delete']))
{
    
    extract($_POST);
    $actor->destroy($id);
    $_SESSION['success'] = "<div class='alert alert-success text-center'>Successfully deleted actor</div>";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}


?>