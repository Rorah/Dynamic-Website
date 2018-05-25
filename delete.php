<?php
include_once("connect2.php");
require("Homepage.html");

$course = $_POST['coursename'];

$query = "DELETE FROM slis WHERE Course = \"$course\"";

print "$course has been successfully deleted.";
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
