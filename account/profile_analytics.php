<?php require("../garage/passport.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php echo "<title>$fullname | Analytics</title>"; ?>
<link rel="manifest" href="/manifest.json">
<meta name="description" content="Stastitical reports on your Vrixe account and Events">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("../garage/resources.php"); ?>
<style>
 @media screen and (min-width: 980px){/*responsive*/
.cards{width:45%;}}
</style>
</head>
<body>
<div id="gtr" onclick="closecloseb()"></div>

<?php require("../garage/deskhead.php"); 
  require("../garage/desksearch.php"); 
  require("../garage/deskpop.php"); ?>

<?php $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>Analytics</button>";
  require("../garage/mobilehead.php"); ?>

<?php 
require("../garage/subhead.php");
require("../garage/thesearch.php"); ?>

<br>
<div class="postcen">
<?php 
 if ($cut == ""){
    //check if to allow user temp or block and send to blue
require("../garage/unverifiedEmailAccessStatus.php");
  }
  
#account date
$profiledate = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$username' LIMIT 1 "); 
   $gotdate = 0;
   while($rowdate = mysqli_fetch_array($profiledate))
 {
   $gotdate = 1;
    $accountcreated = $rowdate['created'];
    $accountpicture = $rowdate['picture'];
}
if ($gotdate == 0){
  $accountcreated = 0;
}

#TOTAL PRIVATE
$privatelocate = mysqli_query($conne,"SELECT COUNT(event) AS event FROM events WHERE hype = '$username' AND class = 'private' or organiser = '$username' AND class = 'private' ");

   $gotprivatecount = 0;
   while($rowprievent = mysqli_fetch_array($privatelocate))
 {
   $gotprivatecount = 1;
   $totalprivatecount = $rowprievent['event'];
}
if ($gotprivatecount == 0){
  $totalprivatecount = "nil";
}

#TOTAL PUBLIC
$publiclocate = mysqli_query($conne,"SELECT COUNT(event) AS event FROM events WHERE hype = '$username' AND class = 'public' or organiser = '$username' AND class = 'public' ");

   $gotpubliccount = 0;
   while($rowpubevent = mysqli_fetch_array($publiclocate))
 {
   $gotpubliccount = 1;
   $totalpubliccount = $rowpubevent['event'];
}
if ($gotpubliccount == 0){
  $totalpubliccount = "nil";
}

#views count
$viewscount = mysqli_query($conne,"SELECT SUM(views) AS views FROM events WHERE hype = '$username' or organiser = '$username' "); 
   $gotevuser = 0;
   while($rows = mysqli_fetch_array($viewscount))
 {
   $gotevuser = 1;
    $totalviews = $rows['views'];
}
if ($gotevuser == 0 or $totalviews == 0){
  $totalviews = "nil";
}

#best event 
$bestevent = mysqli_query($conne,"SELECT * FROM events WHERE hype = '$username' ORDER BY views DESC LIMIT 1"); 
   $gotbestevent = 0;
   while($mstvd = mysqli_fetch_array($bestevent))
 {
   $gotbestevent = 1;
    $thebestevent = $mstvd['views'];
    $thebestlinkstr = $mstvd['refs'];
    $thebestlink = "/event/" . $thebestlinkstr;
     $probethebestname =   $mstvd['event']; $thebestname = htmlspecialchars($probethebestname, ENT_QUOTES);
    $thebestshortnamed = substr($thebestname, 0, 10) . "...";
}
if ($gotbestevent == 0 or $thebestevent == 0){
  $thebestevent = "nil";
  $thebestlink = "#";
  $thebestshortnamed = "";
}

#TOTAL INSTANT
$instantlocate = mysqli_query($conne,"SELECT COUNT(event) AS event FROM events WHERE hype = '$username' AND status = 'invite' or organiser = '$username' AND status = 'invite' ");

   $gotinstantcount = 0;
   while($rowinstant = mysqli_fetch_array($instantlocate))
 {
   $gotpinstantount = 1;
   $totalinstantcount = $rowinstant['event'];
}
if ($gotpinstantount == 0){
  $totalinstantcount = "nil";
}

#TOTAL NOT INVITE
$basiclocate = mysqli_query($conne,"SELECT COUNT(event) AS event FROM events WHERE hype = '$username' AND status = 'plan' ");

   $gotbasiccount = 0;
   while($rowbasic = mysqli_fetch_array($basiclocate))
 {
   $gotpbasicount = 1;
   $totalbasiccount = $rowbasic['event'];
}
if ($gotpbasicount == 0){
  $totalbasiccount = "nil";
}
$totalevents = $totalprivatecount + $totalpubliccount;
if ($totalevents == 0){
  $customtxtreport = "You have not created any Event.";
}
else if ($totalevents == 1){
  $customtxtreport = "You have <b>$totalevents event</b>";
}
else {
  $customtxtreport = "You have a total of <b>$totalevents events</b>";
}
  
  
#TOTAL CONTRIBUTONS
$fetchTotalContributions = mysqli_query($conne,"SELECT COUNT(code) AS code FROM contributors WHERE code > '' AND cua = '$username' or cub = '$username' or cuc = '$username' or cud = '$username' or cue = '$username' or cuf = '$username' ");

   $gottotalContributions = 0;
   while($totalContributionsArray = mysqli_fetch_array($fetchTotalContributions))
 {
   $gottotalContributions = 1;
   $totalContributions = $totalContributionsArray['code'];
}
if ($gottotalContributions == 0){
  $totalinstantcount = "0";
}


echo"<div class='pef'>

<div class='blfhead'>Profile Analytics</div><br>


<h id='type'>JOINED - $accountcreated</h><br>

<img src='$accountpicture' class='profilephoto' alt='$username'><br>

<h class='blf'>$fullname </h><h class='miniss'>@$username</h><br>

<h class='petd'>$customtxtreport</h><br><br>


<div class='analybox'>
<h class='analytxt'>$totalprivatecount</h><br>
<h class='petd'>private events</h><br><br>
</div>

<div class='analybox'>
<h class='analytxt'> $totalpubliccount</h><br>
<h class='petd'>public events</h><br><br>
</div>

<div class='analybox'>
<h class='analytxt'>$totalinstantcount</h><br>
<h class='petd'>in invite</h><br><br>
</div>

<div class='analybox'>
<h class='analytxt'>$totalbasiccount</h><br>
<h class='petd'>in plan</h><br><br>
</div>

<div class='analybox'>
<h class='analytxt'>$totalviews</h><br>
<h class='petd'>total views</h><br><br>
</div>

<a href='$thebestlink'><div class='analybox'>
<h class='miniss'>$thebestshortnamed</h><br>
<h class='analytxt'>$thebestevent</h><br>
<h class='petd'>highest view</h><br><br>
</div></a>

<div class='analybox' title='Events you have planned with other users'>
<h class='analytxt'>$totalContributions</h><br>
<h class='petd'>event contributions</h><br><br>
</div>
<br>
<div class='blfheadalt' id='ntifs'></div>

</div>";

 ?>

</div>
<br><br>


<?php require("../garage/networkStatus.php");?>

</body>
</html>