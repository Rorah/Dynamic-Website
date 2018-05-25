<html>

<?php
require("Homepage.html");
?>

<form method="POST" action="insert.php">
<fieldset>
<legend>Add Course</legend>
Course: <input type="text" name="course">
<br>
<p>
Description: <input type="text" name="description">
<br>
<br>
First: <input type="radio" value="First" name="semester">
Second: <input type="radio" value="Second" name="semester">
</fieldset>
<br></p>
<pre>
			<input type="Submit" value="Submit">
</pre>
</form>
</html>
