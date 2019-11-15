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
   $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>FAQ</button>";
   $userheadimg = $founduser['picture'];
}
if ($headcook == 0){
     $fullname = "relog";
   $username = "";
   $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>FAQ</button>";
}}
else{
     $fullname = "";
   $username = "";
   $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>FAQ</button>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>FAQs | Vrixe</title>
<link rel="manifest" href="/manifest.json">
<meta name="description" content="Find quick answers to questions on each Vrixe feature and other information you need on Vrixe">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined="" />
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

<div class="pagecen">
  <div class="pef">
    <div class="blfhead">FAQs</div>
    
<div style="margin-top:50px" class="long">
<span class="topic" onclick="var all='all';var one ='zero';hideshow(all, one);">How do I provide feedback.</span>
<button class="mores" onclick="var all='all';var one ='zero';hideshow(all, one);"><i class="material-icons">arrow_downward</i></button><br>
  <div class="all" id="zero">Please visit <a href='feedbacks' style='text-decoration:underline;text-underline-position:under'>vrixe.com/help/feedbacks</a> We love to hear about everything.</div>
</div><br>


<div class="long">
<span class="topic" onclick="var all='all';var one ='one';hideshow(all, one);">Account Email Verification</span>
<button class="mores" onclick="var all='all';var one ='one';hideshow(all, one);"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="one">In other to reduce spam content and continue to protect your experience on Vrixe, an email is sent to you when you sign up, this mail contains details on verifying your email address to begin using Vrixe. Accounts that have not been verified 30 days after setup are automatically deleted.</div>
</div><br>


<div class="long">
<span class="topic" onclick="var all='all';var one ='two';hideshow(all, one);">Is there an iPhone or Android App?</span>
<button class="mores" onclick="var all='all';var one ='two';hideshow(all, one);"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="two">There are no native apps for any Operating System. We do fine on the web, we promise. Have you tried our PWA?</div>
</div><br>

<div class="long">
<span class="topic" onclick="var all='all';var one ='three';hideshow(all, one);">What's the PWA?</span>
<button class="mores" onclick="var all='all';var one ='three';hideshow(all, one);"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="three">PWA, Progressive Web App are website that run on your mobile or desktop devices just as native apps would, offering you fast, responsive and engaging experience along with native app features like notifications and offline modes. To use our PWA please visit vrixe.com/app/pwa</div>
</div><br>

<div class="long">
<span class="topic" onclick="var all='all';var one ='four';hideshow(all, one);">Will my events be deleted after the event date?</span>
<button class="mores" onclick="var all='all';var one ='four';hideshow(all, one);"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="four">Events are not deleted after the Event date.</div>
</div><br>

<div class="long">
<span class="topic" onclick="var all='all';var one ='five';hideshow(all, one);">Can people see my events in other countries?</span>
<button class="mores" onclick="var all='all';var one ='five';hideshow(all, one);"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="five">Yes and users with the link to your event will be able to view the event from anywhere.</div>
</div><br>

<div class="long" id="types_of_events">
<span class="topic" onclick="var all='all';var one ='six';hideshow(all, one);">Difference between Private and Public Events?</span>
<button class="mores" onclick="var all='all';var one ='six';hideshow(all, one);"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="six">'Private Event' is secured with access keys and never suggested on Vrixe. They are not displayed as 'Picks' and only as search results when Event code is searched. Public events are available as 'Picks' suggestions and Search results, they are generally Open Events and are visible to anyone while private events are visible to its contributors only</div>
</div><br>


<div class="long">
<span class="topic" id="relog" onclick="var all='all';var one ='seven';hideshow(all, one);">I'm being asked to log in or Update Account</span>
<button class="mores" onclick="var all='all';var one ='seven';hideshow(all, one);"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="seven">This means our server noticed that you recently updated some important details on your account. Please complete this process and refresh your account on all devices you are logged on with. If you are being required to Verify account repeatedly, please clear website data of Vrixe from your browser.</div>
</div><br>

<div class="long">
<span class="topic" id="eventimagesupdate" onclick="var all='all';var one ='eight';hideshow(all, one);">Default Event Images</span>
<button class="mores" onclick="var all='all';var one ='eight';hideshow(all, one);"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="eight">As of version 2.13, Vrixe supports Event Images. We have provided sample event themed images for Invites. If you have any concerns related to the theme of the image, please contact our team.</div>
</div><br>


<div class="long">
<span class="topic" id="spamfilter" onclick="var all='all';var one ='nine';hideshow(all, one);">I did not get my verification email</span>
<button class="mores" onclick="var all='all';var one ='nine';hideshow(all, one);"><i class="material-icons">arrow_downward</i></button><br>
  <div class="all" id="nine">Sometimes, emails end up in spam box or they take up to 15 mins to get to your inbox. If you've checked your spam-box and found no email, please send us a <a href="feedbacks?ext=verification_mail" style="text-decoration:underline;">feedback here</a>.</div>
</div><br>
    
    <div class="long">
<span class="topic" id="privatepoll" onclick="var all='all';var one ='ten';hideshow(all, one);">Require an account to take polls?</span>
<button class="mores" onclick="var all='all';var one ='ten';hideshow(all, one);"><i class="material-icons">arrow_downward</i></button><br>
  <div class="all" id="ten">Private polls allow you get identification for who makes a vote. This way you are sure every vote is coming from a  registered Vrixe user. Public polls will still require voters to provide a random username.</div>
</div><br><br>
    
    <div class="blfheadalt"></div>
  </div>
</div>


<div id="offline" onclick="document.getElementById('offline').style.display='none';">Offline!<br><span id="smoff">Some features will not be available</span></div>
</body>
</html>