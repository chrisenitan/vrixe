<?php
//do not require user account
$defaultAllowNoUser = true;
require("../garage/passport.php"); 

//check if user had a review
$ratingcheck = mysqli_query($conne,"SELECT * FROM reviews WHERE user = '$username' LIMIT 1"); 
  $ifratingava = 0;
 while($foundreview = mysqli_fetch_array($ratingcheck)){
    $ifratingava = 1;
   }
?>
<!DOCTYPE html>
<!-- data from the feedback page-->
<html lang="en">
<head>
<title>Saved Feedback - Vrixe</title>
<link rel="manifest" href="/manifest.json">
<meta name="description" content="Report Filed">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("../garage/resources.php"); ?>
</head>
<body>
<div id="gtr" onclick="closecloseb()"></div>


<?php require("../garage/deskhead.php"); 
  require("../garage/desksearch.php"); 
  require("../garage/deskpop.php");
  require("../garage/mobilehead.php"); 
  require("../garage/subhead.php");
  require("../garage/thesearch.php"); ?>

<br>
<div class="pagecen" >
	
<?php 
  $day =date("d m Y");
  $ranref = mysqli_real_escape_string($conne, $_POST['ranref']);
  $uas = mysqli_real_escape_string($conne, $_POST['uas']);
  $code = mysqli_real_escape_string($conne, $_POST['complainref']);
  $statement = mysqli_real_escape_string($conne, $_POST['statement']);
  $email = mysqli_real_escape_string($conne, $_POST['emails']);
  $user = mysqli_real_escape_string($conne, $_POST['user']);
  $rate = mysqli_real_escape_string($conne, $_POST['rate']);
  $via = mysqli_real_escape_string($conne, $_POST['via']);

     //review files
     $reviewusername = mysqli_real_escape_string($conne, $_POST['username']);
     $reviewfullname = mysqli_real_escape_string($conne, $_POST['fullname']);
     $reviewdesign = mysqli_real_escape_string($conne, $_POST['design']);
     $reviewux = mysqli_real_escape_string($conne, $_POST['ux']);
     $reviewfeatures = mysqli_real_escape_string($conne, $_POST['features']);
     $reviewsupport = mysqli_real_escape_string($conne, $_POST['support']);
     $review = mysqli_real_escape_string($conne, $_POST['review']);

 if ($rate != '' or $statement == '') {
  echo "<div class='pef'><div class='blfhead'>...you seem lost</div><br><br>

  <img alt='missing' src='/images/essentials/bug.png' class='everybodyimg'><br>
  <h class='miniss'>What is happening here?</h><br><h class='disl'>Usually this is where we save your feedbacks but looks like we got none from you.<br>Keep having this issue? Please mail us instead.</h> <br><br>
   <a href='mailto:contact@vrixe.com'><button class='copele'><i class='material-icons' style='vertical-align:sub;font-size:17px'>mail</i> Mail Us</button></a><br><br>

   <h class='miniss'>More?</h><br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i></i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> INSTALL WEB APP</button></a></h><br><br>

  <div class='blfheadalt'></div>
  </div>
<br><br>";
 }

 else if ($via == 'feedback'){
$sql="INSERT INTO feedbacks (ranref, user, code, uas, statement, dated, mails)
VALUES
('$ranref','$user','$code','$uas','$statement','$day','$email')";

  echo "<div class='pef'>
  <div class='blfhead'>We've saved that</div><br>

  <img alt='Vrixe Feedback' src='/images/essentials/statusok.png' class='everybodyimg'><br>
  <h class='miniss'>Thanks for talking to us.<br></h>
  <h class='disl'>We would reply very shortly and get things sorted.<br>Please find us online, we just might be talking about this already.</h><br><br><br>
   <h class='miniss'>We have a progressive web app<br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> Install Web App</button></a></h><br><br>

<div class='blfheadalt'></div>
  </div>
  
  <br>";

if (!mysqli_query($conne,$sql))
  {
  die('Error: ' . mysqli_error($conne));
  }}



 else if ($via == 'review'){
//check if user had review if yes do update code
  if ($ifratingava == 1){

$updatereview = "UPDATE reviews SET user='$reviewusername', fullname='$reviewfullname', design='$reviewdesign', ux='$reviewux', features='$reviewfeatures', support='$reviewsupport', texts='$review' WHERE user='$username'";

echo"<div class='pef'>
  <div class='blfhead'>Review Updated</div><br>

  <img alt='Vrixe Feedback' src='/images/essentials/statusok.png' class='everybodyimg'><br>
  <h class='miniss'>Thank you for rating Vrixe.</h><br>
  <h class='disl'>If you have any concerns about the app, please send us a feedback. We'd be happy to help.</h><br><br>

  <a href='/aboutvrixe#reviews'><button class='copele'><i class='material-icons' style='vertical-align:bottom;font-size:17px'>rate_review</i> Your Review</button></a><br><br><br>
  
   <h class='miniss'>We have a progressive web app<br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i><br>
<h class='miniss'>Have you tried our PWA<br><a href='/app/pwa.html'><button class='control'> Install Web App</button></a></h><br><br>

<div class='blfheadalt'></div>
  </div><br>";

if (!mysqli_query($conne,$updatereview))
  {
  die('Error: ' . mysqli_error($conne));
  }
  }

  //if not the insert new review
  else{
    $reviewdate = date("d M Y");
$insertreview="INSERT INTO reviews (fullname, user, design, reviewdate, ux, features, support, texts)
VALUES
('$reviewfullname','$reviewusername','$reviewdesign','$reviewdate','$reviewux','$reviewfeatures','$reviewsupport','$review')";

  echo "<div class='pef'>
  <div class='blfhead'>Review Saved</div><br>

  <img alt='Vrixe Feedback' src='/images/essentials/statusok.png' class='everybodyimg'><br>
  <h class='miniss'>Thank you for rating Vrixe.</h><br>
  <h class='disl'>You are in control. If you need to delete your review, please send us a feedback anytime. Our next update will feature an easier way to do this.</h><br><br>

  <a href='/aboutvrixe#reviews'><button class='copele'><i class='material-icons' style='vertical-align:bottom;font-size:17px'>rate_review</i> Your Review</button></a><br><br>


<br><br>
   <h class='miniss'>We have a progressive web app<br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i><br>
<h class='miniss'>Have you tried our PWA<br><a href='/app/pwa.html'><button class='control'> Install Web App</button></a></h><br><br>

<div class='blfheadalt'></div>
  </div><br>";

if (!mysqli_query($conne,$insertreview))
  {
  die('Error: ' . mysqli_error($conne));
  }}
}
 mysqli_close($conne);
?>
<br><br>
</div>
<br><br>


<?php require("../garage/networkStatus.php"); ?>
</body>
</html>
