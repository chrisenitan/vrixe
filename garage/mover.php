<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
require("visa.php"); 
$req = mysqli_real_escape_string($conne, $_GET['k']);//request
$cu = mysqli_real_escape_string($conne, $_GET['c']);//user
$id = mysqli_real_escape_string($conne, $_GET['i']);//ref code
$dbid = mysqli_real_escape_string($conne, $_GET['dbid']);//position of user in db used for accept and ignore invites

 $day =date("Y-m-d");

if (!$conne) {
die('Could not connect: ' . mysqli_error($conne));
}
mysqli_select_db($conne,"events");

if ($req == "MOVE TO PLAN"){
$axevent = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$id' ");

$axcontributor = mysqli_query($conne,"SELECT * FROM contributors WHERE code = '$id' ");
$got = 0;

 //get from contributor where ref is code...
 //set cua... as value gotten or empty
while($rowc = mysqli_fetch_array($axcontributor)) {
 $got = 1;
    $cua = $rowc['cua'];
    $cub = $rowc['cub'];
    $cuc = $rowc['cuc'];
    $cud = $rowc['cud'];
    $cue = $rowc['cue'];
    $cuf = $rowc['cuf'];
 }

echo "<br>";
while($row = mysqli_fetch_array($axevent)) {
 $got = 1;

 //update event set cua... as new values.
 //absenties should be erased then
  $toplan = "UPDATE events SET status='plan', cua='$cua', cub='$cub', cuc='$cuc', cud='$cud', cue='$cue', cuf='$cuf' WHERE refs = '$id'";

echo "<div id='galert'>Invite has been moved to plan</div><br>
<h class='disl'>What would you like to do first?</h><br>
<a href='desk.php?code=$id'><button aria-label='create event' class='copele'><i class='material-icons' style='font-size:16px;vertical-align:sub'>edit</i> Edit As Plan</button></a>
<a href='event/$id'><button aria-label='create event' class='triocontrol'><i class='material-icons' style='font-size:16px;vertical-align:sub'>event</i> View Plan</button></a>";

if (!mysqli_query($conne,$toplan))
  {
  die('Error: ' . mysqli_error($conne));
  }

}
if ($got == 0){
echo "<div id='oalert'>There was an error moving this invite</div>";
}

}

  
  
  
  
  
  
  else if ($req == "returntoplan"){
$axevent = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$id' ");

$axcontributor = mysqli_query($conne,"SELECT * FROM contributors WHERE code = '$id' ");
$got = 0;

 //get from contributor where ref is code...
 //set cua... as value gotten or empty
while($rowc = mysqli_fetch_array($axcontributor)) {
 $got = 1;
    $cua = $rowc['cua'];
    $cub = $rowc['cub'];
    $cuc = $rowc['cuc'];
    $cud = $rowc['cud'];
    $cue = $rowc['cue'];
    $cuf = $rowc['cuf'];
 }
while($row = mysqli_fetch_array($axevent)) {
 $got = 1;

 //update event set cua... as new values.
 //absenties should be erased then
  $toplan = "UPDATE events SET status='plan', cua='$cua', cub='$cub', cuc='$cuc', cud='$cud', cue='$cue', cuf='$cuf' WHERE refs = '$id'";

echo "<h style='color:#6495ed'>Event returned to plan. <a href='/desk?code=$id' style='color:#bccdd8' class='disl'>Edit  <i class='material-icons' style='font-size:16px;vertical-align:middle'>edit</i></a></h>";

if (!mysqli_query($conne,$toplan))
  {
  die('Error: ' . mysqli_error($conne));
  }

}
if ($got == 0){
echo "<h style='color:#ed6464'>Could not revert event. Please refresh page.</h>";
}

}
  
  
  

else if ($req == "DELETE"){
$axevent = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$id' ");
$got = 0;

echo "<br>";
while($row = mysqli_fetch_array($axevent)) {
 $got = 1;

//delete images
 $stringd = $row['imgname'];
$stringdthumb = $row['imgthumb'];
if($stringdthumb != "default.png"){
 unlink("../images/events/$stringd");
unlink("../images/eventnails/$stringdthumb");
}else {}

  unlink("calendars/$id.ics");
  
  $totrash = "DELETE FROM events WHERE refs = '$id' ";

  $contrash = "DELETE FROM contributors WHERE code = '$id' ";

  $protrash = "DELETE FROM programs WHERE refs = '$id' ";

  $acttrash = "DELETE FROM actors WHERE refs = '$id' ";

  $polltrash = "DELETE FROM poll WHERE refs = '$id' ";
    
echo "<div class='inresult' id='$id'>Event has been deleted</div>";

if (!mysqli_query($conne,$totrash) or !mysqli_query($conne,$contrash) or !mysqli_query($conne,$protrash)  or !mysqli_query($conne,$acttrash) or !mysqli_query($conne,$polltrash))
  {
  die('Error: ' . mysqli_error($conne));
  }
}
if ($got == 0){
echo "<div class='inresult' id='$id'>There was an error deleting this event</div>";
}

}


  
  
  

else if ($req == "ACCEPT"){
$axevent = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$id' ");
$got = 0;

echo "<br>";
while($row = mysqli_fetch_array($axevent)) {
 $got = 1;


  $toplan = "UPDATE contributors SET $dbid='$cu' WHERE code='$id'";


echo "<div id='galert'>Invite Accepted <a href='event/$id'><button aria-label='create event' class='gboxit'>VIEW <i class='material-icons' style='font-size:16px;vertical-align:middle'>arrow_forward</i></button></a></div>";

if (!mysqli_query($conne,$toplan))
  {
  die('Error: ' . mysqli_error($conne));
  }

}
if ($got == 0){
echo "<div id='oalert'>There was an error accepting this invite</div>";
}}










else if ($req == "remove"){
$axevent = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$id' ");
$got = 0;

while($row = mysqli_fetch_array($axevent)) {
 $got = 1;


  $remevcontr = "UPDATE events SET $dbid='' WHERE refs='$id'";
  $remcontr = "UPDATE contributors SET $dbid='' WHERE code='$id'";


    echo "<img src='images/profiles/profilethumbs/user.png' class='tinypp'>
<div id='sugtxt'>
<b>Done</b><br>
<h id='sugname'>user has been removed</h>
</div>
";
if (!mysqli_query($conne,$remevcontr) or !mysqli_query($conne,$remcontr))
  {
  die('Error: ' . mysqli_error($conne));
  }

}
if ($got == 0){
    echo "<img src='images/profiles/profilethumbs/user.png' class='tinypp'>
<div id='sugtxt'>
<b>Error</b><br>
<h id='sugname'>user not removed, please retry</h>
</div>
";
}}














else if ($req == "add contact"){//finish up withcode to remove or cid incase its the frist follower

$getuser = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$cu' ");
$got = 0;

while($row = mysqli_fetch_array($getuser)) {
 $got = 1;

$oldcont = $row['contacts'];

if($oldcont == ""){
  $idb = substr($id,3); //remove or_ from or cid = 1
  $newcont = $idb;
}
else{
  $newcont = $oldcont . $id;
}

$tocont = "UPDATE profiles SET contacts='$newcont' WHERE username='$cu'";


echo "<a href='/account/contacts.php'><div id='oalert'>New contact added. View list <i class='material-icons' style='font-size:16px;vertical-align:sub'>perm_contact_calendar</i></div></a>";

if (!mysqli_query($conne,$tocont))
  {
  die('Error: ' . mysqli_error($conne));
  }

}
if ($got == 0){
echo "<div id='oalert'>Takes a profile to add @$dbid. <a href='/index?q=profile_required#singup'>Create one here <i class='material-icons' style='font-size:16px;vertical-align:sub'>person_add</i></a></div>";
}
echo "<br>";

}



  
  
  
  



else if ($req == "delete contact"){ //cu is username id is follower
$getuser = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$cu' ");
$got = 0;

while($row = mysqli_fetch_array($getuser)) {
 $got = 1;

$oldcont = $row['contacts'];

$realchar = substr_count($oldcont, "cid");
if($realchar > 1){
//remove user from list simple
$newconta = str_replace($id, "", $oldcont);//replaced, replacer, from

// do again remove first user from list if user is first on list
$idb = substr($id,3); //remove or_ from or cid = 1
$idbalt = $idb . "or"; //add or at the end of cid = 1, cid = 1 or to take car or the one after the first
$newcontb = str_replace($idbalt, "", $newconta); //turn cid = 1 or to nothing

}
else {
  $newcontb = "";
}
$tocont = "UPDATE profiles SET contacts='$newcontb' WHERE username='$cu'";


echo "<a href=''><div id='oalert'>Contact has been deleted. refresh page <i class='material-icons' style='font-size:16px;vertical-align:middle'>refresh</i></div></a>";

if (!mysqli_query($conne,$tocont))
  {
  die('Error: ' . mysqli_error($conne));
  }

}
if ($got == 0){
echo "<div id='oalert'>Please retry</div>";
}
echo "<br>";

}









else if ($req == "IGNORE"){
$axevent = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$id' ");
$got = 0;

echo "<br>";
while($row = mysqli_fetch_array($axevent)) {
 $got = 1;


  $toplan = "UPDATE contributors SET $dbid='' WHERE code='$id'";

  $toremovefromrecieved = "UPDATE events SET $dbid='' WHERE refs='$id'";

echo "<div id='galert'>Totally opted out of that.</div>";

if (!mysqli_query($conne,$toplan) or !mysqli_query($conne,$toremovefromrecieved))
  {
  die('Error: ' . mysqli_error($conne));
  }

}
if ($got == 0){
echo "<div id='oalert'>There was an error processing the request</div>";
}}
  
  
  
  
  
  
  
  
  
 else if ($req == "saveuserpushid"){
   $axevent = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$cu' ");
$got = 0;

while($row = mysqli_fetch_array($axevent)) {
 $got = 1;
  //set to default if user never tried push
if($id == 'null'){$id = '66666666-36f0-432b-9f5d-4bfeec61fa81';}else{$id = $id;}
  
  $pushin = "UPDATE profiles SET pushid = '$id' WHERE username='$cu'";
  
//echo "<div class='inresult' style='display:block;'>Push saved as $id</div>";

if (!mysqli_query($conne,$pushin))
  {
  die('Error: ' . mysqli_error($conne));
  }

}
if ($got == 0){
//echo "<div id='oalert'>push not saved as $id</div>";
}}
  
  
  
  
  
  
  
  
   else if ($req == "eventpushsubs"){
   $axevent = mysqli_query($conne,"SELECT * FROM contributors WHERE code = '$id' ");
$got = 0;

while($row = mysqli_fetch_array($axevent)) {
 $got = 1;
  $toremove = "$cu,";
  $existingids = $row['pushid'];
  $newids = $existingids . "$cu,";
  
  if($dbid == 'subing'){
    $pushin = "UPDATE contributors SET pushid = '$newids' WHERE code='$id' ";
 
        echo "<i class='material-icons' style='font-size: 13px;vertical-align: sub;'>notifications_off</i> unsubscribe";

        if (!mysqli_query($conne,$pushin))
              {
              die('Error: ' . mysqli_error($conne));
              }
}
else{ //unsubscibe
    $removeuser = str_replace("$toremove","","$existingids");
      $pushin = "UPDATE contributors SET pushid = '$removeuser' WHERE code='$id' ";
 
        echo "<i class='material-icons' style='font-size: 13px;vertical-align: sub;'>notifications</i> get updates notification";

        if (!mysqli_query($conne,$pushin))
              {
              die('Error: ' . mysqli_error($conne));
              }
     }
}
if ($got == 0){
echo "<i class='material-icons' style='font-size: 13px;vertical-align: sub;'>autorenew</i> please retry";
}}
  
  
  
  
  
  
  
  
  
  
  else if ($req == "leaveevent"){
$axevent = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$id' ");
$got = 0;

    
while($row = mysqli_fetch_array($axevent)) {
 $got = 1;
$s = $row['refs'];

  $fromplan = "UPDATE contributors SET $dbid= NULL WHERE code='$id'";

  $toremovefromrecieved = "UPDATE events SET $dbid='' WHERE refs='$id'";
  
echo "<div onclick='closealert()' id='valert' style='display:block;'>You have left this plan</div>";

if (!mysqli_query($conne,$fromplan) or !mysqli_query($conne,$toremovefromrecieved))
  {
  die('Error: ' . mysqli_error($conne));
  }

}
if ($got == 0){
echo "<div onclick='closealert()' id='valert'>Could not complete. Please Retry</div>";
}}
  
  
  
  
  
  
  
  
  
  
  else if ($req == "sendcalendar"){
$axevent = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$cu' ");
$got = 0;

while($row = mysqli_fetch_array($axevent)) {
 $got = 1;
$ee = $row['event'];
  $refs = $row['refs'];
  $email = $row['email'];
  $year = $row['year'];
  $zip = $row['zip'];
  $edates = $row['edates'];
  $hype = $row['hype'];
  $bvenue = $row['bvenue'];
  $description = $row['description']; $eedescritpion = "$description - https://vrixe.com/event/$refs";
  $filename = "$refs.ics";
  $d = str_replace(".","",$year);
  $ed = str_replace("-","",$edates);
  
  $rawtime = $row['timing'];
  $time = str_replace(":", "", $rawtime); $timel = strlen($time); 
  if ($timel == 4){$ftime = $time . "00";}else{$ftime = $time;}
  
  $rawetime = $row['variant'];
  $endtime = str_replace(":", "", $rawetime); $endtimel = strlen($endtime);
  if ($endtimel == 4){$fendtime = $endtime . "00";}else{$fendtime = $endtime;}
  
  $expst = "T" . $ftime;
  $expstt = "T" . $fendtime;
  
  $startdate = $d . $expst; 
  $enddate = $ed . $expstt; 
  
  $myfile = fopen("calendars/$refs.ics", "w") or die("Unable to open file!");
$txt = "
BEGIN:VCALENDAR
PRODID:-//Google Inc//Google Calendar 70.9054//EN
VERSION:2.0
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:Europe/Berlin
X-LIC-LOCATION:$zip
BEGIN:DAYLIGHT
TZOFFSETFROM:+0100
TZOFFSETTO:+0200
TZNAME:CEST
DTSTART:19700329T020000
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=-1SU
END:DAYLIGHT
BEGIN:STANDARD
TZOFFSETFROM:+0200
TZOFFSETTO:+0100
TZNAME:CET
DTSTART:19701025T030000
END:STANDARD
END:VTIMEZONE
BEGIN:VEVENT
DTSTART:$startdate
DTEND:$enddate
DTSTAMP:20190118T145316Z
ORGANIZER:$hype
DESCRIPTION:$eedescritpion
LAST-MODIFIED:20190118T145314Z
LOCATION:$bvenue
SEQUENCE:0
STATUS:CONFIRMED
SUMMARY:$ee
TRANSP:OPAQUE
END:VEVENT
END:VCALENDAR
";
fwrite($myfile, $txt);
fclose($myfile);

    
  
  
  require('addtocalendar.php');

echo "<h style='color:#6495ed'>Calendar sent to your email</h>";


}
if ($got == 0){
echo "<h style='color:#ed6464'>Please retry that</h>";
}}
  
  
  
  
  
  
  
  
  
  
  
  
  
  else if ($req == "commentvote"){//finish up withcode to remove or cid incase its the frist follower

$getuser = mysqli_query($conne,"SELECT * FROM poll WHERE refs = '$cu' ");
$got = 0;

while($row = mysqli_fetch_array($getuser)) {
 $got = 1;

$oldcomm = $row['comments'];
$newcomm = $oldcomm . $id . ": $dbid &="; //old comment, new username, column said, comment, & for programmatic editing

$tocont = "UPDATE poll SET comments=\"$newcomm\" WHERE refs='$cu' ";


echo "<div id='valert' style='display:block'> Commented as $id</div>";

if (!mysqli_query($conne,$tocont))
  {
  die('Error: ' . mysqli_error($conne));
  }

}
if ($got == 0){
echo "<div id='oalert'>There was an error updating comment <a href='help/feedbacks'>Report <i class='material-icons' style='font-size:16px;vertical-align:middle'>arrow_forward</i></a></div>";
}
echo "<br>";

}
  
  
  
  
  
  
  
  
  
    else if ($req == "votein"){//finish up withcode to remove or cid incase its the frist follower

$getuser = mysqli_query($conne,"SELECT * FROM poll WHERE refs = '$cu' ");
$got = 0;

while($row = mysqli_fetch_array($getuser)) {
 $got = 1;

  $checkforuser = $row['users'];
  
  //check if user had a vote
   $result = mysqli_query($conne,"SELECT * FROM poll WHERE refs = '$cu' and users LIKE '%$dbid%' LIMIT 1");
$foundauser = 0;
     while($rows = mysqli_fetch_array($result))
   {$foundauser=1;}
  
  if($foundauser == 1){    
    echo "<div id='valert' style='display:block;background-color:#d04a64;color:white;'>That vote was not saved. Voting is once per user </div>";
  }
  else{
    $oldpollcount = $row[$id];
$newpollcount = $oldpollcount + 1; //add a value to poll
    $usertoval = substr($id, 0,1); //which option user polled on
 
$newcheckforuser = $checkforuser . "$dbid #$usertoval!,"; //add user to list of users who voted

$tocont = "UPDATE poll SET $id='$newpollcount', users='$newcheckforuser' WHERE refs='$cu' ";
    
  echo "<div id='valert' style='display:block'> Vote saved with $dbid</div>";
    if (!mysqli_query($conne,$tocont))
  {
  die('Error: ' . mysqli_error($conne));
  }

  }
  
}
if ($got == 0){
echo "<div id='oalert'>Poll was not found. Please send a <a href='/help/feedback'>feedback</a></div>";
}
echo "<br>";

}
  
  
  
  
  
  


  
  
  
     else if ($req == "deletepoll"){//finish up withcode to remove or cid incase its the frist follower

$tocont = "UPDATE events SET pollcheck='' WHERE refs='$id' ";
   
  $removepoll = "UPDATE poll SET question='', answerone='', answertwo='', answerthree='', answerfour='', answerfive='', av= NULL, bv= NULL, cv= NULL, dv= NULL, ev= NULL, comments='', pollpri='', users='' WHERE refs='$id' ";
    
     echo "<div id='valert' style='display:block'>Poll has been deleted</div>";
       
       
    if (!mysqli_query($conne,$tocont) or !mysqli_query($conne,$removepoll) )
  {
   echo "<div id='valert' style='display:block'>Error deleting poll</div>";
  die('Error: ' . mysqli_error($conne));
  }

  }
 


  
  
  
  
  
  
  
  




//fetch some users for invite. also fetch only if id is given else we spit rand
else if ($req == "SUGGEST" and $id > ""){
$axeprofile = mysqli_query($conne,"SELECT * FROM profiles WHERE username LIKE '%$id%' AND username != '$cu' AND confirm > '' OR  email LIKE '%$id%' AND username != '$cu' AND confirm > '' LIMIT 1 ");
$got = 0;

while($row = mysqli_fetch_array($axeprofile)) {
 $got = 1;
 $sugname = $row['username'];
 $sugpic = $row['picture'];
 $sugmail = $row['email'];
 $sugpush = $row['pushid'];
 $sugfullname = $row['fullname'];

echo "<img src='images/profiles/profilethumbs/$sugpic' class='tinypp'>
<div id='sugtxt'>
<input type='text' class='rates' value='$sugmail' id='sugmail'>
<input type='text' class='rates' value='$sugpush' id='sugpush'>
<input type='text' class='rates' value='$sugpic' id='sugpic'>
<input type='text' class='rates' value='$sugname' id='sugusername'>
<b>$sugfullname</b><br>
<h id='sugname'>@$sugname</h>
</div>
";

}
if ($got == 0){
echo "<img src='images/profiles/profilethumbs/user.png' class='tinypp'>
<div id='sugtxt'>
<input type='text' class='rates' value='error' id='sugusername'>
<b>No user found</b><br>
<h id='sugname'>Suggest Vrixe</h>
</div>
";
}}

else if ($req == "SUGGEST" and $id == ""){
    echo "<img src='images/profiles/profilethumbs/user.png' class='tinypp'>
<div id='sugtxt'>
<input type='text' class='rates' value='error' id='sugusername'>
<b>Username or Email</b><br>
<h id='sugname'>start typing to add</h>
</div>
";
  }

  
  

  
//add auth token from backend
else if ($req == "addAuth"){
//shorten authkey
  $authtoken = substr($cu,0,480);//the static version of the token only
  $addAuth = "UPDATE profiles SET authtoken='$authtoken' WHERE email = '$id'";

if (!mysqli_query($conne,$addAuth)){ die('Error: ' . mysqli_error($conne)); }
}
  
  
//remove auth token from backend
else if ($req == "removeAuth"){

  $removeAuth = "UPDATE profiles SET authtoken=NULL WHERE email = '$id'";

echo "Disconnected your Google channel";

if (!mysqli_query($conne,$removeAuth)){ die('Error: ' . mysqli_error($conne)); }
}
  
  
  
  
  
  

//fetch some users for invite. also fetch only if id is given else we spit rand
else if ($req == "fetchforusers"){
$axeprofile = mysqli_query($conne,"SELECT * FROM profiles WHERE username LIKE '%$id%' AND confirm > '' OR email LIKE '%$id%' AND confirm > '' LIMIT 8 ");
$got = 0;
while($row = mysqli_fetch_array($axeprofile)) {
 $got = 1;
 $sugname = $row['username'];
 $sugpic = $row['picture'];
 $sugmail = $row['email'];
 $sugpush = $row['pushid'];
 $sugfullname = $row['fullname'];

  if ($cu == "hinput"){
echo "
<a href='/profile/$sugname'><div class='lilput' style='display:inline-block;'><img src='/images/profiles/profilethumbs/$sugpic' class='lilprofilephoto'><div class='jal'></div>@$sugname</div></a>
";
  }
  
  else{
    echo "
<a href='/profile/$sugname'><div class='lilput' style='display:inline-block;'><img src='/images/profiles/profilethumbs/$sugpic' class='lilprofilephoto'><div class='jal'></div>@$sugname</div></a>
";
  }
}
if ($got == 0){
  if($cu == "hinput"){
echo "
  <br>
  <h>We did not find any user from that.<br> Know a '<b>$id</b>' you'd like here?</h><br>
   <br><br><button type='button' class='copele' onclick='customshare(\"Find out more about Vrixe\", \"aboutvrixe\");'>INVITE TO VRIXE</button><br>
 <br>

";}
  else{
    echo"
      <br>
  <h style='color:#ffffff'>We did not find any user from that.<br><br> Why not share Vrixe with '<b>$id</b>'</h><br><br>

    ";
  }
}}
  
  
  
  

mysqli_close($conne);
?>
</body>
</html>
