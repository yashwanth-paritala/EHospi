<?php

$con=mysqli_connect("localhost","root","","u153965993_usrd");

if(isset($_GET['id'])) { // if id is set then get the file with the id from database

$id = $_GET['id'];

$query = "SELECT name, type, size, content FROM files WHERE id = $id";

$result = mysqli_query($con,$query) or die('Error, query failed');

list($name, $type, $size, $content) =

mysqli_fetch_array($result);

header("Content-length: $size");

header("Content-type: $type");

header("Content-Disposition: attachment; filename=$name");

echo $content; exit;

}

?>