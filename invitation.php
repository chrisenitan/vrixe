<?php
//do not require user account
$defaultAllowNoUser = true;
require("garage/passport.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Invitations</title>
<link rel="manifest" href="/manifest.json">
<meta name="description" content="Manage your Invitations">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("garage/resources.php"); ?>
<?php require("garage/validuser.php"); ?>
  <style>
    @media screen and (min-width: 980px){/*responsive*/
.cards{
width:45%;
}}
  </style>
</head>
<body>
<div id="gtr" onclick="closecloseb()"></div>

 <?php require("garage/absolunia.php"); ?>
<?php require("garage/deskhead.php"); ?>
<?php require("garage/desksearch.php");  ?>

<?php require("garage/deskpop.php"); ?>

<?php $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>Invitations</button>";
  require("garage/mobilehead.php"); ?>

<?php require("garage/subhead.php");?>

<?php require("garage/thesearch.php"); ?>


<br>

<div class="postcen">
<?php 

if(isset($_GET['iv'])){
  $ivr = mysqli_real_escape_string($conne, $_GET['iv']);
}else {$ivr = "";} //for the email and other direct links

  $claim = mysqli_real_escape_string($conne, $_POST['claim']);

  $iv = mysqli_real_escape_string($conne, $_POST['iv']);

if ($claim > "" and $ivr == "") #if ref form is passed
{
$findiv = mysqli_query($conne,"SELECT * FROM events WHERE status = 'invite' and refs = '$iv' LIMIT 1 "); 
   $gotiv = 0;
   while($rowiv = mysqli_fetch_array($findiv))
 {
   $gotiv = 1;

  $probecua =  $rowiv['cua']; $cua = htmlspecialchars($probecua, ENT_QUOTES);
$probecub =  $rowiv['cub']; $cub = htmlspecialchars($probecub, ENT_QUOTES);
$probecuc =  $rowiv['cuc']; $cuc = htmlspecialchars($probecuc, ENT_QUOTES);
$probecud =  $rowiv['cud']; $cud = htmlspecialchars($probecud, ENT_QUOTES);
$probecue =  $rowiv['cue']; $cue = htmlspecialchars($probecue, ENT_QUOTES);
$probecuf =  $rowiv['cuf']; $cuf = htmlspecialchars($probecuf, ENT_QUOTES);


    $code = $rowiv['refs'];
    $view = $rowiv['views']; if($view == 1){$views = "$view view";}else{$views = "$view views";}
    $owner = $rowiv['hype'];
    $datep = $rowiv['datep'];
    $dates = $rowiv['dates'];
    $authkey = $rowiv['authkey'];
    $day = $rowiv['day'];
    $month = $rowiv['month'];
    $da = substr($dates, -2); 
    $caleng = "$day, $month $da";
    $time = $rowiv['timing'];
    $probedescription= $rowiv['description']; $description = htmlspecialchars($probedescription, ENT_QUOTES);
    $probeevent= $rowiv['event']; $ee = htmlspecialchars($probeevent, ENT_QUOTES);
   
    $class = $rowiv['class'];
    $imgname = $rowiv['imgname'];

//getprofile images of each person
       if ($cua > ""){
      $idcua = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$cua' LIMIT 1 "); 
   while($rowcua = mysqli_fetch_array($idcua))
 {
   $cuaimg = $rowcua['picture'] ;
 }
     }



       if ($cub > ""){
      $idcub = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$cub' LIMIT 1 "); 
   while($rowcub = mysqli_fetch_array($idcub))
 {
   $cubimg = $rowcub['picture'] ;
 }
     }



     if ($cuc > ""){
      $idcuc = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$cuc' LIMIT 1 "); 
   while($rowcuc = mysqli_fetch_array($idcuc))
 {
   $cucimg = $rowcuc['picture'] ;
 }
     }


       if ($cud > ""){
      $idcud = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$cud' LIMIT 1 "); 
   while($rowcud = mysqli_fetch_array($idcud))
 {
   $cudimg = $rowcud['picture'] ;
 }
     }


       if ($cue > ""){
      $idcue = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$cue' LIMIT 1 "); 
   while($rowcue = mysqli_fetch_array($idcue))
 {
   $cueimg = $rowcue['picture'] ;
 }
     }


       if ($cuf > ""){
      $idcuf = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$cuf' LIMIT 1 "); 
   while($rowcuf = mysqli_fetch_array($idcuf))
 {
   $cufimg = $rowcuf['picture'] ;
 }
     }

//fetch user value. set value as username where id is ref and under row of the user. for getting who acted
     if ($cua == $username){$dbid = 'cua';}
     else if ($cub == $username){$dbid = 'cub';}
     else if ($cuc == $username){$dbid = 'cuc';}
     else if ($cud == $username){$dbid = 'cud';}
     else if ($cue == $username){$dbid = 'cue';}
     else if ($cuf == $username){$dbid = 'cuf';}
     else {$dbid = 'cua';} //catastrophic error

     //get who has accepted or declined
  $checkcustatus = mysqli_query($conne,"SELECT * FROM contributors WHERE code = '$iv' ");

while($gotcustatus = mysqli_fetch_array($checkcustatus)) {

$probecuam =  $gotcustatus['cua']; $cuam = htmlspecialchars($probecuam, ENT_QUOTES);
$probecubm =  $gotcustatus['cub']; $cubm = htmlspecialchars($probecubm, ENT_QUOTES);
$probecucm =  $gotcustatus['cuc']; $cucm = htmlspecialchars($probecucm, ENT_QUOTES);
$probecudm =  $gotcustatus['cud']; $cudm = htmlspecialchars($probecudm, ENT_QUOTES);
$probecuem =  $gotcustatus['cue']; $cuem = htmlspecialchars($probecuem, ENT_QUOTES);
$probecufm =  $gotcustatus['cuf']; $cufm = htmlspecialchars($probecufm, ENT_QUOTES);


}

//start showing as to who is vieweing

 if($username == $owner or $username == $cua or $username == $cub or $username == $cuc or $username == $cud or $username == $cue or $username == $cuf){


if ($claim == "owner" and $username == $owner) { //its your event see it naked

echo"<div class='pef'>
<script>
  var iv = '$code';
   var cu = '$email';
</script>
<br>

<a href='event/$code'>

<div class='eventimage'>$ee</div><br>
<h class='bottoms' id='evin'>$description</h></a><br><br>
";

$countallcu = 0; //just oreset so we dntcall unset var
if($cuam > ""){
  echo "
<a href='profile/$cuam'><div class='lilput'><img src='$cuaimg' class='lilprofilephoto'><div class='jal'></div>$cuam</div></a>";
$countcua = 1;
}


if($cubm > ""){
  echo "
<a href='profile/$cubm'><div class='lilput'><img src='$cubimg' class='lilprofilephoto'><div class='jal'></div>$cubm</div></a>";
$countcub = 1;
}

if($cucm > ""){
  echo "
<a href='profile/$cucm'><div class='lilput'><img src='$cucimg' class='lilprofilephoto'><div class='jal'></div>$cucm</div></a>";
$countcuc = 1;
}

if($cudm > ""){
  echo "
<a href='profile/$cudm'><div class='lilput'><img src='$cudimg' class='lilprofilephoto'><div class='jal'></div>$cudm</div></a>";
$countcud = 1;
}

if($cuem > ""){
  echo "
<a href='profile/$cuem'><div class='lilput'><img src='$cueimg' class='lilprofilephoto'><div class='jal'></div>$cuem</div></a>";
$countcue = 1;
}

if($cufm > ""){
  echo "
<a href='profile/$cufm'><div class='lilput'><img src='$cufimg' class='lilprofilephoto'><div class='jal'></div>$cufm</div></a>";
$countcuf = 1;
}

$countallcu = $countcua + $countcub + $countcuc + $countcud + $countcue +$countcuf;
if($countallcu == 1){
 $acceptedsofar = "and $countallcu contributor accepted so far.";
}
else if($countallcu > 1){
 $acceptedsofar = "and $countallcu contributors accepted so far.";
}
else{
   $acceptedsofar = "and no contributor response so far. <br> Add some friends to plan and edit with.";
}

echo"<br>
<b><h class='bottoms'>$views $acceptedsofar</h></b>";
if($class == 'private'){
  echo "<br><h class='miniss'>Your private access key is <b>$authkey</b></h>";
}

echo"<br><br>
<a href='desk.php?code=$code'><button class='control' type='button'><i class='material-icons' style='font-size: 18px;vertical-align: sub;'>edit</i> Edit Invite</button></a>

<a href='#pulldown'><button onclick='deleteSentInvite(iv)' class='triocontrol' type='button'><i class='material-icons' style='font-size: 18px;vertical-align: sub;'>delete</i> Delete</button></a>
<br><br><div class='jal'></div>

<div id='polishmtp'>
<h class='disl'>plans let you add and edit more details together with your invitees</h><br><br>

<button onclick='movetoplan(\"MOVE TO PLAN\", iv)' class='copele' type='button' id='d_pull'><i class='material-icons' style='font-size: 18px;vertical-align: sub;'>swap_horiz</i> Move To Plan</button><br>
</div>

<div id='result'></div><br>

<div class='cards' onclick='movetoplan(\"MOVE TO PLAN\", iv)'><br>  
   <img alt='update details' src='/images/essentials/vote.svg' class='everybodyimg'>
   <p class='miniss'>Take a poll</p>
   </div>
   
   <div class='cards' style='padding-top:2%' onclick='movetoplan(\"MOVE TO PLAN\", iv)'><br>  
   <img alt='update details' src='/images/essentials/agenda.svg' class='everybodyimg' style='width:43%'>
   <p class='miniss'>Add an Agenda</p>
   </div>
   
   <div class='cards' onclick='movetoplan(\"MOVE TO PLAN\", iv)'><br>  
   <img alt='update details' src='/images/essentials/imageteaser.svg' class='everybodyimg'>
   <p class='miniss'>Upload your own event image</p>
   </div>
   
    <div class='cards' style='padding-top:2%' onclick='movetoplan(\"MOVE TO PLAN\", iv)'><br>  
   <img alt='update details' src='/images/essentials/contacts.svg' class='everybodyimg'>
   <p class='miniss'>Add and edit more details with friends</p>
   </div>
   
   
   <br><br>
   
<div class='blfheadalt'></div>

</div>";

}

else if ($claim == "contributor" and $username != $owner) { //its your invitation have a blast

echo"<div class='pef'>
<script>
  var iv = '$code';
   var cu = '$username';
   var dbid = '$dbid';
</script>

<div class='blfhead'>Received Invite</div><br>

<a href='event/$code'>
<h id='type'>VIEW EVENT <i class='material-icons' style='font-size:13px;vertical-align:sub'>arrow_forward</i></h><br>

<div class='eventimage'>$ee</div><br>

<h class='bottoms' id='evin'>$description</h></a><br>
<h class='bottoms'><b>$caleng</b> at <b>$time</b></h><br><br>

<h class='miniss'><a href='profile/$owner'>@$owner</a> has added you to this invite list<br>Accept to plan details together or Ignore to delete the invite</h><br>

";

if($cua > "" and $cua != "$username" or $cub > "" and $cub != "$username" or $cuc > "" and $cuc != "$username" or $cud > "" and $cud != "$username" or $cue > "" and $cue != "$username" or $cuf > "" and $cuf != "$username"){
  echo "<br><h class='bottoms'>Others on the list</h><br>";
}

if($cua > "" and $cua != "$username"){
  echo "
  <a href='profile/$cua'><div class='lilput'><img src='$cuaimg' class='lilprofilephoto'><div class='jal'></div>$cua</div></a>
  ";
}


if($cub > "" and $cub != "$username"){
  echo "
  <a href='profile/$cub'><div class='lilput'><img src='$cubimg' class='lilprofilephoto'><div class='jal'></div>$cub</div></a>
  ";
}

if($cuc > "" and $cuc != "$username"){
  echo "
  <a href='profile/$cuc'><div class='lilput'><img src='$cucimg' class='lilprofilephoto'><div class='jal'></div>$cuc</div></a>
  ";
}


if($cud > "" and $cud != "$username"){
  echo "
  <a href='profile/$cud'><div class='lilput'><img src='$cudimg' class='lilprofilephoto'><div class='jal'></div>$cud</div></a>
  ";
}


if($cue > "" and $cue != "$username"){
  echo "
  <a href='profile/$cue'><div class='lilput'><img src='$cueimg' class='lilprofilephoto'><div class='jal'></div>$cue</div></a>
  ";
}


if($cuf > "" and $cuf != "$username"){
  echo "
  <a href='profile/$cuf'><div class='lilput'><img src='$cufimg' class='lilprofilephoto'><div class='jal'></div>$cuf</div></a>
  ";
}


echo "
<br><br>

<button onclick='process(\"ACCEPT\", iv, cu, dbid)' class='copele' type='utton'><i class='material-icons' style='font-size: 18px;vertical-align: sub;'>how_to_reg</i> Accept</button>

<button onclick='ignoreInvite(iv, cu, dbid)' class='triocontrol' type='button'><i class='material-icons' style='font-size: 18px;vertical-align: sub;'>person_add_disabled</i> Ignore</button>


<div id='result'></div>
<br><div class='blfheadalt'></div>

</div>";

}

else { //this should not even happen cus it means you sent a claim on an event thats not even yours in any way but hey lets cobver it up 
  echo "<div class='postcen'> 
  <div class='pef'>
    <div class='blfhead'>Access Denied</div><br>

  <img alt='$iv' src='images/essentials/error.png' class='everybodyimg'>
  <h class='miniss'>What is happening here?<br>We couldn't verify your ID for this event. Sure you are in the right place?<br><br>
   <a href='/event/$iv'><button class='copele'>CHECK EVENT</button></a><br><br>

   <h class='miniss'>More?<br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i></i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='copele'> INSTALL WEB APP</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div></div>";
}
}//end of if iv was sent

}//e of if while

if ($gotiv == 0){
  echo "
  <div class='pef'>
    <div class='blfhead'>Event has moved</div><br>

  <img alt='$iv' src='images/essentials/error.png' class='everybodyimg'>
  <h class='miniss'>First you invite, then you plan.<br>This event has been removed from invite.<br><br>
   <a href='/event/$iv'><button class='copele'><i class='material-icons' style='vertical-align:sub;font-size:17px'>event</i> View Event</button></a><br><br><br>

   <h class='miniss'>We have a Progressive Web App<br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i></i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> Install Web App</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div>
";
    // later, ive must not exist maybe event is dleted or something
}
}//end of if something wa spased

else if ($claim == "" and $ivr > ""){ //must be a directlin. take care of them
  //CHECK FOR URL QUERY and tell user to open a profile too see this normaly

$findiv = mysqli_query($conne,"SELECT * FROM events WHERE status = 'invite' and refs = '$ivr' LIMIT 1 "); 
   $gotiv = 0;
   while($rowivr = mysqli_fetch_array($findiv))
 {
   $gotiv = 1;
    $owner = $rowivr['hype'];
   $probeevent = $rowivr['event']; $ee = htmlspecialchars($probeevent, ENT_QUOTES);
    $class = $rowivr['class'];
    $imgname = $rowivr['imgname'];
     $time = $rowivr['timing'];
    $probedescription= $rowivr['description']; $description = htmlspecialchars($probedescription, ENT_QUOTES);
    $dates = $rowivr['dates'];
    $day = $rowivr['day'];
    $month = $rowivr['month'];
    $da = substr($dates, -2); 
    $caleng = "$day, $month $da";

echo"<div class='pef'>

<div class='blfhead'>Planning Invitation</div><br>
<a href='event/$ivr'>

<div class='eventimage'>$ee</div><br>

<h class='bottoms' id='evin'>$description</h></a><br>
<h class='bottoms'><b>$caleng</b> at <b>$time</b></h><br><br>


<h class='miniss'>Created by <b><a href='profile/$owner'>@$owner</a></b>. Open invite to see more details</h><br><br>

<a href='account/notifications'><button class='copele'><i class='material-icons' style='font-size: 18px;vertical-align: sub;'>email</i> VIEW INVITE</button></a>
<a href='event/$ivr'><button class='triocontrol'><i class='material-icons' style='font-size: 18px;vertical-align: sub;'>event</i> EVENT</button></a>
<br><br>

<br><br>
<div class='blfheadalt'></div>

</div>";

}

}

else{ //you tried the ordinary link directl via url. show advert
  echo "

  <div class='postcen'> 
  <div class='pef'>
    <div class='blfhead'>Invitations</div><br>

  <img alt='$iv' src='images/events/default.jpg' class='thisimage'>
  <h class='miniss'>Invite your friends to something<br>Manage invitations and move to planning stage to collaborate with your friends on that next big thing.<br><br>
   <a href='aboutvrixe'><button class='copele'><i class='material-icons' style='vertical-align:sub;font-size:17px'>help</i> Know More</button></a><br><br>

   <h class='miniss'>We have a Progressive Web App<br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i></i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> Install Web App</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div></div>
  ";
}

?>
</div>
<br><br>



<?php require("garage/networkStatus.php"); ?>
</body>
</html>