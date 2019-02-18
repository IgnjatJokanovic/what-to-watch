<?php
session_start();
include_once('models/Movie.php');
include_once('models/Category.php');
include_once('models/User.php');
use models\User;
use models\Movie;
use models\Category;
$movie = new Movie();
$category = new Category();
include('views/header.php');
include('views/nav.php');

if(isset($_GET['page']))
{
    switch($_GET['page'])
    {
        case 'actors':
            require_once('views/actors.php');
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
        case 'actor':
            require_once('views/single_actor.php');
            break;
        case 'movie':
            require_once('views/single_movie.php');
            break;
        case 'category':
            require_once('views/category.php');
            break;
        case 'activation':
            require_once('views/activation.php');
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
