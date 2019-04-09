<?php

session_start();

if(isset($_SESSION['user']) && $_SESSION['user']->role == 'admin')
{
  include 'header.php';

  if(isset($_GET['page'])){

    $page = $_GET['page'];

    switch($page){
        case 'insertM':
          include 'views/insert_movie.php';
          break;
        case 'insertA':
          include 'views/insert_actor.php';
          break;
        case 'insertC':
          include 'views/insert_category.php';
          break;
        case 'actorC':
          include 'views/actor_combo.php';
          break;
        case 'movieC':
          include 'views/movie_combo.php';
          break;
        case 'actorE':
          include 'views/actor_edit.php';
          break;
        case 'movieE':
          include 'views/movie_edit.php';
          break;
        case 'categoryC':
          include 'views/category_combo.php';
          break;
       
      
    }
  }
  include 'footer.php';
}

else
{

  header("Location: ../index.php");

}







