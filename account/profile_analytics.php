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
   $email = $founduser['email'];
      $link = $founduser['link'];
      $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>Analytics</button>";
      $userheadimg = $founduser['picture'];
}
if ($headcook == 0){
  echo "<script> document.location = '/me.php';</script>";
}}
else{
 echo "<script>
 document.location = '/index.php';
 </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
echo "<title>$fullname | Profile Analysis</title>";
?>
<link rel="manifest" href="/manifest.json">
<meta name="description" content="Stastitical reports on your Vrixe account and Events">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("../garage/resources.php"); ?>
<style>
  @media screen and (min-width: 980px){/*responsive*/
.cards{
width:45%;
}}
  </style>
</head>
<body>
<div id="gtr" onclick="closecloseb()"></div>


<?php require("../garage/deskhead.php"); ?>
<?php require("../garage/desksearch.php");  ?>

<?php require("../garage/deskpop.php"); ?>

<?php require("../garage/mobilehead.php"); ?>

<?php 
//set icon color
$notifcolor = "style='color:#1fade4'";

require("../garage/subhead.php");?>

<?php require("../garage/thesearch.php"); ?>


<br>

<div class="postcen">
<?php 

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
  $customtxtreport = "You have created <h class='miniss'>$totalevents</h> Event.";
}
else {
  $customtxtreport = "You have created a total of <h class='miniss'>$totalevents</h> Events.";
}

#

echo"<div class='pef'>

<div class='blfhead'>Profile Analytics</div><br>


<h id='type'>JOINED - $accountcreated</h><br>

<img src='/images/profiles/$accountpicture' class='profilephoto' alt='$username'><br>

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

<br>
<div class='blfheadalt' id='ntifs'></div>

</div>";



echo"<div class='pef'>

<div class='blfhead'>Received Invitations</div><br>";

  $invitelocate = mysqli_query($conne,"SELECT * FROM events WHERE cua = '$username' AND status = 'invite' or cub = '$username' AND status = 'invite' or cuc = '$username' AND status = 'invite' or cud = '$username' AND status = 'invite' or cue = '$username' AND status = 'invite' or cuf = '$username' AND status = 'invite' ");

   $gotinvite = 0;
   while($rowinvite = mysqli_fetch_array($invitelocate))
 {
   $gotinvite = 1;
    $probeinviteevent =  $rowinvite['event']; $inviteevent = htmlspecialchars($probeinviteevent, ENT_QUOTES);
    $accrefs = $rowinvite['refs'];
     $whoinvite = $rowinvite['hype'];
   $imgthumb = $rowinvite['imgthumb'];
   $shortinvitename = substr($inviteevent, 0, 13) . "...";
     
  //image background set
     if($imgthumb == "default.png"){
       $cardBack = "background: linear-gradient(45deg, #252b38 0%, #252b38 44%,rgb(43, 52, 67) 44%, rgb(43, 52, 67) 45%,rgb(43, 52, 67) 61%, rgb(43, 52, 67) 67%,#0298ad 67%, #0298ad 100%)";
     }else{
       $cardBack = "background-image:url(\"images/eventnails/$imagename\")";
     }

 //check if user has accepted invite
  $acceptstatus = mysqli_query($conne,"SELECT * FROM contributors WHERE cua = '$username' and code = '$accrefs' or cub = '$username' and code = '$accrefs' or cuc = '$username' and code = '$accrefs' or cud = '$username' and code = '$accrefs' or cue = '$username' and code = '$accrefs' or cuf = '$username' and code = '$accrefs' "); $founduseraccstatus = "";
 while($accign = mysqli_fetch_array($acceptstatus)){
       $founduseraccstatus = "accepted";
    }

echo "<form style='width:100%;display:inline' action='/invitation.php' method='post'>
<button class='cards' style='$cardBack'>";
     
if($founduseraccstatus == "accepted"){
       echo"<i class='material-icons' style='float:left;margin-bottom:10px;margin-top:6px;color:#5c9ced;font-size:21px'>check_circle</i><br>";
 }else{
 echo"<i class='material-icons' style='float:left;margin-bottom:10px;margin-top:6px;color:#00ffa1;font-size:21px'>fiber_new</i><br>";
   }
 
 echo"<input type='text' class='rates' value='$accrefs' name='iv'>
<input type='text' class='rates' value='contributor' name='claim'>
<h class='cardtitle'>$shortinvitename</h>
<br><h class='cardsdescription'>from @$whoinvite</h>
<br><br>
</button>
</form>";
}
  
if ($gotinvite == 0){
  echo "
   <h class='bottoms'>Invitations from friends will appear here.</h><br><br>
  <img alt='Plans on Vrixe' src='/images/essentials/contacts.svg' class='everybodyimg'><br>
  <h class='miniss'>A glance at the invitations you recieved <br><br>Add friends to your contact list.<br>
  <a href='/account/contacts'><button style='margin-top:5px' class='copele'><i class='material-icons' style='vertical-align:bottom;font-size:18px'>perm_contact_calendar</i> My Contacts</button></a><br>";
}
echo "<br><br><div class='blfheadalt'></div>
</div>";





echo"<div class='pef'>

<div class='blfhead'>Sent Invitations</div><br>";

$locatesent = mysqli_query($conne,"SELECT * FROM events WHERE hype = '$username' AND status = 'invite' ORDER BY year DESC ");

   $sentinvite = 0;
   while($rowsentinvite = mysqli_fetch_array($locatesent))
 {
   $sentinvite = 1;
   $probesentinviteevent =  $rowsentinvite['event']; $sentinviteevent = htmlspecialchars($probesentinviteevent, ENT_QUOTES);
  
    $refs = $rowsentinvite['refs'];
    $views = $rowsentinvite['views'];
    $sentimgthumb = $rowsentinvite['imgthumb'];
   $shortsentinvite = substr($sentinviteevent, 0, 13) . "...";     
          
  //image background set
     if($sentimgthumb == "default.png"){
       $cardBack = "background: linear-gradient(45deg, #252b38 0%, #252b38 44%,rgb(43, 52, 67) 44%, rgb(43, 52, 67) 45%,rgb(43, 52, 67) 61%, rgb(43, 52, 67) 67%,#0298ad 67%, #0298ad 100%)";
     }else{
       $cardBack = "background-image:url(\"images/eventnails/$imagename\")";
     }

   $cua = $rowsentinvite['cua']; if ($cua > ""){$cua = 1;}
   $cub = $rowsentinvite['cub']; if ($cub > ""){$cub = 1;}
   $cuc = $rowsentinvite['cuc']; if ($cuc > ""){$cuc = 1;}
   $cud = $rowsentinvite['cud']; if ($cud > ""){$cud = 1;}
   $cue = $rowsentinvite['cue']; if ($cue > ""){$cue = 1;}
   $cuf = $rowsentinvite['cuf']; if ($cuf > ""){$cuf = 1;}
   $totalcont = $cua + $cub + $cuc + $cud + $cue + $cuf;

echo "
<form style='width:100%;display:inline' action='/invitation.php' method='post'>
<button class='cards' style='$cardBack'>
<br>
<input type='text' class='rates' value='$refs' name='iv'>
<input type='text' class='rates' value='owner' name='claim'>
<h class='cardtitle'>$shortsentinvite</h>
<br>
<h class='cardsdescription'>with $totalcont contributors</h>
<br><br>
</button>
</form>
";

}

if ($sentinvite == 0){
  echo "
    <h class='bottoms'>Find your plans and invites here.</h><br><br><br>
  <img alt='Plans on Vrixe' src='/images/essentials/create.svg' class='everybodyimg'><br>
  <h class='miniss'>Invites and plans created by your <b><a href='/account/contacts'>Contacts</a></b> can be found on <b><a href='/picks'>Picks</a></b>.<br><br>
<a href='/invite'><button style='margin-top:5px' class='copele'><i class='material-icons' style='vertical-align:sub;font-size:17px;'>add_circle</i> New Invite</button></a><br><br>";
}
echo"
<br><br><div class='blfheadalt'></div>

</div>";

 ?>



</div>
<br><br>


<?php require("../garage/networkStatus.php");?>

</body>
</html>