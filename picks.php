<?php
require("garage/passport.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Plans | Events you are working on</title>
<link rel="manifest" href="manifest.json">
<meta name="description" content="See what you are working on from you and your team.">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("garage/resources.php"); ?>
<?php require("garage/validuser.php"); ?>
  
<style>
  	body{
  		background-color: #f5f5f5;
  	}
  </style>
</head>
<body>
  
<?php require("./garage/absolunia.php"); ?>
  
<div id="gtr" onclick="closecloseb()"></div>


<?php require("garage/deskhead.php"); ?>
<?php require("garage/desksearch.php");  ?>
<?php require("garage/deskpop.php"); ?>


<?php $pagename = "<button class='hbut' id='mbut' aria-label='vrixe'>My Plans</button>";
  require("garage/mobilehead.php"); ?>

<?php 
//set icon color
$planscolor = "style='color:#1fade4'";

require("garage/subhead.php");?>

<?php require("garage/thesearch.php"); ?>

<br>
   

<div class="postcen">

<?php
echo "<div id='result'></div>";
  //from where it is users plan or others invite or plan. we dont show users invite cus we have that in analytics page already
$result = mysqli_query($conne,"SELECT * FROM events WHERE hype = '$username' AND status != 'invite' OR cua = '$username' OR cub = '$username' OR cuc = '$username' OR cud = '$username' OR cue = '$username' OR cuf = '$username' ORDER BY hype != '$username' LIMIT 25"); 
 $founds = 0;

   while($row = mysqli_fetch_array($result))
 {$founds = 1;

$r = $row['refs'];
$probevpe =  $row['event']; $ee = htmlspecialchars($probevpe, ENT_QUOTES);
$probedescription =  $row['description']; $description = htmlspecialchars($probedescription, ENT_QUOTES);
$dlent = strlen($description);
$imagename = $row['imgthumb'];
$state = $row['zip'];
$themea = $row['type'];
$month = $row['month'];
$year = substr($row['year'], 0,4);
$evorganiser = $row['organiser'];
$elent = strlen($ee);
$poster = $row['hype'];
$status = $row['status']; $cua = $row['cua']; $cub = $row['cub']; $cuc = $row['cuc']; $cud = $row['cud']; $cue = $row['cue']; $cuf = $row['cuf']; 
  //get user position
    //set update position to where who uploaded what are you in cahrge of
      if ($username == $cua){$userposition = "cua";}
     else if ($username == $cub){$userposition = "cub";}
     else if ($username == $cuc){$userposition = "cuc";}
     else if ($username == $cud){$userposition = "cud";}
     else if ($username == $cue){$userposition = "cue";}
     else if ($username == $cuf){$userposition = "cuf";}

    //image background set
     if($imagename == "default.png"){
       $cardBack = "background: linear-gradient(45deg, #252b38 0%, #252b38 44%,rgb(43, 52, 67) 44%, rgb(43, 52, 67) 45%,rgb(43, 52, 67) 61%, rgb(43, 52, 67) 67%,#0298ad 67%, #0298ad 100%)";
     }else{
       $cardBack = "background-image:url(\"images/eventnails/$imagename\")";
     }


if ($status == "approved"){
echo "<div class='approvedcards' style='$cardBack'><br>
<button class='cardsactions' onclick='share$r()'><i class='material-icons'>share</i><br>share</button>
";
}else{
echo "<div class='cards' style='$cardBack'><br>
<a href='desk?code=$r'><button class='cardsactions'><i class='material-icons'>edit</i><br>edit</button></a>
<button class='cardsactions' onclick='share$r()'><i class='material-icons'>share</i><br>share</button>
";
}
 
  
    if($poster != $username){
    
  echo"
<button class='cardsactions' id='$r' onclick='leavePlan(\"$r\")' title='Remove yourself from an event. Your last changes will still apply'><i class='material-icons'>indeterminate_check_box</i><br>Leave</button>";
  }
  
  
if ($elent > 18){
$newee = substr($ee, 0, 17);
$shortee = "$newee...";
}
else { $shortee = $ee;
}

echo "<a href='event/$r'>

<div class='cardtitle'>$shortee <i class='material-icons' style='font-size:17px;vertical-align:sub;color:#00f2a2'>arrow_forward</i></div>
</a>
";

if ($dlent > 26){
$ndescri = substr($description, 0, 25);
$descr = "$ndescri...";
echo "<a href='event/$r'><h class='cardsdescription'>$descr</h></a><br> <a href='profile/$poster'><h class='cardsdescription underlink'>by @$poster | $month $year</h></a>";
}
else {echo "<a href='event/$r'><h class='cardsdescription'>$description</h></a><br> <a href='profile/$poster'><h class='cardsdescription underlink'>by @$poster | $month $year</h></a>";
}


echo "<br><br></div>

<script>
function share$r(){
  var cst = \"$ee\";
    var csl = 'event/$r';
customshare(cst, csl);
}
</script>";


}
if ($founds == 0) {  
  
  echo "
     <div class='postcen'>
<div class='pef'>
  <div class='blfhead'>...your plans</div><br>
 
  <img alt='plans' src='/images/essentials/plans.svg' class='everybodyimg'><br>
  <h class='miniss'>What is here?</h><br><h class='disl'>Picks is a list of events you're working on</h><br><br>
  <h class='miniss'>Start a plan</h><br><h class='disl'>Have a meetup idea? Create a post and see who to join on Vrixe.</h> <br><br>
   <button class='copele' onclick='customshare()'><i class='material-icons' style='vertical-align: bottom;font-size:18px;'>share</i> Share Vrixe</button><br><br>

   <h class='miniss'>More?</h><br>

<i style='color:#065cff;' class='material-icons'>add_circle</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='app/pwa.html'><button class='control'> INSTALL WEB APP</button></a></h><br><br>

<br>
  <div class='blfheadalt'></div>

</div>
";
}

?><br><br>
<br><br>

</div>

<?php require("garage/networkStatus.php"); ?>
</body>
</html>