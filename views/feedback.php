<?php
if(isset($_SESSION['err']))
{
    foreach($_SESSION['err'] as $e)
    {
        echo $e;
    }
    unset($_SESSION['err']);
}

if(isset($_SESSION['success']))
{
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
?>