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

    $ratingcheck = mysqli_query($conne,"SELECT * FROM reviews WHERE user = '$username' LIMIT 1"); 
    $ifratingava = 0;
   while($foundreview = mysqli_fetch_array($ratingcheck)){
    $ifratingava = 1;
   }

}
if ($headcook == 0){
     $fullname = "relog";
   $username = "";
   $ifratingava = 0;
}}
else{
     $fullname = "";
   $username = "";
   $ifratingava = 0;
}
?>
<!DOCTYPE html>
<!-- from the feedback page-->
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


<?php require("../garage/deskhead.php"); ?>
<?php require("../garage/desksearch.php");  ?>

<?php require("../garage/deskpop.php"); ?>

<?php require("../garage/mobilehead.php"); ?>

<?php require("../garage/subhead.php");?>

<?php require("../garage/thesearch.php"); ?>


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
  echo "
  <div class='pef'><div class='blfhead'>...you seem lost</div><br><br>

  <img alt='missing' src='/images/essentials/bug.png' class='everybodyimg'><br>
  <h class='miniss'>What is happening here?</h><br><h class='disl'>Usually this is where we save your feedbacks but looks like we got none. Please mail us at this point.</h> <br><br>
   <a href='mailto:contact@vrixe.com'><button class='copele'>SEND MAIL</button></a><br><br>

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

  echo "
  <style>#write{display:none}</style>
<div class='pef'>
  <div class='blfhead'>We've saved that</div><br>

  <img alt='Vrixe Feedback' src='/images/essentials/statusok.png' class='everybodyimg'><br>
  <h class='miniss'>Thanks for talking to us.<br>We would reply very shortly and get things sorted.<br>Find us online, we just might be talking about this already.
<br><br><br>
   <h class='miniss'>More?<br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> INSTALL WEB APP</button></a></h><br><br>

<div class='blfheadalt'></div>
  </div>
  
  <br>
  ";

if (!mysqli_query($conne,$sql))
  {
  die('Error: ' . mysqli_error($conne));
  }}



 else if ($via == 'review'){
//check if user had review if yes do update code
  if ($ifratingava == 1){

$updatereview = "UPDATE reviews SET user='$reviewusername', fullname='$reviewfullname', design='$reviewdesign', ux='$reviewux', features='$reviewfeatures', support='$reviewsupport', texts='$review' WHERE user='$username'";

echo"
<style>#write{display:none}</style>
<div class='pef'>
  <div class='blfhead'>Review Updated</div><br>

  <img alt='Vrixe Feedback' src='/images/essentials/statusok.png' class='everybodyimg'><br>
  <h class='miniss'>Thank you for rating Vrixe.<br>We love green bars, please let us know what we can do to get them.<br>If you have any concerns about the app, please send us a feedback. We'd be happy to help...<br><br>

  <a href='/aboutvrixe#reviews'><button class='copele'>SEE YOUR REVIEW</button></a><br><br>

<br><br>
   <h class='miniss'>More?<br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i><br>
<h class='miniss'>Have you tried our PWA<br><a href='/app/pwa.html'><button class='control'> INSTALL WEB APP</button></a></h><br><br>


<div class='blfheadalt'></div>
  </div>
  
  <br>
  ";

if (!mysqli_query($conne,$updatereview))
  {
  die('Error: ' . mysqli_error($conne));
  }
  }

  //if not the insert new review
  else{
$insertreview="INSERT INTO reviews (user, fullname, pic, design, ux, features, support, texts)
VALUES
('$reviewusername','$reviewfullname','$reviewdesign','$reviewux','$reviewfeatures','$reviewsupport','$review')";

  echo "
  
<style>#write{display:none}</style>
<div class='pef'>
  <div class='blfhead'>Review Saved</div><br>

  <img alt='Vrixe Feedback' src='/images/essentials/statusok.png' class='everybodyimg'><br>
  <h class='miniss'>Thank you for rating Vrixe.<br>You are in control. If you need to delete your review, please send us a feedback anytime...<br><br>

  <a href='/aboutvrixe#reviews'><button class='copele'>SEE YOUR REVIEW</button></a><br><br>


<br><br>
   <h class='miniss'>More?<br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i><br>
<h class='miniss'>Have you tried our PWA<br><a href='/app/pwa.html'><button class='control'> INSTALL WEB APP</button></a></h><br><br>


<div class='blfheadalt'></div>
  </div>
  
  <br>
  ";

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


<div id="offline" onclick="document.getElementById('offline').style.display='none';">Offline!<br><span id="smoff">Some features will not be available</span></div>
</body>

</html>
