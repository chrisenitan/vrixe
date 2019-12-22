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
     $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>Feedbacks</button>";
    $userheadimg = $founduser['picture'];
     $userheadconfirm = $founduser['confirm'];
}
if ($headcook == 0){
     $fullname = "relog";
   $username = "";
}}
else{
     $fullname = "";
   $username = "";
   $userheadconfirm = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Feedbacks | Vrixe</title>
<link rel="manifest" href="/manifest.json">
<meta name="description" content="Found a bug? Got an issue or just wanna say 'hey'.">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("../garage/resources.php"); ?>

</head>
<body onload="uas()">


<div id="gtr" onclick="closecloseb()"></div>


<?php require("../garage/deskhead.php"); ?>
<?php require("../garage/desksearch.php");  ?>
<?php require("../garage/deskpop.php"); ?>


<?php require("../garage/mobilehead.php"); ?>

<?php require("../garage/subhead.php");?>

<?php require("../garage/thesearch.php"); ?>



<br>


<div id="bugform" >


<?php

if (isset($_GET['ext'])) #if ref is passed as llcv loged out lost login initail cant verify
{
$ext = mysqli_real_escape_string($conne, $_GET['ext']);
}else {$ext = "";}

if (isset($_GET['mails'])) #if ref is passed user is trying to unsubscribe
{
$unmail = mysqli_real_escape_string($conne, $_GET['mails']);//unsubscribe emails
}else {$unmail = "";}

if (isset($_GET['rate'])) #if ref is passed as user is trying to rate
{
$rate = mysqli_real_escape_string($conne, $_GET['rate']);
}else {$rate = "";}

$sech = mysqli_real_escape_string($conne, $_POST['refs']); //privding feedback on...



if($unmail > ""){ //user is trying to unsubscribe
$deletemail = mysqli_query($conne,"UPDATE newsletter SET day='unsubscribed' WHERE mail='$unmail' "); 

  echo "
   <div class='pef' style='min-height:10px'>
    <div class='blfhead'>Subscriptions</div><br><br>

    <img alt='unsubscribed' src='/images/essentials/removemail.png' class='everybodyimg'><br>

    <br><h class='bugdes'>That's it! no more update emails for you...</h><br>


<br>
<div class='blfheadalt'></div></div>
    ";


}


if($username > "" and $ext == "" and $rate == ""){ //user is simply giving feedback

echo "  <div class='pef'>
    <div class='blfhead'>Feedbacks</div><br>

    <form action='filed.php' method='post' style='width:100%'>
    <i class='material-icons' style='font-size: 34px;color: #065cff;'>contact_support</i><br>
    ";

if ($sech > ""){ //user has something to complain about
echo "
<input style='display:none' type='text' name='complainref' class='privinput' value='$sech' >";
echo "<br><h class='bugdes'>Providing feedback on <span style='color:#1fade4;'>'$sech'</span></h><br>

<input type='text' class='rates' value='$username' name='user'>
<input type='text' class='rates' value='feedback' name='via'>


<input type='text' style='display:none;' class='privnput' name='uas' id='bt' required><br>
<script>
  function uas(){
document.getElementById('bt').value=navigator.userAgent;
}
</script>

<textarea required style='height:120px' class='privinput' id='autofeed' placeholder='... .... ... ... .... ...' name='statement' required></textarea><br>

  <button type='button' class='set' onclick='ones()'> SPAM </button>
  <button type='button' class='set' onclick='twos()'> VIOLENCE </button>
  <button type='button' class='set' onclick='threes()'> DISCRIMINATING </button>
  <button type='button' class='set' onclick='fours()'> DUPLICATE </button>
<br><br>
<script>
function ones(){
  document.getElementById('autofeed').value='Content is a spam';
}
function twos(){
  document.getElementById('autofeed').value='Content is associated with violent activities';
}
function threes(){
  document.getElementById('autofeed').value='Content is racially or sub-culture discriminating';
}
function fours(){
  document.getElementById('autofeed').value='Content is a duplicate of';document.getElementById('autofeed').focus()
}

</script>

";

}
else{ //user has nohingto complain about but is here
  echo "
<br><h class='bugdes'>How may we help you?</h><br>
<h class='miniss'>Profile Management, Usage settings & Everything else</h><br>

<input type='text' class='rates' value='$username' name='user'>

<input type='text' class='rates' value='feedback' name='via'>

<input type='text' style='display:none;' class='privnput' name='uas' id='bt' required><br>
<script>
  function uas(){
document.getElementById('bt').value=navigator.userAgent;
}
</script>

<textarea required style='height:120px' class='privinput' id='autofeed' placeholder='... .... ... ... .... ...' name='statement' required></textarea><br><br>";

}


echo"
<input type='text' name='ranref' class='rates' id='ranref'>

<input type='text' name='rate' class='rates'>
<button class='copele'><i class='material-icons' style='vertical-align:sub;font-size:17px'>check</i> Submit</button>
<br><br></form><br>

<i class='material-icons' style='color: #ffdc64;'>star</i>
<i class='material-icons' style='color: #ffdc64;'>star</i>
<i class='material-icons' style='color: #ffdc64;'>star</i>
<i class='material-icons' style='color: #ffdc64;'>star</i>
<i class='material-icons' style='color: #ffdc64;'>star</i>

<br>
<h class='miniss'>Feeling generous today?<br>we love the in-house rating from our users...</h><br>

<a href='feedbacks.php?rate=o'><button class='control'><i class='material-icons' style='vertical-align:bottom;font-size:17px'>rate_review</i> Rate Us</button></a>

<br><br><br>
<div class='blfheadalt'></div></div><br>
";

}#endof user is giving feed

else if($username >= "" and $ext > "" and $rate == "" ){ //user may not be not given but someone has url parajeter to report something
  echo "
   <div class='pef'>
    <div class='blfhead'>Feedbacks</div><br>

    <form action='filed.php' method='post' style='width:100%'>
    <i class='material-icons' style='font-size: 34px;color: #065cff;'>contact_support</i><br>

    <br><h class='bugdes'>We're waiting to read this on the other side...</h><br>


<input type='text' style='display:none;' class='privnput' name='uas' id='bt' required><br>
<script>
  function uas(){
document.getElementById('bt').value=navigator.userAgent;
}
</script>

<textarea required style='height:120px' class='privinput' id='autofeed' placeholder='... .... ... ... .... ...' name='statement' required></textarea><br>


<input type='text' name='ranref' class='rates' id='ranref'>
<input type='text' class='rates' value='feedback' name='via'>

<input type='text' name='rate' class='rates'><br><br>
<button class='copele'><i class='material-icons' style='vertical-align:sub;font-size:17px'>check</i> Submit</button>
<br><br></form>

<br>
<div class='blfheadalt'></div></div><br>
    ";
}


else if($username > "" and $ext == "" and $rate > "" and $userheadconfirm > ""){ //user is trying to rate us

echo " 
<div class='pef'>
    <div class='blfhead'>Your Review</div><br>

<i class='material-icons' style='color: #ffdc64;'>star</i>
<i class='material-icons' style='color: #ffdc64;'>star</i>
<i class='material-icons' style='color: #ffdc64;'>star</i>
<i class='material-icons' style='color: #ffdc64;'>star</i>
<i class='material-icons' style='color: #ffdc64;'>star</i>

<br>
    <form action='filed.php' method='post' style='width:100%'>
    <input type='text' style='display:none;' class='privnput' name='uas' id='bt' required><br>
<script>
  function uas(){
document.getElementById('bt').value=navigator.userAgent;
}
</script>

<h class='bugdes'>Rate each category and add a short review.</h><br><br>

<input type='text' class='rates' value='$username' name='username'>
<input type='text' class='rates' value='$fullname' name='fullname'>
<input type='text' name='rate' class='rates'>
<input type='text' class='rates' value='$username' name='statement'>
<input type='text' class='rates' value='review' name='via'>



<button class='ratingsbtn' type='button'>
<small>Design</small>
<div class='jal'></div>
<select class='hsell' name='design'>
<option>20</option>
<option>30</option>
<option>40</option>
<option>50</option>
<option>60</option>
<option>70</option>
<option>80</option>
<option>90</option>
<option>100</option>
</select><span style='font-size: 20px;'> %</span>
</button>

<button class='ratingsbtn' type='button'>
<small>Experience</small>
<div class='jal'></div>
<select class='hsell' name='ux'>
<option>20</option>
<option>30</option>
<option>40</option>
<option>50</option>
<option>60</option>
<option>70</option>
<option>80</option>
<option>90</option>
<option>100</option>
</select><span style='font-size: 20px;'> %</span>
</button>

<button class='ratingsbtn' type='button'>
<small>Features</small>
<div class='jal'></div>
<select class='hsell' name='features'>
<option>20</option>
<option>30</option>
<option>40</option>
<option>50</option>
<option>60</option>
<option>70</option>
<option>80</option>
<option>90</option>
<option>100</option>
</select><span style='font-size: 20px;'> %</span>
</button>

<button class='ratingsbtn' type='button'>
<small>Support</small>
<div class='jal'></div>
<select class='hsell' name='support'>
<option>20</option>
<option>30</option>
<option>40</option>
<option>50</option>
<option>60</option>
<option>70</option>
<option>80</option>
<option>90</option>
<option>100</option>
</select><span style='font-size: 20px;'> %</span>
</button>


<br><br><br>



<textarea required style='height:90px;' class='privinput' id='autofeed' placeholder='What do you think about vrixe... ...' name='review' required maxlength='200'></textarea><br>



<br>
<h class='petd'>reviews are protected by our <br> <a href='/app/terms.html#reviews'><h class='miniss'>Terms & Policies</h></a>.</h><br><br>
<button class='copele'>Submit <i class='material-icons' style='font-size:17px;vertical-align:sub'>send</i></button>
<br><br></form><br><br>


";


}


else{ //nobody, just a tourist 
  echo"
    <div class='pef'>
    <div class='blfhead'>Feedbacks</div><br>

  <img alt='$iv' src='/images/essentials/error.png' class='everybodyimg'>
  <h class='miniss'>What is Vrixe?</h>
<br>

  <h class='miniss'>I did not get my emails</h>
<br>




 <h class='miniss'>I can't find my pencil!</h>
<br>

 <h class='bottom'>Tried Vrixe, found a bug? we'd love to hear from you</h>
<br>

<br>
   <a href='/index'><button class='copele'>TRY VRIXE</button></a><br><br>

   <h class='miniss'>More?<br>

<i class='material-icons' style='color: #065cff;'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> INSTALL WEB APP</button></a></h><br><br>


<br>
<div class='blfheadalt'></div></div><br>
<input type='text' class='rates' id='bt'><br>
<script>
  function uas(){
document.getElementById('bt').value=navigator.userAgent;
}
</script>
    ";
}




?>

</div><br><br>

<div id="offline" onclick="document.getElementById('offline').style.display='none';">Offline!<br><span id="smoff">Some features will not be available</span></div>
</body>
</html>