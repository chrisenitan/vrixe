<!DOCTYPE html>
<html>
<head>
<style>
#bad{
	color: crimson;
	font-size: 13px;
}
#ok{
	color: #16b31c;
	font-size: 13px;
}

</style>
</head>
<body>

<?php
require("visa.php");  
$q = mysqli_real_escape_string($conne, $_GET['q']);

if (!$conne) {
die('Could not connect: ' . mysqli_error($conne));
}
mysqli_select_db($conne,"profiles");

$result = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '".$q."'");
$got = 0;
$username;

while($row = mysqli_fetch_array($result)) {
	$got = 1;
	$user = $row['username'];

echo "<h id='bad'>username <b>$user</b> is taken. Please use another.</h>";

}
if ($got == 0){
	echo "<h id='ok'>username <b>$q</b> is available</h>";
}


mysqli_close($conne);
?>
</body>
</html>