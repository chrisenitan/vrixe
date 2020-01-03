<?php require("../garage/passport.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="manifest" href="/manifest.json" />
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<?php
   if($phpurl == 'vrixe-enn'){$appID = '527b2883-5dff-4a9b-88bd-5e2e3e74c9f4';}else{$appID = '151afe3d-500c-49f3-b682-dd9c5084a863';}
  
echo"
  <script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: '$appID',
    });
  });

OneSignal.push(function() {
     OneSignal.sendTag('who', '$username');
     //OneSignal.setExternalUserId('$sqlcid');
   //OneSignal.deleteTag('who');
   
    OneSignal.getUserId(function(userId) {
    var iv = userId; 
    var req = 'saveuserpushid';
    var cu = '$username';
    savepushid(req, iv, cu);  
  });
      //OneSignal.setSubscription(true);  
});

function savepushid(req, iv, cu){
	if (req == ''){
		document.getElementById('result').innerHTML = 'error';
		return;
	}
	else {
if (window.XMLHttpRequest) {
// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else {
// code for IE6, IE5
xmlhttp = new ActiveXObject('microsoft.XMLHTTP');
}
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById('result').innerHTML =
this.responseText;
}
};
xmlhttp.open('GET','/garage/mover.php?k='+req+'&i='+iv+'&c='+cu,true);
xmlhttp.send(); 
}  
}

</script>
";
?>  
  
<title>Account Settings</title>
<link rel="manifest" href="/manifest.json">
<meta name="description" content="Account Settings">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("../garage/resources.php"); ?>

  <script>
function asklocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(confirmPosition);
    } else {
        output.innerHTML = "Geolocation is not supported";
    }
}
function confirmPosition(position) {
  var output = document.getElementById("valert");
        output.innerHTML = "Location Access Turned On"; output.style.display='block';
}
</script>
 <style>
    body{
      background-color: #f5f5f5;
    }
    .o{
      float: none;
    }
   #pageonlycopele:hover{
     background-color: #6c61f6;
     color: #ffffff;
   }
  </style>
</head>
<body>
<div id="gtr" onclick="closecloseb()"></div>

<?php require("../garage/googleauth.php");
  require("../garage/deskhead.php");
  require("../garage/desksearch.php");
  require("../garage/deskpop.php"); ?>

<?php $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>Settings</button>";
  require("../garage/mobilehead.php"); ?>

<?php require("../garage/subhead.php");
  require("../garage/thesearch.php"); ?>
<br>

<p id='valert' onclick='closealert()'> </p>

<div class="postcen">

<div class="pef">
<div class="blfhead">Location Access</div><br><br>

 <img alt='Location Permission' src='/images/essentials/gps.svg' class='everybodyimg'><br><br>
  <h class='bottoms'>Control your GPS access</h><br>

  <small>When creating an event, you'd want to add a venue, its best to use your GPS location for precision. Sounds good? just location service and we'll remember that next time.</small><br>

  <br>
   <button class="copele" onclick="asklocation()"><i class='material-icons' style='vertical-align:sub;font-size:17px'>gps_fixed</i> Allow GPS</button><br>

<br><div class="blfheadalt"></div>
</div>


  
  
<div class="pef" id="pushn">
<div class="blfhead">Push Notifications</div><br><br>

 <img alt='Notification Permission' src='/images/essentials/notif.svg' class='everybodyimg'><br><br>
  <h class='bottoms'>Control your Notification access</h><br>

  <small>We can notify you on this device when you get an invite, or when someone on your team makes some plan changes. Sounds good? Turn us on and we'll remeber to.</small><br>

  <br>
      <button id="pageonlycopele" class='copele'><i class='material-icons' style='vertical-align:sub;font-size:17px;'>notifications</i> <div style='font-size:11px;display:inline-block' class='onesignal-customlink-container'></div></button><br>
<div id='result'></div>

<br><div class="blfheadalt"></div>
</div>
  
  
  
  

<div class="pef" id="auth">
<div class="blfhead">Login Access</div><br>

 <img alt='Accounts Permission' src='/images/essentials/idcard.png' class='everybodyimg'><br><br>
  <h class='bottoms'>Login via Google</h><br>

  <small>One less password to worry about. Sync your account with your Google email and never miss your data.</small><br><br>
    
<button class="copele" id="settingsGoogleAuth"></button>
    <div class='g-signin2' data-onsuccess='onSignIn' id='signin'></div><br>
    
<br><div class="blfheadalt"></div>
</div>
  
  
</div>
<br><br>


<?php require("../garage/networkStatus.php"); ?>

</body>
</html>