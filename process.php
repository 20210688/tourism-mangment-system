<?php
include_once 'database.php';
if(isset($_POST['btn']))
{
// variables for input data

$full_name = $_POST['full_name'];
$email = $_POST['email'];
// sql query for inserting data into database

mysqli_query($conn,"insert into users(full_name,email) values ('$full_name','$email')") or die(mysqli_error());
echo "<p align=center>Data Added Successfully.</p>";
}
?> 