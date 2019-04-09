<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/imdb/models/DB.php');
use models\DB;
$con = DB::getInstance()->getConnection();
$code = 200;
$response = '';

if(isset($_GET['input']))
{
    $input = $_GET['input'];
    $movies = $con->query("select id, title from movie where title like '%$input%'")->fetchAll();
    $actors = $con->query("select id, name, surname from actor where name like '%$input%' or surname like '%$input%'")->fetchAll();
    if($input == '')
    {
        $response = '';
    }
    else if(empty($movies) && empty($actors))
    {
        $response = "<li><a href='#'>Nothing found</a></li>";
    }
    else {
        if(!empty($movies))
        {
            foreach($movies as $m)
            {
                $response .= "<li><a href='index.php?page=movie&id=$m->id'>$m->title</a></li>";
            }
        }
        if(!empty($actors))
        {
            foreach($actors as $a)
            {
                $name_surname = $a->name.' '.$a->surname;
                $response .= "<li><a href='index.php?page=actor&id=$a->id'>$name_surname</a></li>";
            }

        }
    }

}



http_response_code($code);
echo $response;


?>