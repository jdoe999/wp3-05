<?php 
require_once 'func.php';
$fname = filter_input(INPUT_GET, "fname");
$lname = filter_input(INPUT_GET, "lname");
$year = filter_input(INPUT_GET, "year");
?>

<!DOCTYPE html>
<html>
<head>
	<title>

	</title>
</head>
<body>

<form method="get">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br>
  <label for="lname">Rok Narození</label><br>
  <input type="text" id="year" name="year" value="2000"><br>
  <input type="submit" value="Submit"><br><br>
</form>

<?php

echo "<b>First Name </b>".$fname."<br><b>Last Name </b>".$lname."<br><b>Age </b>".summary($year);

?>

</body>
</html>
