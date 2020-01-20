<?php
//do not require user account
$defaultAllowNoUser = true;
require("../garage/passport.php");
?>
<!DOCTYPE html>
<!-- handling unathorised logins, takingpost data from account_security where user enters verification b4 we block account-->
<html lang="en">
<head>
<title>Securing Your Account - Vrixe</title>
<link rel="manifest" href="/manifest.json">
<meta name="description" content="Help with account security issues.General sccount security for Vrixe users. Level 1">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("../garage/resources.php"); ?>
</head>
<body>
<div id="gtr" onclick="closecloseb()"></div>

<?php require("../garage/deskhead.php"); 
  require("../garage/desksearch.php"); 
  require("../garage/deskpop.php");
  require("../garage/mobilehead.php"); 
  require("../garage/subhead.php");
  require("../garage/thesearch.php"); ?>


<br>	
<?php 
  $reportDayAndAccountDate = date("d M Y") . " - " . mysqli_real_escape_string($conne, $_POST['accountdate']);
  $postusername = mysqli_real_escape_string($conne, $_POST['accountuser']);
  $action = mysqli_real_escape_string($conne, $_POST['reqaction']);
  $postemail = mysqli_real_escape_string($conne, $_POST['accountemail']);

if ($action == "ila"){
      $checkuser = mysqli_query($conne,"SELECT * FROM profiles WHERE email = '$postemail' LIMIT 1"); 
      $varuser = false;
         while($founduser = mysqli_fetch_array($checkuser)){ 
      $varuser= true;
      $pass = $founduser['password'];
      }
      if ($varuser == false){
        echo "<div class='pagecen'>
      <div class='pef'>

        <div class='blfhead'>We did not find you.</div>
       <br>
        <img alt='Not Secure' src='/images/essentials/bug.png' class='everybodyimg'>
        <br>
         <h class='disl'>We could not identify your account<br></h><br>
         <h class='miniss'>Please send us a mail or a feedback and let's find a unique solution for you.</h><br>

      <br><br>
      <h class='miniss'>We usually reply within 24 hours</h><br><br>
      <a href='feedbacks?ext=account_security'><button class='copele'><i class='material-icons' style='vertical-align:text-top;font-size:17px'>feedback</i> Feedback</button></a>
        <a href='mailto:contact@vrixe.com'><button class='triocontrol'><i class='material-icons' style='vertical-align:text-top;font-size:17px'>mail</i> Mail Us</button></a><br>

        <div class='blfheadalt'></div>

        </div>
        </div>";
      }
      else {
      //log the query and block the users account
        $saverecord="INSERT INTO ammo (day, name, reqaction, email)
      VALUES
      ('$reportDayAndAccountDate','$postusername','$action','$postemail')";

      //do the update
      $blockedpass = "$pass" . "blockedbyvrixe";
      $blocker = "UPDATE profiles SET password='$blockedpass' WHERE email = '$postemail' ";

        echo"
      <div class='pagecen'>
      <div class='pef'>
        <div class='blfhead'>Account secured<br></div>
       <br>
        <img alt='Account Secured' src='/images/essentials/statusok.png' class='everybodyimg'><br>
        <h class='miniss'>Now you just wait and we'll contact you.</h><br>

        <div class='disl'>
      One of us will be contacting you within 24 hours to discuss how to get your account re-authorised and protected.<br> We apologise for this temporary error and whatever it may be affecting.</div>
        <br><br>
        <h class='miniss'>More?<br>

      <i class='material-icons' style='color:#065cff;'>contact_support</i><br>
      <h class='miniss'>Try screaming at us if it makes you feel better. We deserve it at this point. <br><a href='feedbacks.php'><button class='copele'><i class='material-icons' style='vertical-align:text-top;font-size:17px'>feedback</i> Feedback</button></a></h><br><br>

        <div class='blfheadalt'></div>
        </div>
        </div>"; 
      if (!mysqli_query($conne,$saverecord) or !mysqli_query($conne,$blocker))
        {
        die('Error: ' . mysqli_error($conne));
        }
        mysqli_close($conne);
      }
}

else{
  //user isnt trying to delete.its either doing something else or is empty url loading
    echo "<div class='pagecen'>
<div class='pef'>

  <div class='blfhead'>All good here</div>
 <br>
  <img alt='Account Security' src='/images/essentials/cog.png' class='everybodyimg'>
  <br>
   <h class='disl'>This is where we look after ill accounts<br>...and the occasional candy lovers</h><br>

  <div class='yalert'>Looks like your account is all clean</div>

<br><br>
<h class='miniss'>Tried the Vrixe Progressive Web App?<br><a href='app/pwa.html'><button class='control'> Install Web App</button></a></h><br><br>

<div class='blfheadalt'></div>
  </div>
  </div>";
}
?>


<?php require("../garage/networkStatus.php"); ?>
</body>
</html>