<?php
require("../garage/passport.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php echo "<title>Contacts | $fullname</title>"; ?>
<link rel="manifest" href="/manifest.json">
<meta name="description" content="Keep a list of your friends and team">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("../garage/resources.php");
  require("../garage/validuser.php"); ?>
</head>
<body>
<?php require("../garage/absolunia.php"); ?>
<div id="gtr" onclick="closecloseb()"></div>

<?php require("../garage/deskhead.php"); 
  require("../garage/desksearch.php");
  require("../garage/deskpop.php"); ?>

<?php $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>Contacts</button>";
  require("../garage/mobilehead.php"); ?>
<?php require("../garage/subhead.php");?>
<?php require("../garage/thesearch.php"); ?>


<br>
<div class="postcen">
<?php
if ($mycontacts > ""){
  echo"<div class='blfhead'>...select contacts to invite</div>
<form style='width:100%;' action='/invite.php' method='post'>
<input class='rates' id='user1' name='user1' required>
<input class='rates' id='user2' name='user2' required>
<input class='rates' id='user3' name='user3' required>
<input class='rates' id='user4' name='user4' required>
<input class='rates' id='user5' name='user5' required>
<input class='rates' id='user6' name='user6' required>
<div id='clist'>
<button id='invitelist' class='sil' type='button' style='width:10%'></button>
<button title='Delete list' class='sil' id='xsil' type='button' onclick='refreshtoin()'><i class='material-icons' style='font-size:17px;vertical-align:sub'>delete_sweep</i> Clear all</button>
<button title='Create invite' class='sil' id='addsil'><i class='material-icons' style='font-size:17px;vertical-align:sub'>how_to_reg</i> Invite</button>
</div>
</form>

<div id='result'></div>";
  
$de = mysqli_query($conne,"SELECT * FROM profiles WHERE $mycontacts ");

  while ($row = mysqli_fetch_array($de)){

$pushid = $row['pushid'];
$mail = $row['email'];
$user = $row['username'];
$fulluser = $row['fullname'];
$userpic = $row['picture'];
$usercid = $row['cid'];//for delete

echo "
<script>
var userid$usercid = '$usercid ';
var username$usercid = '$username';
var req$usercid = 'delete contact';
var useremail$usercid = '$mail';
var userimage$usercid = '$userpic';
var userpush$usercid = '$pushid';
</script>

<div id='id$user' class='cards' style='background: linear-gradient(45deg, #252b38 0%, #252b38 44%,rgb(43, 52, 67) 44%, rgb(43, 52, 67) 45%,rgb(43, 52, 67) 61%, rgb(43, 52, 67) 67%,#0298ad 67%, #0298ad 100%);'>
<button id='alt$user' class='cardsCornerActions' title='Delete Contact' onclick='deleteContact(iv$usercid, cu$usercid)'><i class='material-icons'>delete</i></button>


<a href='/profile/$user'><img src='$userpic' class='contactphoto'>
<b>$fulluser</b><br>
<span style='font-size:13px'>@$user</span></a><br><br>


<button class='allcopele' title='Add to Invite list' onclick='toin(\"$username\", \"$mail\", \"$userpic\", \"$pushid\");'><i class='material-icons' style='font-size:17px;vertical-align: text-top;'>person_add</i> Add to invite</button>
</div>

";
  }
}

else{
     echo "
 <div class='pef'><div class='blfhead'>...your contacts on vrixe</div><br>
 <h>Know someone you'd like here?</h><br><br><br>
 <img alt='invite' src='/images/essentials/inviteuser.png' class='everybodyimg'>
 <br><br><button class='copele' onclick='customshare();'><i class='material-icons' style='vertical-align:sub;font-size:17px'>person_add</i> Invite To Vrixe</button><br>
 <br>
 
 <div class='blfheadalt'></div>
 </div>";
  }
?>

  </div>
<br><br>

<?php require("../garage/networkStatus.php"); ?>
<br><br>
</body>
</html>