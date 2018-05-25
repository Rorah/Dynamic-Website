<?php
include_once ("connect2.php");
require("Homepage.html");

$semester = $_POST['sem'];
$coursename = $_POST['course'];

$query=("UPDATE slis SET Semester = \"$semester\" WHERE Course = '$coursename'") ;
mysqli_query($link, $query);

?>
