<?php
// database connection code
$con = mysqli_connect('localhost', 'root', '','memes_db');

// get the post records
$name = $_POST['name'];
$caption = $_POST['caption'];
$url = $_POST['url'];

// database insert SQL code
$sql = "INSERT INTO `meme_tb` (`Owner`, `Caption`,`URL`) VALUES ('$name','$caption','$url')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	header('Location:P1.php');
}
?>