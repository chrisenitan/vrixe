<?php #check cookie for registered users
require("garage/visa.php"); 
//check if therewas a cookie
if (isset($_COOKIE['user'])){
  header('Location: me');  
}

 $signup = mysqli_real_escape_string($conne, $_POST['signup']);
 $rate = mysqli_real_escape_string($conne, $_POST['rate']);
 $rawusername = mysqli_real_escape_string($conne, $_POST['username']); $username = strtolower($rawusername);
 $postEmail = mysqli_real_escape_string($conne, $_POST['mail']);
 $password = mysqli_real_escape_string($conne, $_POST['password']);
 $fullname = mysqli_real_escape_string($conne, $_POST['password']);
 $pictureUrl = mysqli_real_escape_string($conne, $_POST['pictureUrl']);
 $authtoken = mysqli_real_escape_string($conne, $_POST['token']);

//if username is given.. or if google is given and sign up is given
if($username > "" and $signup > "" and $postEmail > "" and $rate == ""){
//use default values if needed
if($signup == "signupwithgoogle"){
  
  
}
else{
    $fullname = "Profile Name";
    $pictureUrl =  "https://vrixe.com/images/profiles/user.png";
    $authtoken = "";
}
//start generating necessary data
$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=06bfc66ceaf02708dafb98bf50c15cbb49e2532ba69fedf6f7da78a1805ad281&ip=".$_SERVER['REMOTE_ADDR']."&format=json"));
$z = $url->countryName;//location
  
$gencookie = bin2hex(openssl_random_pseudo_bytes(10));
$cutcok = substr($gencookie, 0,6);//for account verification page
$cok ="user";
$recognise ="formail"; //for mail

$day = date("Y-m-d"); //creation date
$pushid = "66666666-36f0-432b-9f5d-4bfeec61fa81";
$bio = "$username from $z";
$link = "vrixe.com/profile/$username";



 //check if user exists
 $checkusem = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$username' or email = '$postEmail' LIMIT 1"); 
 $checkIfUserExisted = false;
   while($checked = mysqli_fetch_array($checkusem))  
 {$checkIfUserExisted = true; }
  
  //if there was a user already
 if($checkIfUserExisted == true){
  $saveUserStatus = "duplicate";
  $username = "";//strip username to avoid mixed features eg subhead data
}
 else{//save user
   $saveUserStatus = "save";
   
 //skip google users verification
   if($signup == "signupwithgoogle"){
  $freqval =  date("Y-m-d");
  $confirmval = $cutcok;

  $subscribeToNewsletter = "INSERT INTO newsletter (mail, day, place) VALUES ('$postEmail', '$freqval', '$z') ";//add to newsletter
   if (!mysqli_query($conne,$subscribeToNewsletter))
  { die('Error: ' . mysqli_error($conne)); } 
}
 else{
  $freqval =  $cutcok;
   $confirmval = "";
   }
   
//create the user
 $create="INSERT INTO profiles (email, fullname, username, password, created, bio, location, picture, link, cookie, freq, pushid, authtoken, confirm)
VALUES
('$postEmail','$fullname','$username','$password','$day','$bio','$z','$pictureUrl','$link','$gencookie','$freqval','$pushid','$authtoken','$confirmval')";
   
//create cookies
setcookie($cok, $gencookie, time() + (86400 * 366), "/; samesite=Lax", "", true, true); //newuser
setcookie($recognise, $username, time() + (86400 * 366), "/; samesite=Lax", "", true, true); //for mail
   
 //close connection
 if (!mysqli_query($conne,$create))
  {die('Error: ' . mysqli_error($conne));}
   
 }

}
//criteria for making user is not found, yet there was no cookie redirect user whatsevr the case may be
else{
header('Location: index');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
  if ($saveUserStatus == "duplicate"){echo "<title>Account Setup Incomplete</title>";}
  else {echo "<title>Account Created</title> <link rel='prefetch' href='me.php'>";}
?>
<link rel="manifest" href="manifest.json">
<meta name="description" content="Create a Vrixe account, monitor your Events and grow your audience.   ">
<meta property="og:image" content="https://vrixe.com/images/vlogie.png"/>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("garage/resources.php"); ?>
  <style>
  	body{	background-color: #ffffff;}
    .privinput{text-align:center;}
  </style>
</head>
<body>
<div id="gtr" onclick="closecloseb()"></div>
  <?php require("./garage/absolunia.php"); ?>
<?php require("garage/deskhead.php");
  require("garage/desksearch.php");
  require("garage/deskpop.php"); 
  require("garage/mobilehead.php"); ?>

<?php require("garage/subhead.php");
  require("garage/thesearch.php"); ?>
<br>
  
<?php
 if ($saveUserStatus == "duplicate"){
  echo"<div class='pagecen'>
<div class='pef'>
  <div class='blfhead'>...Don't be a stranger</div><br>
 
  <img alt='Bad Profile' src='images/essentials/warning.png' class='everybodyimg'><br>
  <h class='miniss'>Your Username or Email already exists<br>
  If you believe something is wrong, please send us feedback<br><br>
   <a href='index'><button class='copele'>Try Again</button></a><br><br>

 <a href='index.php?q=recover_password'>Forgot Password?</a></h>
  <br><br>

  <div class='blfheadalt'></div>
  </div>
  </div>
";}
  
else if ($saveUserStatus == "save"){
echo "<div class='pagecen'><div class='pef'>
<div class='blfhead'>Profile Created</div><br><br>

 <img alt='Account Created' src='images/essentials/contacts.svg' class='everybodyimg'><br><br>
<h class='sword'>Your account has been created and we emailed you for verification</h><br>
";
//send mail
  //pure signup email
  if($signup == "signup"){
    $customMailSubject = "Welcome to Vrixe";
    $customMailHeader = "Please verify your account";
    $customMailsectionHeader = "Why Verify?";
    $customMailsectionMessage = "Get access to create, edit, poll and use other vrixe features without making anyone doubt you're real.";
    $customMailcta = "VERIFY EMAIL";
    $customMailsuccessMessage = "<div id='galert'>We've sent you a verification mail.</div><br>";
    $customMailfailedMessage = "<div id='oalert'>We tried to mail you but Email could not be sent<br>Not a big deal, we already have a fix for this.<br>Carry On!</div><br>";
    $customMailctaLink = "https://vrixe.com/account/confirm?refs=$cutcok";
    $customMailctaNudge = "Now you're onboarded.";
    $customMailBanner = "https://vrixe.com/mail/banners/welcomenewuser.jpg";
    $Mailemail = $email;
    
    require("mail/genericMailer.php");
  }
  //sign up with google
  else{
    $customMailSubject = "Welcome to Vrixe";
    $customMailHeader = "...get the juicy part first.";
    $customMailsectionHeader = "How It Works";
    $customMailsectionMessage = "Start with an invite, add all your friends then make it a plan and add a poll or take a agenda, or add comments, dresscodes, pictures";
    $customMailcta = "GET THE WEB APP";
    $customMailsuccessMessage = "<div id='galert'>We sent you a welcome guide.</div><br>";
    $customMailfailedMessage = "<div id='oalert'>There was an error in sending you a welcome guide<br>Not a big deal, we already have a fix for this.<br>Carry On!</div><br>";
    $customMailctaLink = "https://vrixe.com/app/pwa.html";
    $customMailctaNudge = "We have a progressive web app for you";
    $customMailBanner = "https://vrixe.com/mail/banners/welcomenewuser.jpg";
        $Mailemail = $email;
    
  require("mail/genericMailer.php");
  }

 if($phpurl == 'vrixe-enn'){
 //do nothing this code only check if we are on developement server
   }else{
if(mail($postEmail, $subject, $message, $headers)){
echo "<div id='galert'>We've sent you a verification mail.</div><br>";
} else{
echo "<div id='oalert'>We tried to mail you but Email could not be sent<br>Not a big deal, we already have a fix for this.<br>Carry On! We'll fix this</div><br>";
}}

echo "<h class='miniss'>Your account was created with a secure password, but you can update it under your <a style='text-decoration:underline;text-underline-position:under;' href='edit_profile'>profile settings</a></h><br><br>

<a href='me'><button class='copele'><i class='material-icons' style='font-size:17px;vertical-align:sub'>person</i> My Profile</button></a><br><br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='app/pwa.html'><button class='control'> Install Web App</button></a></h><br><br>

<div class='blfheadalt'></div>
</div>
<br>

</div>";
  //show cookies dis via absolnia
echo "<script>
window.addEventListener('load', function(){
  var closer = 'cookies are fine';
  var button = '<i class=\"material-icons\" style=\"font-size: 18px;vertical-align:sub;\">delete_outline</i> Delete Cookies ';
  var buttonlink = 'app/terms.html#cookies';
  var title = 'We just saved cookies';
  var text = 'To help us remember you on this device and give you seamless access to Vrixe, we added some domain secured cookies to this device';
  callabsolunia(title, text, button, buttonlink, closer);
});
</script>";

}
  else{
    //redundant
    
  }
?>
<br>

<?php require("garage/networkStatus.php"); ?>

</body>
</html>