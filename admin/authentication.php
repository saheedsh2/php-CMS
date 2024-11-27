<?php
session_start();
include('config/dbconf.php');

if(!isset($_SESSION['auth']))
{
    $_SESSION['message'] = "You are not authorised as ADMIN";
    header('Location: ../login.php');
    exit(0);

}
else 
{
    if($_SESSION['auth_role'] != "1" && $_SESSION['auth_role'] != "2")
    {
    $_SESSION['message'] = "You are not Authorised as Admin";
    header('Location: ../login.php');
    exit(0);

    }


}








?>