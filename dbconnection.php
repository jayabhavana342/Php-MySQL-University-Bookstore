<?php
//1.Create a database connection
$dbhost = "localhost";
$dbuser = "book";
$dbpass = "bookstore";
$dbname = "book_store";
//$connection->handles the connection
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

//Test if connection occured
if(mysqli_connect_errno()){
    die("Database Connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
}
?>
