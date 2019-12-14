<?php
require("garage/visa.php"); 
if (isset($_COOKIE['user'])){
 $cookie = $_COOKIE['user'];
 $cooked = mysqli_query($conne,"SELECT * FROM profiles WHERE cookie = '$cookie' LIMIT 1"); 
 $headcook = 0;
   while($founduser = mysqli_fetch_array($cooked)){
     $headcook = 1;
   $fullname = $founduser['fullname'];
   $username = $founduser['username'];
   $mycontacts = $founduser['contacts'];
   $pagename = "<button class='hbut' id='mbut' aria-label='vrixe'>My Plans</button>";
   $userheadimg = $founduser['picture'];
}
if ($headcook == 0){
     echo "<script> document.location = 'index';</script>";
}}
else{
 echo "<script>
 document.location = 'index.php';
 </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Analytics Test</title>
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


<?php require("garage/mobilehead.php"); ?>

<?php 
//set icon color
$planscolor = "style='color:#1fade4'";

require("garage/subhead.php");?>

<?php require("garage/thesearch.php"); ?>

<br>
   

<div class="postcen">

<?php
echo "<div id='result'></div>
  <div class='postcen'>
<div class='pef' style='max-height:580px;overflow:scroll'>
  <div class='blfhead'>...Your Analytics</div><br>";
  
  #TOTAL views
$privatelocate = mysqli_query($conne,"SELECT COUNT(sc) AS sc FROM store WHERE sqy = 'analytics' ");

   $gotprivatecount = 0;
   while($rowprievent = mysqli_fetch_array($privatelocate))
 {
   $gotprivatecount = 1;
   $totalprivatecount = $rowprievent['sc'];
 echo "
        <div class='analybox'>
<h class='analytxt'>$totalprivatecount</h><br>
<h class='petd'>total event log</h><br><br>
</div><br>";
}
  
  //from where it is users plan or others invite or plan. we dont show users invite cus we have that in analytics page already
$result = mysqli_query($conne,"SELECT * FROM store WHERE sqy = 'analytics' ORDER BY cid LIMIT 95"); 
 $founds = 0;

   while($row = mysqli_fetch_array($result))
 {$founds = 1;
  

$r = $row['refs'];
$anaresult = $row['searchquery'];

  echo "

 <h class='miniss'>$anaresult</h><div class='jal'></div>





";

}
  echo"
   <br><button class='copele' onclick='print()'><i class='material-icons' style='vertical-align: bottom;font-size:18px;'>print</i> Print Page</button><br><br>
  <div class='blfheadalt'></div>

</div>";
  
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