<?php
//do not require user account
$defaultAllowNoUser = true;
require("garage/passport.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Jobs on Vrixe</title>
<link rel="manifest" href="manifest.json">
<meta name="description" content="Find open positions on Vrixe and let's build amazing together">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("garage/resources.php"); ?>

</head>
<body>
  <?php require("garage/absolunia.php"); ?>
<div id="gtr" onclick="closecloseb()"></div>

<?php require("garage/deskhead.php"); ?>
<?php require("garage/desksearch.php");  ?>
<?php require("garage/deskpop.php"); ?>

<?php $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>Jobs</button>";
  require("garage/mobilehead.php"); ?>

<?php require("garage/subhead.php");?>

<?php require("garage/thesearch.php"); ?>

<br>

<div class="postcen">
  
  <?php

  //from where it is users plan or others invite or plan. we dont show users invite cus we have that in analytics page already
$result = mysqli_query($conne,"SELECT * FROM jobs WHERE status = 'open' LIMIT 25"); 
 $founds = 0;

   while($row = mysqli_fetch_array($result))
 {$founds = 1;

$position = $row['position']; $positionEncoded = urlencode( $position );
$image =  $row['image'];
$phrase =  $row['phrase']; $description = htmlspecialchars($probedescription, ENT_QUOTES);
$details = $row['details'];
$cid = $row['cid'];

    echo "<div class='pef' id='$cid'>
    <script>
    var cst = 'There is a position, we want you in for at Vrixe, please visit us.';
    var csl = 'jobs#$cid';
    </script>
    <div class='blfhead'>...to our new $position</div><br><br>

  <img alt='$code' src='images/jobs/$image.svg' class='everybodyimg'><br>
  <h class='miniss'>$phrase</h><br><h class='disl'>$details</h> <br><br>
   <a href='mailto:openinterest@vrixe.com?subject=Application:%20$positionEncoded%20at%20Vrixe%20-%20$cid'><button class='copele'><i class='material-icons' style='vertical-align: text-top;font-size: 17px;'>mail</i> mail us</button></a>
   
   <button class='triocontrol' onclick='customshare(cst, csl)'><i class='material-icons' style='vertical-align: text-top;font-size: 17px;'>share</i> share</button>
      
      <br><br>


  <div class='blfheadalt'></div>

  </div>";
 
 }
  
 if($founds == 0){
   echo "
  <div class='pef' style='display:inline-block'>
    <div class='blfhead'>...writing the offers</div><br><br>

  <img alt='Jobs at Vrixe' src='images/jobs/allJobs.svg' class='everybodyimg'><br>
  <h class='miniss'>There's always a position open</h><br><h class='disl'>We are refining the requirements to realistic expectations, please check back for new positions. Can't wait? Please send us your CV and we'll get back to you</h> <br><br>
   <a href='mailto:openinterest@vrixe.com'><button class='copele'><i class='material-icons' style='vertical-align: text-top;font-size: 17px;'>mail</i> MAIL US</button></a><br><br>

   <h class='miniss'>More?</h><br>

<i class='material-icons' style='vertical-align:bottom;font-size:17px;color:#065cff'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> INSTALL WEB APP</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div>";
 }
  
?>
  
  
  
  
  
  <br><br><br><br>
  </div>
   
  
<?php require("garage/networkStatus.php"); ?>
</body>
</html>