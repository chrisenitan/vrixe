<!DOCTYPE html>
<html>
<head>
<style>
#bade{
	color: crimson;
	font-size: 13px;
}
#oke{
	color: #ce9001;
	font-size: 13px;
}

</style>
</head>
<body>

<?php
require("visa.php"); 
$e = mysqli_real_escape_string($conne, $_GET['e']);

if (!$conne) {
die('Could not connect: ' . mysqli_error($conne));
}
mysqli_select_db($conne,"profiles");

$result = mysqli_query($conne,"SELECT * FROM profiles WHERE email = '".$e."'");
$got = 0;
$username;

while($row = mysqli_fetch_array($result)) {
	$got = 1;
	$mail = $row['email'];

echo "<h id='bade'>please use valid email format</h>";

}
if ($got == 0){
	echo "<h id='oke'>we'll send you a verification mail</h>";
}


mysqli_close($conne);
?>
</body>
</html>