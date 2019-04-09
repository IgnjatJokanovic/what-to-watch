<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/imdb/models/DB.php');
use models\DB;
$con = DB::getInstance()->getConnection();
$code = 500;
$response = '';
if(isset($_POST['mail']))
{
    $mail = $_POST['mail'];
    $err = array();
    if($mail == '')
    {
        array_push($err, "<div class='alert alert-danger text-center'>Email field is required</div>");
    }
    if($mail != '' &&  !filter_var($mail, FILTER_VALIDATE_EMAIL))
    {
        array_push($err, "<div class='alert alert-danger text-center'>Invalid email</div>");
    }
    if(count($err) == 0)
    {
        $stmt = $con->prepare('select * from subscribtion where email=:mail');
        $stmt->bindParam(":mail", $mail);
        $stmt->execute();
        $exists = $stmt->fetch();
        if(!$exists)
        {
            $stmt = $con->prepare('insert into subscribtion values(null, :mail)');
            $stmt->bindParam(":mail", $mail);
            $stmt->execute();
            $code = 200;
            $response = "<div class='alert alert-success text-center'>Thank you for subscribing</div>";
        }
        else 
        {
            $response = "<div class='alert alert-danger text-center'>You are already subscribed</div>";
        }

    }
    else {
        foreach($err as $e)
        {
            $response .= $e; 
        }
    }

}   


http_response_code($code);
echo $response;

?>