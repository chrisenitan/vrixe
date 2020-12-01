<?php
//do not require user account
$defaultAllowNoUser = true;
require("../garage/passport.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>FAQs | Vrixe</title>
<link rel="manifest" href="/manifest.json">
<meta name="description" content="Find quick answers to questions on each Vrixe feature and other information you need on Vrixe">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("../garage/resources.php"); 
  
  if(isset($_GET['q'])){
    $faq = mysqli_real_escape_string($conne, $_GET['q']);
    //trigger cef
    echo"
    <script>
    window.addEventListener('load', function(){
    hideshow('all','$faq');
    });
 document.location='#$faq';
    </script>
    ";
  }  
  ?>
</head>
<body>
<div id="gtr" onclick="closecloseb()"></div>

<?php require("../garage/deskhead.php"); ?>
<?php require("../garage/desksearch.php");  ?>
<?php require("../garage/deskpop.php"); ?>

<?php $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>FAQ</button>";
  require("../garage/mobilehead.php"); ?>

<?php require("../garage/subhead.php");?>

<?php require("../garage/thesearch.php"); ?>

<br>
<div class="postcen">
    
<div class="cefs">
<span class="topic" onclick="hideshow('all', 'how_to_provide_feedback');">How do I provide feedback.</span>
<button class="mores" onclick="hideshow('all', 'how_to_provide_feedback');"><i class="material-icons">arrow_downward</i></button><br>
  <div class="all" id="how_to_provide_feedback">Please visit <a href='feedbacks' style='text-decoration:underline;text-underline-position:under'>vrixe.com/help/feedbacks</a> We love to hear about everything.</div>
</div>


<div class="cefs">
<span class="topic" onclick="hideshow('all', 'account_email_verification');">Account Email Verification</span>
<button class="mores" onclick="hideshow('all', 'account_email_verification');"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="account_email_verification">In other to reduce spam content and continue to protect your experience on Vrixe, an email is sent to you when you sign up, this mail contains details on verifying your email address to begin using Vrixe. Accounts that have not been verified 30 days after setup are automatically deleted.</div>
</div>


<div class="cefs">
<span class="topic" onclick="hideshow('all', 'native_apps');">Is there an iPhone or Android App?</span>
<button class="mores" onclick="hideshow('all', 'native_apps');"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="native_apps">There are no native apps for any Operating System. We do fine on the web, we promise. Have you tried our PWA?</div>
</div>

<div class="cefs">
<span class="topic" onclick="hideshow('all', 'what_is_a_pwa');">What's the PWA?</span>
<button class="mores" onclick="hideshow('all', 'what_is_a_pwa');"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="what_is_a_pwa">PWA, Progressive Web App are website that run on your mobile or desktop devices just as native apps would, offering you fast, responsive and engaging experience along with native app features like notifications and offline modes. To use our PWA please visit vrixe.com/app/pwa</div>
</div>

<div class="cefs">
<span class="topic" onclick="hideshow('all', 'event_expiry');">Will my events be deleted after the event date?</span>
<button class="mores" onclick="hideshow('all', 'event_expiry');"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="event_expiry">Events are not deleted after the Event date.</div>
</div>

<div class="cefs">
<span class="topic" onclick="hideshow('all', 'event_location_availability');">Can people see my events in other countries?</span>
<button class="mores" onclick="hideshow('all', 'event_location_availability');"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="event_location_availability">Yes and users with the link to your event will be able to view the event from anywhere.</div>
</div>

<div class="cefs" id="types_of_events">
<span class="topic" onclick="hideshow('all', 'private_and_public_events');">Difference between Private and Public Events?</span>
<button class="mores" onclick="hideshow('all', 'private_and_public_events');"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="private_and_public_events">'Private Event' is secured with access keys and never suggested on Vrixe. They are not displayed as 'Picks' and only as search results when Event code is searched. Public events are available as 'Picks' suggestions and Search results, they are generally Open Events and are visible to anyone while private events are visible to its contributors only</div>
</div>


<div class="cefs" style="display:none">
<span class="topic" id="relog" onclick="hideshow('all', 'account_relogin');">I'm being asked to log in or Update Account</span>
<button class="mores" onclick="hideshow('all', 'account_relogin');"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="account_relogin">This means our server noticed that you recently updated some important details on your account. Please complete this process and refresh your account on all devices you are logged on with. If you are being required to Verify account repeatedly, please clear website data of Vrixe from your browser.</div>
</div>

<div class="cefs">
<span class="topic" id="eventimagesupdate" onclick="hideshow('all', 'default_event_images');">Default Event Images</span>
<button class="mores" onclick="hideshow('all', 'default_event_images');"><i class="material-icons">arrow_downward</i></button><br>
<div class="all" id="default_event_images">As of version 2.13, Vrixe supports Event Images. We have provided sample event themed images for Invites. If you have any concerns related to the theme of the image, please contact our team.</div>
</div>


<div class="cefs">
<span class="topic" id="spamfilter" onclick="hideshow('all', 'missing_verification_email');">I did not get my verification email</span>
<button class="mores" onclick="hideshow('all', 'missing_verification_email');"><i class="material-icons">arrow_downward</i></button><br>
  <div class="all" id="missing_verification_email">Sometimes, emails end up in spam box or they take up to 15 mins to get to your inbox. If you've checked your spam-box and found no email, please send us a <a href="feedbacks?ext=verification_mail" style="text-decoration:underline;">feedback here</a>.</div>
</div>
    
 <div class="cefs">
<span class="topic" id="privatepoll" onclick="hideshow('all', 'accounts_on_polls');">Require an account to take polls?</span>
<button class="mores" onclick="hideshow('all', 'accounts_on_polls');"><i class="material-icons">arrow_downward</i></button><br>
  <div class="all" id="accounts_on_polls">Private polls allow you get identification for who makes a vote. This way you are sure every vote is coming from a  registered Vrixe user. Public polls will still require voters to provide a random username.</div>
</div><br>
    
   
</div>
<br><br><br>

<?php require("../garage/networkStatus.php"); ?>
</body>
</html>