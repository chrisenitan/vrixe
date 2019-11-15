<?php
require("../garage/visa.php"); 
  $rate = mysqli_real_escape_string($conne, $_POST['rate']);
    $email = mysqli_real_escape_string($conne, $_POST['deactemail']);

    if (isset($_COOKIE['user'])){
 $cookie = $_COOKIE['user'];
} else {$cookie = "";}

$candeactivate = 0; //just a control

if($rate != '' or $email == '' or $cookie == ""){
 echo "<script>
 document.location = '/index.php';
 </script>";
}

else{
 $cooked = mysqli_query($conne,"SELECT * FROM profiles WHERE cookie = '$cookie' LIMIT 1"); //find user as profiler

 //deleter
   while($founduser = mysqli_fetch_array($cooked)){

   $username = $founduser['username'];
   $cookieemail = $founduser['email'];
   $unhookpropic = $founduser['picture'];

    if ($cookieemail == $email){
      $candeactivate = 1; 

 $deleteprocont = mysqli_query($conne,"DELETE FROM contributors WHERE owner = '$username' "); 

$deleteprofile = mysqli_query($conne,"DELETE FROM profiles WHERE cookie = '$cookie' "); 

if($unhookpropic != "user.png"){
 unlink("../images/profiles/$unhookpropic");
unlink("../images/profiles/profilethumbs/$unhookpropic");
}else {}

setcookie("user", "", time() - 3600, "/");
setcookie("formail", "", time() - 3600, "/");

}else {$candeactivate = 0;}

}
//unhooker

 $unhook = mysqli_query($conne,"SELECT * FROM events WHERE hype = '$username' "); //find user as eventer
   while($unhookarray = mysqli_fetch_array($unhook)){

    if ($candeactivate == 1){

     $unhookref = $unhookarray['refs'];
      $unhookimg = $unhookarray['imgname'];
         $unhookimgthumb = $unhookarray['imgthumb'];

   $deleteevent = mysqli_query($conne,"DELETE FROM events WHERE hype = '$username' "); //do this here so we have event to select from query first

     $delhookprog = mysqli_query($conne,"DELETE FROM programs WHERE refs = '$unhookref' "); 

       $delactors = mysqli_query($conne,"DELETE FROM actors WHERE refs = '$unhookref' "); 
      
      //code for deleting ics calendars here
      unlink("../garage/calendars/$unhookref.ics");

if($unhookimgthumb != "default.png"){
 unlink("../images/events/$unhookimg");
unlink("../images/eventnails/$unhookimgthumb");
}else {}

}else {$candeactivate = 0;}
 } //e of getting unhooks while



} //e of else rate was passed
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Deleting Account</title>
<link rel="manifest" href="/manifest.json">
  
  <?php
  //remove user push if user logout out. actual code is below page becaus eof async script 
  if ($candeactivate == 1){
    echo "<script src='https://cdn.onesignal.com/sdks/OneSignalSDK.js' async=''></script>";
    
   if($phpurl == 'vrixe-enn'){$appID = '527b2883-5dff-4a9b-88bd-5e2e3e74c9f4';}else{$appID = '151afe3d-500c-49f3-b682-dd9c5084a863';}
echo"
  <script defer>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: '$appID',
    });
  });

OneSignal.push(function() {
OneSignal.sendTag('nature', 'deleted');
       OneSignal.setSubscription(false);      
});

</script>
";
  }
  ?>
  
  
<meta name="description" content="Delete your Vrixe account">
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
 if ($candeactivate == 0){ //somehow we didnt get what you said or we think your emails dont correspond
 echo "<div class='pef'>
 <div class='blfhead'>...almost caught</div><br>
 <img src='https://vrixe.com/images/essentials/nodata.svg' class='everybodyimg'><br>
 <div id='oalert'>Was that a mistake? We have not deleted anything yet...<br>The Email provided did not match your account.<br> You have to be logged into the account you want to delete.</div><br>
 <br><h class='miniss'>...keep getting this?</h><br>
 <a href='/help/feedbacks.php'><button class='copele'><i class='material-icons' style='vertical-align:bottom;font-size:17px'>feedback</i> Feedback</button></a><br><br>
 <div class='blfheadalt'></div>
 </div>";
 }
 else{ 
  echo "<div class='pef'>
  <div class='blfhead'>Profile Deactivated</div><br>
  <img src='/images/vlogo.png' id='menuimg'><br>
  <div id='galert'> Your Vrixe account has been deleted </div>
  <br><img alt='Vrixe account deleted' src='/images/essentials/delete.png' class='everybodyimg'><br>
      <h class='miniss'>we really don't want you gone but if you could...</h><br><br>
       <a href='/help/feedbacks?ext=lvtw'><button class='copele'><i class='material-icons' style='vertical-align:bottom;font-size:17px'>feedback</i> Tell Us Why</button></a><br>
       
  <div class='yalert' >Your account has been deleted.<br>
  We have also deleted all events in your account.<br>
  All cookies have been deleted from your device<br>
  You have also been unsubscribed from Newsletters<br>
  </div>
 <br>";

$subject = 'Your account has been deleted';
$feed = 'feedback@vrixe.com';
$from = 'events@vrixe.com';//or could be a name

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$headers .= "Organization: Vrixe\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "Return-Path: $feed\r\n";

$headers .= 'From: Vrixe Support '.$from."\r\n".
      'Reply-To: '.$feed."\r\n" .
      'X-Mailer: PHP/' . phpversion();

$message = "<html><body style='margin:auto;max-width:500px;font-family:Titillium Web, Roboto, sans serif;padding:1%'>

<p style='padding-top:10px;padding-bottom:5px;margin-bottom:5px;font-size:30px;font-weight:bold;width:100%;text-align:center;color:#404141'><img src='https://vrixe.com/mail/vtrans.png' style='width:60px;height:50px;border-radius:50%;'><br>
Hi vrixer</p>
<p style='margin-top:2px;font-size:14px;text-align:center'>
Let's call you that one last time</p><br>

<img alt='account_deactivated' src='https://vrixe.com/mail/updateimages/exit.jpg' style='height:auto;width:96%;margin-left:2%'>


<div style='background-color:#f7f8fa;width:92%;text-align:center;height:auto;padding-bottom:5%;padding-top:5%;padding-left:2%;padding-right:2%;margin-left:2%;color:#16253f;font-size:14px'>

<div style='width:97%;margin:auto;height:auto;overflow:hidden;'>
<img src='https://vrixe.com/mail/updateimages/notification.png' style='float:left;width:50px;height:50px'>
<div style='float:right;width:80%;padding-right:1%;text-align:left'>
<b><h style='font-size:14px'>Account Deleted: </h></b></br>
<h style='font-size:14px'>You recently deleted you Vrixe profile, we are mailing to confirm this. Thank you for the experience you shared with us, you're always welcomed here.</h>
</div>
</div><br>

<div style='width:90%;margin:auto;height:1px;background-color:#a2a4a6;clear:both'></div><br>


<a href='https://vrixe.com/help/feedbacks'><div style='width:44%;height: auto;font-size: 12px;outline:none;font-weight:bolder;padding: 5px;display: inline-block;color:#f7f8fa;background-color:#ec3832;border-style: solid;border-width: 1px;border-radius: 3px;border-color:#ec3832;cursor: pointer;overflow:hidden;font-family:Titillium Web, Roboto, sans serif;text-align: center;margin-bottom: 5px;'>FEEDBACK</div></a><br>

<h style='font-size:12px'>If this was not you or it was a mistake, please write us.</h>


</div><br><br>



<div style='text-align:center;width:auto;word-spacing:15px'>

<a href='https://twitter.com/vrixeapp'><img alt='Twitter' src='https://vrixe.com/mail/mtweet.png' style='width:25px;height:25px;display:inline-block'></a>

<a href='https://www.linkedin.com/company/vrixe'><img alt='LinkedIn' alt='linkedin' src='https://www.vrixe.com/mail/mlink.png' style='width:25px;height:25px;display:inline-block'></a>

<a href='https://instagram.com/vrixe'><img alt='Instagram' src='https://vrixe.com/mail/mgram.png' style='width:25px;height:25px;display:inline-block'></a> 

<a href='https://youtube.com/channel/UCNDZP6M3t_L7Fxxc-a9rYWQ'><img alt='Youtube' alt='youtube' src='https://www.vrixe.com/mail/mtube.png' style='width:25px;height:25px;display:inline-block'></a> 

<a href='https://facebook.com/vrixe'><img alt='Facebook' src='https://vrixe.com/mail/mface.png' style='width:25px;height:25px;display:inline-block'></a> 

</div>

<div style='background-color:transparent;width:92%;text-align:center;height:auto;padding-bottom:5%;padding-top:5%;padding-left:2%;padding-right:2%;margin-left:2%;color:#16253f;font-size:11px'>This is a one-time email<br>
</div>
";
$message .= "</body></html>";
   
        if($phpurl == 'vrixe-enn'){
     //do nothing this code only check if we are on developement server
   }else{

if(mail($email, $subject, $message, $headers)){
echo "<div class='yalert'>You'll get an email from us shortly. One last email, just to confirm this action.</div><br><div class='blfheadalt'></div></div>";
} else{
echo "<div id='oalert' >We tried to mail you but Email could not be sent<br>Not a big deal, we already have a fix for this.<br>Carry On! We'll fix this</div><br><div class='blfheadalt'></div></div>";
}}

}

?>

</div>
<br><br>


<div id="offline" onclick="document.getElementById('offline').style.display='none';">Offline!<br><span id="smoff">Some features will not be available</span></div>
</body>
</html>