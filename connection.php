<?php

$dbhost = "localhost:3306";
$dbuser = "fmckeffi_root";
$dbpass = "weam7ohf1984@";
$db 	= "fmckeffi_nasscomm";

$conn = new mysqli ($dbhost,$dbuser,$dbpass,$db);


//check connection

if($conn->connect_error){	
	echo "Connection failed";
}


?>