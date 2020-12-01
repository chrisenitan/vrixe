<?php
//poll page to show user. will generate actual poll from user_poll
//do not require user account
$defaultAllowNoUser = true;
require("garage/passport.php"); 

 $ppaccesscode = mysqli_real_escape_string($conne, $_POST['authkey']);
if($ppaccesscode > ""){
$pollref = mysqli_real_escape_string($conne, $_GET['id']); #turn ref into ordinary text
  
  $geteventname = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$pollref' LIMIT 1"); 
   while($rowfep = mysqli_fetch_array($geteventname)){
      $eventpollcheck = $rowfep['pollcheck']; //check for if poll
      $eventauthkey = $rowfep['authkey'];
 
     $resulttitle = mysqli_query($conne,"SELECT * FROM poll WHERE refs = '$pollref' LIMIT 1"); 
 $polltitle = 0;
   while($rowtitle = mysqli_fetch_array($resulttitle))
 {$polltitle = 1;
  $eventnamepre = $rowtitle['question']; 
 }
   
     if($polltitle == 0){
       $neventname = "Take a Poll";
     }else{
$neventname = "Poll - " . substr($eventnamepre, 0, 14) . "...";}
}
} 

else if(isset($_GET['id'])){
  $pollref = mysqli_real_escape_string($conne, $_GET['id']); #turn ref into ordinary text
  
  $geteventname = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$pollref' LIMIT 1"); 
   while($rowfep = mysqli_fetch_array($geteventname)){
      $eventpollcheck = $rowfep['pollcheck']; //check for if poll
 
     $resulttitle = mysqli_query($conne,"SELECT * FROM poll WHERE refs = '$pollref' LIMIT 1"); 
 $polltitle = 0;
   while($rowtitle = mysqli_fetch_array($resulttitle))
 {$polltitle = 1;
  $eventnamepre = $rowtitle['question']; 
 }
   
     if($polltitle == 0){
       $neventname = "Take a Poll";
     }else{
$neventname = "Poll - " . substr($eventnamepre, 0, 14) . "...";}
} }

else{
  header('Location: me');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="manifest" href="/manifest.json">
<meta name="description" content="Cast a vote on your event questions.">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php 
  echo"<title>$neventname</title>";
  require("./garage/resources.php"); ?>
<?php require("./garage/validuser.php"); ?>
  
  <style>
  	body{
  		background-color: #f5f5f5;
  	}
  </style>
</head>
<body>
<div id="gtr" onclick="closecloseb()"></div>

  <?php require("./garage/absolunia.php"); ?>
<?php require("./garage/deskhead.php"); ?>
<?php require("./garage/desksearch.php");  ?>
<?php require("./garage/deskpop.php"); ?>


<?php $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>$neventname</button>";
  require("./garage/mobilehead.php"); ?>

<?php 

require("./garage/subhead.php");?>

<?php require("./garage/thesearch.php"); ?>

<br>
   

<div class="postcen">

<?php
echo "<div id='result'></div>";
  //from where it is users plan or others invite or plan. we dont show users invite cus we have that in analytics page already
 
  if($eventpollcheck > ""){
    
$result = mysqli_query($conne,"SELECT * FROM poll WHERE refs = '$pollref' LIMIT 1"); 
 $founds = 0;

   while($row = mysqli_fetch_array($result))
 {$founds = 1;
    
  //go to fetch from events
  $findpollevent = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$pollref' LIMIT 1"); 
 $foundspollevent = 0;
    while($rowpe = mysqli_fetch_array($findpollevent))
 {$foundspollevent = 1;
  $eventimage = $rowpe['imgname'];
   $eventname = $rowpe['event'];
  $hype = $rowpe['hype'];
  
  if ($username == $rowpe['hype'] or $username > "" and $username == $rowpe['cua'] or $username > "" and $username == $rowpe['cub'] or $username > "" and $username == $rowpe['cuc'] or $username > "" and $username == $rowpe['cud'] or $username > "" and $username == $rowpe['cue'] or $username > "" and $username == $rowpe['cuf'] ){
  $governoronpage = true;
}
else{
  $governoronpage = false;  
 }
 }

  
  
  
$r = $row['refs'];
  $privateref = $r; //for privatebox plug
    $pposter = $hype; //for privatebox plug
  $ispollpri = $row['pollpri'];
  $pollquestion = $row['question'];
$answerone = $row['answerone'];
$answertwo = $row['answertwo'];
$answerthree = $row['answerthree'];
$answerfour = $row['answerfour'];
$answerfive = $row['answerfive'];
$pollcomments = $row['comments'];
  $pollusers = $row['users'];
  $av = $row['av']; if($av == 0){$avven = "";}else if($av == 1){$avven = "vote";}else{$avven = "votes";}
  $bv = $row['bv']; if($bv == 0){$bvven = "";}else if($bv == 1){$bvven = "vote";}else{$bvven = "votes";}
   $cv = $row['cv']; if($cv == 0){$cvven = "";}else if($cv == 1){$cvven = "vote";}else{$cvven = "votes";}
   $dv = $row['dv']; if($dv == 0){$dvven = "";}else if($dv == 1){$dvven = "vote";}else{$dvven = "votes";}
   $ev = $row['ev']; if($ev == 0){$evven = "";}else if($ev == 1){$evven = "vote";}else{$evven = "votes";} 
  
  
  if($governoronpage == "true"){//poll owner is here
   require("garage/user_poll.php");
  }
    else if($ispollpri == "true" and $ppaccesscode == ""){
    //ask for a password
         $sendformto = "/poll/$pollref";
   require("garage/privatebox.php");
   echo"<script type='text/javascript' src='/garage/scripts/redeye.js?v=$vv'></script>";
       
  }
  else if($ispollpri == "true" and $ppaccesscode > ""){
   //verify password that was later sent
    if($eventauthkey == $ppaccesscode){
 require("garage/user_poll.php");
    }
    else{
   //ask for a password again
      $privateBoxError = "Your access code is incorrect. Please check and retry";
         $sendformto = "/poll/$pollref";
   require("garage/privatebox.php");
   echo"<script type='text/javascript' src='/garage/scripts/redeye.js?v=$vv'></script>";
    }
  }
  
    else if ($ispollpri == "false"){
         //poll is not private show poll
   require("garage/user_poll.php");
    }
  
  
 
  else{
         echo "
  <div class='pef' style='display:inline-block'>
    <div class='blfhead'>...no poll here</div><br><br>

  <img alt='$pollref' src='/images/essentials/nodata.svg' class='everybodyimg'><br>
  <h class='miniss'>What is happening here?</h><br><h class='disl'>We got the link, we have every other file but looks like this poll does not exist or has been deleted.</h> <br><br>
  <h class='miniss'>What can I do?</h><br><h class='disl'>Please confirm with the creators. You can also send us a report and we'll check this for you.</h> <br><br>
   <a href='/help/feedbacks'><button class='copele'>FEEDBACK</button></a><br><br>

   <h class='miniss'>What is Vrixe?</h><br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/aboutvrixe'><button class='control'> LEARN MORE</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div><br><br><br>";
  }

  
}
if ($founds == 0) {
      echo "
  <div class='pef' style='display:inline-block'>
    <div class='blfhead'>...poll not found</div><br><br>

  <img alt='$code' src='/images/essentials/nodata.svg' class='everybodyimg'><br>
  <h class='miniss'>What is happening here?</h><br><h class='disl'>We did not find any poll with the reference provided. Poll might have been deleted.</h> <br><br>
  <h class='miniss'>What can I do?</h><br><h class='disl'>Please check your link or confirm with the creator. You can also send us a report and we'll check this for you.</h> <br><br>
   <a href='/help/feedbacks'><button class='copele'>FEEDBACK</button></a><br><br>

   <h class='miniss'>What is Vrixe?</h><br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/aboutvrixe'><button class='control'> LEARN MORE</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div><br><br><br>";
}

    
  }//end of if pollcheck is there
  else{
          echo "
  <div class='pef' style='display:inline-block'>
    <div class='blfhead'>...no poll here</div><br><br>

  <img alt='$pollref' src='/images/essentials/nodata.svg' class='everybodyimg'><br>
  <h class='miniss'>What is happening here?</h><br><h class='disl'>We got the link, we have every other file but looks like this poll does not exist or has been deleted.</h> <br><br>
  <h class='miniss'>What can I do?</h><br><h class='disl'>Please confirm with the creators. You can also send us a report and we'll check this for you.</h> <br><br>
   <a href='/help/feedbacks'><button class='copele'>FEEDBACK</button></a><br><br>

   <h class='miniss'>What is Vrixe?</h><br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/aboutvrixe'><button class='control'> LEARN MORE</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div><br><br><br>";
  }
?><br><br>
<br><br>

</div>

<div id="offline" onclick="document.getElementById('offline').style.display='none';">Offline!<br><span id="smoff">Some features will not be available</span></div>
</body>
</html>