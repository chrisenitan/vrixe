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
   $usernameEmail = $founduser['email'];
   $accountcreated = $founduser['created'];

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
<html lang="en">
<head>
<title>Issue with Account - Vrixe</title>
<link rel="manifest" href="/manifest.json">
<meta name="description" content="Account errors">
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

<div class="pagecen" >
	<br><br>
  <div class='pef' style='display:inline-block'>
    <div class='blfhead'>...email not verified</div><br><br>

  <img alt='Unverified Account' src='/images/essentials/loading.svg' class='everybodyimg'><br>
  <h class='miniss'>What is happening here?</h><br><h class='disl'>We noticed your email has not been verified since <?php echo $accountcreated ?>. Please verify your email, we really need to make sure this is a real account.</h> <br><br>
      <h class='miniss'>What can I do?</h><br><h class='disl'>Please check your email inbox and spam folders, we've sent a new verification mail to: <h class='miniss'><?php echo $usernameEmail ?></h><br><br>
    
    <a href='faq#spamfilter'>Didn't get a verification email? <i class='material-icons' style='font-size:17px;vertical-align:sub'>arrow_forward</i></a></h> <br><br>
   <a href='/help/feedbacks'><button class='copele'><i class='material-icons' style='font-size:17px;vertical-align:sub'>feedback</i> Send Feedback</button></a><br><br>

   <h class='miniss'>More?</h><br>

<i class='material-icons' style='vertical-align:bottom;font-size:17px;color:#065cff'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> Install Web App</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div><br><br><br>
  

<br><br>
</div>
<br><br>


<?php require("../garage/networkStatus.php"); ?>
</body>

</html>
