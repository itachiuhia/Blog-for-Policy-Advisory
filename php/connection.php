 <?php

$conn = new mysqli("localhost", "root", "root");

if($conn->connect_error){
	die("could not connect:".$conn->connect_error);
}else {
//echo "connected";
}

$conn->select_db('blog');

?>