<?php /* db-tilkobling */
/*
/* Programmet foretar tilkobling til database-server og valg av database
*/
$host = getenv('b-studentsql-1.usn.no');
$username = getenv('274645');
$password = getenv('161b274645');
$database = getenv('274645');
$db=mysqli_connect($host,$username,$password,$database) or die ("ikke kontakt med database-server");
/* tilkobling til database-serveren utført */
?>