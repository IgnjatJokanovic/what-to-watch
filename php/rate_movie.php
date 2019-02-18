<?php
session_start();
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/imdb/models/DB.php');
use models\DB;
$con = DB::getInstance()->getConnection();
if(isset($_POST['id_movie']) && isset($_POST['grade']))
{
    $code = 500;
    $response = '';
    if(isset($_SESSION['user']))
    {
        extract($_POST);
        $id = $_SESSION['user']->id;
        $result = $con->query("select * from movie_rating where id_user=$id and id_movie=$id_movie")->fetch();
        if(empty($result))
        {
            $con->query("insert into movie_rating values('', $id, $id_movie, $grade)");
            $response = "Thank you for voting";
            $code = 200;
        }
        else
        {
            $response = "You already voted";
        }

    }
    else
    {
        $response = "You must be logged in to vote";
    }

}
http_response_code($code);
echo $response;

