<?php
require("../garage/visa.php");
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Recover Account - Vrixe</title>
<link rel="manifest" href="/manifest.json">
<meta name="description" content="Recover Vrixe Account">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("../garage/resources.php"); ?>
</head>
<body>
<div id="gtr" onclick="closecloseb()"></div>


<?php require("../garage/deskhead.php"); ?>

<?php require("../garage/deskpop.php"); ?>

<?php require("../garage/mobilehead.php"); ?>

<?php require("../garage/subhead.php");?>

<?php require("../garage/thesearch.php"); ?>


<br>
<div class="postcen" >

	
<?php 
 $day =date("d m Y");
 $rate = mysqli_real_escape_string($conne, $_POST['rate']);
 $email = mysqli_real_escape_string($conne, $_POST['recmail']);

 if ($rate != '' or $email == '') {
  echo "<div class='pef'><div class='blfhead'>...you seem lost</div><br><br>

  <img alt='missing' src='/images/essentials/bug.png' class='everybodyimg'><br>
  <h class='miniss'>What is happening here?</h><br><h class='disl'>Usually this is where we reset and recover your account but looks like we're not sure of your details.</h> <br><br>
   <a href='/help/feedbacks'><button class='copele'><i class='material-icons' style='font-size:17px;vertical-align:middle'>feedback</i> Send Feedback</button></a><br><br>

   <h class='miniss'>More?</h><br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i></i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> INSTALL WEB APP</button></a></h><br><br>

  <div class='blfheadalt'></div>
  </div>
<br><br>";
 }
 else{
 	$sql = "UPDATE profiles SET freq='$day' WHERE email = '$email'";

$collect = mysqli_query($conne,"SELECT * FROM profiles WHERE email = '$email' LIMIT 1"); 
$gotaccount = 0;
   while($row2 = mysqli_fetch_array($collect)) {
   	$gotaccount = 1;
$gottenpassword = $row2['password'];
$gottenusername = $row2['username'];

echo "
<div class='pef'>
   <div class='blfhead'>We found it</div><br>
<img src='https://vrixe.com/images/essentials/taken.svg' class='everybodyimg'><br>";

#send recovery email
$subject = 'Your password recovery request';
$feed = 'feedback@vrixe.com';
$from = 'events@vrixe.com';//or could be a name

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$headers .= "Organization: Vrixe\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "Return-Path: $feed\r\n";

$headers .= 'From: Vrixe '.$from."\r\n".
      'Reply-To: '.$feed."\r\n" .
      'X-Mailer: PHP/' . phpversion();

$message = "<html><body style='margin:auto;max-width:500px;font-family:Titillium Web, Roboto, sans serif;padding:1%'>

<p style='padding-top:10px;padding-bottom:5px;margin-bottom:5px;font-size:30px;font-weight:bold;width:100%;text-align:center;color:#404141'><img src='https://vrixe.com/mail/vtrans.png' style='width:60px;height:50px;border-radius:50%;'><br>
Hi Vrixer!</p>
<p style='margin-top:2px;font-size:14px;text-align:center'>It is important that you change these details...</p><br>

<img alt='new features on vrixe' src='https://vrixe.com/mail/updateimages/update.jpg' style='height:auto;width:96%;margin-left:2%'>


<div style='background-color:#f7f8fa;width:92%;text-align:center;height:auto;padding-bottom:5%;padding-top:5%;padding-left:2%;padding-right:2%;margin-left:2%;color:#16253f;font-size:14px'>

<div style='width:97%;margin:auto;height:auto;overflow:hidden;'>
<img alt='lost in spambox' src='https://vrixe.com/mail/verifyemail/login.png' style='float:left;width:50px;height:50px'>
<div style='float:right;width:80%;padding-right:1%;text-align:left'>
<b><h style='font-size:14px'>Account Details:</h></b></br>
<h style='font-size:14px'><b>Username: </b>$gottenusername <b>Password: </b>$gottenpassword</h>
</div>
</div><br>

<div style='width:90%;margin:auto;height:1px;background-color:#a2a4a6;clear:both'></div><br>


<a href='https://vrixe.com/'><div style='width:44%;height: auto;font-size: 12px;outline:none;font-weight:bolder;padding: 5px;display: inline-block;color:#f7f8fa;background-color:#ec3832;border-style: solid;border-width: 1px;border-radius: 3px;border-color:#ec3832;cursor: pointer;overflow:hidden;font-family:Titillium Web, Roboto, sans serif;text-align: center;margin-bottom: 5px;'>LOG IN</div></a><br>

<h style='font-size:12px'>Please let us know if you need us.</h>


</div><br><br>



<div style='text-align:center;width:auto;word-spacing:15px'>

<a href='https://twitter.com/vrixeapp'><img alt='Twitter' src='https://vrixe.com/mail/mtweet.png' style='width:25px;height:25px;display:inline-block'></a>

<a href='https://plus.google.com/b/104974081981652839346/104974081981652839346?hl=en'><img alt='Google Plus' src='https://vrixe.com/mail/mplus.png' style='width:25px;height:25px;display:inline-block'></a> 

<a href='https://instagram.com/vrixe'><img alt='Instagram' src='https://vrixe.com/mail/mgram.png' style='width:25px;height:25px;display:inline-block'></a> 

<a href='https://youtube.com/channel/UCNDZP6M3t_L7Fxxc-a9rYWQ'><img alt='Youtube' alt='youtube' src='https://www.vrixe.com/mail/mtube.png' style='width:25px;height:25px;display:inline-block'></a> 

<a href='https://facebook.com/vrixe'><img alt='Facebook' src='https://vrixe.com/mail/mface.png' style='width:25px;height:25px;display:inline-block'></a> 

</div>

<div style='background-color:transparent;width:92%;text-align:center;height:auto;padding-bottom:5%;padding-top:5%;padding-left:2%;padding-right:2%;margin-left:2%;color:#16253f;font-size:11px'>You got this email because you requested your password. If you did not, please <a href='https://vrixe.com/help/feedbacks'>contact us</a><br>
</div>
";
$message .= "</body></html>";
     
          if($phpurl == 'vrixe-enn'){
     //do nothing this code only check if we are on developement server
   }else{
if(mail($email, $subject, $message, $headers)){
echo "<div id='galert'>We'll email you the next step.</div><br>";
} else{
echo "<div id='oalert' >We tried to mail you but Email could not be sent<br>Please contact us to get your initials.<br>We'll fix this</div><br>";
}}
echo "<h class='sword'>Please change your password when you find time to...<br>and have it backed up...<br><br><h class='miniss'>Or we'll have to do this again.</h><br><br>
<a href='/index.php?q=login'><button aria-label='Log In' class='copele'>LOG IN</button></a><br>
      <br>
<div class='blfheadalt'></div>
";

if (!mysqli_query($conne,$sql)){
  die('Error: ' . mysqli_error($conne));
  }else {echo "";}
  mysqli_close($conne);
}
if ($gotaccount == 0) {
  echo "<div class='pef'>
   <div class='blfhead'>Account Missing</div><br>

<img src='https://vrixe.com/images/essentials/nodata.svg' class='everybodyimg'><br>
  <h class='sword'>Whoops!<br>We couldn't find your account.</h><br>

   <h class='miniss'>Please send us a feedback and we'll look into this for you</h><br><br> 
   <a href='/help/feedbacks?ext=llcv'><button class='copele'><i class='material-icons' style='font-size:17px;vertical-align:middle'>feedback</i> Feedback</button></a><br><br><br>

   
<div class='blfheadalt'></div>

";
}}

?>

</div>
<br><br>


<?php require("../garage/networkStatus.php"); ?>
</body>
</html>