<?php
require("../garage/visa.php");
if (isset($_COOKIE['user'])){
 $cookie = $_COOKIE['user'];
 $cooked = mysqli_query($conne,"SELECT * FROM profiles WHERE cookie = '$cookie' LIMIT 1"); 
 $headcook = 0;
   while($founduser = mysqli_fetch_array($cooked)){
     $headcook = 1;
   $fullname = $founduser['fullname'];
   $username = $founduser['username'];
    $userheadimg = $founduser['picture'];
}
if ($headcook == 0){
     $fullname = "relog";
   $username = "";
}}
else{
     $fullname = "";
   $username = "";
}
?>
<!DOCTYPE html>
<!-- handling unathorised logins-->
<html lang="en">
<head>
<title>Account security- Vrixe</title>
<link rel="manifest" href="/manifest.json">
<meta name="description" content="Help with account security issues.General sccount security for Vrixe users. Level 1">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("../garage/resources.php"); ?>

</head>
<body>


<div id="gtr" onclick="closecloseb()"></div>


<?php require("../garage/deskhead.php"); ?>
<?php require("../garage/desksearch.php");  ?>

<?php require("../garage/deskpop.php"); ?>

<?php require("../garage/mobilehead.php"); ?>

<?php require("../garage/subhead.php");?>

<?php require("../garage/thesearch.php"); ?>


<br>
	
<?php 
if (isset($_GET['refs']) and isset($_GET['q'])){
  $user = mysqli_real_escape_string($conne, $_GET['refs']); 
  $query = mysqli_real_escape_string($conne, $_GET['q']); 

  echo "<div class='pagecen'>
<div class='pef'>

  <div class='blfhead'>Take a deep breath, we can fix this</div>
 <br>

  <i class='material-icons' style='color:#e21b1b;font-size:17px'>contact_support</i><br>

 <h class='miniss'>We just need to verify some account information from you</h><br>
 <h class='miniss'>Then we shut things down temporarily.</h>
<br><br>
   
<form method='post' action='secure_account.php' style='width:100%'>
<input type='text' class='rates' value='$user' name='accountuser'>
<input type='text' class='rates' value='$query' name='reqaction'>

<input type='text' class='privinput' placeholder='... .... ...' name='accountdate'><br>
<h class='petd'>when did you create your account<br>[date does not have to be exact]</h><br><br>

<input type='email' required class='privinput' placeholder='... .... ...' name='accountemail'><br>
<h class='petd'>account email</h><br><br>

<input type='text' class='privinput' placeholder='... .... ...' name='securecode' required><br>
<h class='petd'>your secure code<br>[cant remember? you have to <a href='mailto:contact@vrixe.com'>mail</a> us then]</h><br>

<br>
<h class='miniss'>that's all we need for step one<br><button class='submit' title='Next'><i class='material-icons'>check</i></button></h><br><br>


</form>
  <div class='blfheadalt'></div>
  </div>
  </div>";

}
else{
    echo "<div class='pagecen'>
<div class='pef'>

  <div class='blfhead'>Straight faces here</div>
 <br>
  <img alt='Account Security' src='/images/essentials/cog.png' class='everybodyimg'>
  <br>
   <h class='miniss'>This is where we look after ill accounts<br>...and the occasional candy lovers</h><br>

  <div class='yalert'>All clean, if anything goes wrong, you'll see here</div>

<br><br>
<h class='miniss'>Keep Vrixe with you <br><a href='app/pwa.html'><button class='copele'> INSTALL WEB APP</button></a></h><br><br>

  <div class='blfheadalt'></div>
  </div>
  </div>";
}

?>

<br><br>


<div id="offline" onclick="document.getElementById('offline').style.display='none';">Offline!<br><span id="smoff">Some features will not be available</span></div>
</body>

</html>
