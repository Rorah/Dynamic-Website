<?php

include_once("connect2.php");
require("Homepage.html");

$Course = $_POST['course'];
$Description = $_POST['description'];
$Semester = $_POST['semester'];



print "<br>One record has been added successfully.";
$query = "INSERT INTO slis (Course, Description, Semester) VALUES ('$Course', '$Description', '$Semester')";

mysqli_query($link, $query);

$query=("SELECT * FROM slis");

$result = mysqli_query($link, $query);


$num_rows = mysqli_num_rows( $result );

print "<br>There are $num_rows records.";
print "<table border=\"l\">\n";
while ( $a_row = mysqli_fetch_row( $result )) {

print"<tr>\n";
foreach ( $a_row as $field ) {
	print "\t<td>".$field."</td>\n";
}
print "</tr>\n";
}
print "</table>\n";
?>
