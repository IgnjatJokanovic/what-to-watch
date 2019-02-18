<?php
session_start();
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/imdb/models/DB.php');
use models\DB;
$con = DB::getInstance()->getConnection();
if(isset($_POST['id_actor']) && isset($_POST['grade']))
{
    $code = 500;
    $response = '';
    if(isset($_SESSION['user']))
    {
        extract($_POST);
        $id = $_SESSION['user']->id;
        $result = $con->query("select * from actor_rating where id_user=$id and id_actor=$id_actor")->fetch();
        if(empty($result))
        {
            $con->query("insert into actor_rating values('', $id, $id_actor, $grade)");
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

