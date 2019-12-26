<?php
//do not require user account
$defaultAllowNoUser = true;
require("../garage/passport.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Verify Account - Vrixe</title>
<link rel="manifest" href="/manifest.json">
<meta name="description" content="Confirm Vrixe Account">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("../garage/resources.php"); ?>
</head>
<body>
<div id="gtr" onclick="closecloseb()"></div>

<?php require("../garage/deskhead.php");
  require("../garage/deskpop.php"); ?>

<?php $pagename = "<button class='hbut' id='mbut' aria-label='vrixe'>Confirm Account</button>";
  require("../garage/mobilehead.php"); ?>

<?php require("../garage/subhead.php");
  require("../garage/thesearch.php"); ?>
<br>
	
<?php 
 $day =date("d m Y");
  $cut = mysqli_real_escape_string($conne, $_GET['refs']);

//if no user but with code, new user. tell them they need the right browser
 if ($cut > '' and $cookie == '') {
 	echo "
  <div class='pagecen'>
<div class='pef'>
<div class='blfhead'>Something went wrong there</div><br> 
<br><br>

<img alt='Unconfirmed' src='https://vrixe.com/images/essentials/browser.svg' class='everybodyimg'>
   <br>
    <h class='miniss'>What is happening here?</h><br><h class='disl'>We could not find your account on this device. Sure you're logged in?</h> <br><br>
    
    <h class='miniss'>What can I do?</h><br>Please make sure you're logged in and retry. If you're already logged in, please log out and back in again.<br>That should do it.<br><br>


	<h class='minis'>do you keep getting this page?<br><a href='/help/feedbacks?ext=lvtw'><button class='copele'><i class='material-icons' style='font-size:17px;vertical-align:text-top'>report</i> Report It </button></a></h><br><br>
	<h class='minis'>or please try:</h><br>
  <h class='miniss'>log into your account <a href='/index?q=login' style='text-decoration:underline;text-underline-position:under;'>here</a> and retry verification</h><br>

	<br><br>

  <div class='blfheadalt'></div>
   </div>
  </div>
  <br>";
 }
//if user revisiting or none user visiting. why are you here, send away
 else  if ($cut == '' and $cookie == '' or $cut == '' and $cookie > '') {
  echo "
<script>
 document.location = '/index.php';
 </script>
  ";
 }
 //cool people getting it all right, verify them
 else if ($cut > '' and $cookie > '' and $freq == $cut){
  $url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=06bfc66ceaf02708dafb98bf50c15cbb49e2532ba69fedf6f7da78a1805ad281&ip=".$_SERVER['REMOTE_ADDR']."&format=json"));
 $z = $url->countryName;

  $newsday =date("Y-m-d");

 	$sql = "UPDATE profiles SET confirm='$cut', freq='$newsday' WHERE cookie = '$cookie'";

  $confm = "INSERT INTO newsletter (mail, day, place) VALUES ('$email', '$newsday', '$z') ";

   $reqpage = "confirm";

  //send updates email
 require("../mail/letter.php");
   
    if($phpurl == 'vrixe-enn'){
     //do nothing this code only check if we are on developement server
   }else{
if(mail($email, $subject, $message, $headers)){
echo "";
} else{
echo "";
}}

  echo "
<div class='pagecen'>
<div class='pef'>

  <div class='blfhead'>Account Verified<br></div>
 <br>
  <h class='miniss'>Your account is all setup</h><br>

   <a href='/invite'><h>What would you like to do first?</h></a><br><br>

<a href='/edit_profile'><div class='cards'>
  <p class='miniss'>Update your profile</p>
   <img alt='update details' src='/images/essentials/contacts.svg' class='everybodyimg'>
<br>
   <button class='allcopele' id='ga_ep'><i class='material-icons' style='font-size:17px;vertical-align:text-top'>person</i> Edit Profile</button>
   </div></a>

   <a href='contacts'><div class='cards'>
  <p class='miniss'>Add friends to contact</p>
   <img alt='contacts' src='/images/essentials/invitations.svg' class='everybodyimg' style='width:54%'>
<br>
 <button class='allcopele' id='ga_mc'><i class='material-icons' style='font-size:17px;vertical-align:text-top'>perm_contact_calendar</i> My Contacts</button>
   </div></a>

<br><br>
    <a href='/invite'><div class='cards'>
  <p class='miniss'>Create your first invite</p>
   <img alt='make plans' src='/images/essentials/create.svg' class='everybodyimg'>
<br>
<button class='allcopele' id='ga_ci'><i class='material-icons' style='font-size:17px;vertical-align:text-top'>add_circle</i> Create Invite</button>
   </div></a>
   
     <a href='/app/pwa.html'><div class='cards'>
  <p class='miniss'>Get the Vrixe App</p>
   <img alt='make plans' src='/images/essentials/pwadevice.svg' class='everybodyimg' style='width:67%'>
<br>
<button class='allcopele' id='ga_ci'><i class='material-icons' style='font-size:17px;vertical-align:text-top'>add_to_home_screen</i> Install</button>
   </div></a>

  

   <br><br>

   <h class='miniss'>More?<br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> INSTALL WEB APP</button></a></h><br><br>

<div class='blfheadalt'></div>
  </div>
  </div>
  <br>
  ";
  if (!mysqli_query($conne,$sql) or !mysqli_query($conne,$confm))
  {
  die('Error: ' . mysqli_error($conne));
  }

mysqli_close($conne);

}//end of else
  
  else{
     	echo "
  <div class='pagecen'>
<div class='pef'>
<div class='blfhead'>Mix up somewhere</div><br> 

It happens...<br><br>

<img alt='Unconfirmed' src='https://vrixe.com/images/essentials/bug.png' class='everybodyimg'>
   <br>
Looks like you found a bug in the code. Please log out and back in again.<br>That should do it.<br><br>


	<h class='minis'>do you keep getting this page?<br><a href='/help/feedbacks?ext=lvtw'><button class='copele'><i class='material-icons' style='font-size:17px;vertical-align:text-top'>report</i> Report It </button></a></h><br><br>
	<h class='minis'>don't have time to send report?</h><br>
  <h class='miniss'>try logging out of your account <a href='/index' style='text-decoration:underline;text-underline-position:under;'>here</a></h><br>

	<br><br>

  <div class='blfheadalt'></div>
   </div>
  </div>
  <br>";
  }


?>
<br><br>


<?php require("../garage/networkStatus.php"); ?>
</body>
</html>