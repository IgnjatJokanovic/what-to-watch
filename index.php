<?php
session_start();

include('views/header.php');
include('views/nav.php');

if(isset($_GET['page']))
{
    switch($_GET['page'])
    {
        case 'actors':
            require_once('views/actors.php');
            break;
        case 'about':
            require_once('views/about.php');
            break;
        case 'author':
            require_once('views/author.php');
            break;
        case 'contact':
            require_once('views/contact.php');
            break;
        case 'login':
            require_once('views/login.php');
            break;
        case 'register':
            require_once('views/register.php');
            break;
        case 'edit':
            require_once('views/edit.php');
            break;
        default:
            require_once('views/home.php');
            break;

    }

}
else
{
    include('views/home.php');
}

include('views/footer.php');
