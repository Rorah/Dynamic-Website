<html>

<?php
require("homepage.html");
?>
<fieldset>
<form method = "POST" action="update.php">
Enter the name of the course you want to update:
<input type="text" name="course">
<br>
Enter the new semester:
<br>
<input type="text" name="sem">
<input type="submit" value="Update!">
</fieldset>
</form>
</html>
