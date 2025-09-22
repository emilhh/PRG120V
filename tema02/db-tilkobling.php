<?php /* db-tilkobling */
/*
/* Programmet foretar tilkobling til database-server og valg av database
*/
$host = 'b-studentsql-1.usn.no';
$username = '274645';
$password = '161b274645';
$database = '274645';
$db=mysqli_connect($host,$username,$password,$database) or die ("ikke kontakt med database-server");
/* tilkobling til database-serveren utført */
?>