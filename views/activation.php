<?php
include_once('models/User.php');
use models\User;
if(isset($_GET['ac_key']))
{
    $user = new User();
    $key = $_GET['ac_key'];
    $user->activate($key);
    if(empty($user->err))
    {
        if(isset($_SESSION['user']))
        {
            unset($_SESSION['user']);
        }
        
        echo "<h1 class='text-center'>Thank you for activating your account you can now login</h1>";

    }
    else{
        foreach($user->err as $e)
        {
            echo "<h1 class='text-center'>$e</h1>";
        }
    }

}
else{
    echo "<h1>User not found</h1>";
}

?>