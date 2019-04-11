<?php
session_start();
if(isset($_POST['submit']))
{
    extract($_POST);
    $err = array();
    $regex = "/^[A-Za-z0-9\s]{3,}$/";
    if($message == '')
    {
        array_push($err, "<p class='text-danger'>Message field is required</p>");
    }
    if($message != '' && !preg_match($regex, $message))
    {
        array_push($err, "<p class='text-danger'>Message field Must be atleast 3 characters long and contain numbers and letters</p>");
    }
    if(empty($err))
    {
        mail("jokanovic.ignjat@gmail.com", "Poruka sa sajta", $message);
        $_SESSION['success'] = "<div class='alert alert-success text-center'>Thank you for your message</div>";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else
    {
        $_SESSION['err'] = $err;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
?>