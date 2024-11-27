<?php


$host = 'localhost:3306';
$username = 'fmckeffi_root';
$password = 'weam7ohf1984@';
$database = 'fmckeffi_nasscomm';

$con = mysqli_connect($host,$username,$password,$database);

if(!$con)
{
    header('Location: ../errors/dberrors.php');
    die();
}



?>