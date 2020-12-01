<?php require("garage/passport.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
if ($cookie > ""){
  echo "<title>Edit - $fullname | Vrixe</title>";
}
else {
   echo "<title>No User Found</title>";#redirect would have handled this
}
?>
<link rel="manifest" href="manifest.json">
<meta name="description" content="Edit your Vrixe account.">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("garage/resources.php"); ?>  
 <style> body{ background-color: #f5f5f5; } </style>
</head>
<body>

<div id="gtr" onclick="closecloseb()"></div>

<?php require("garage/deskhead.php"); ?>
<?php require("garage/desksearch.php");  ?>
<?php require("garage/deskpop.php"); ?>

<?php  $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>Edit Profile</button>";
  require("garage/mobilehead.php"); ?>

<?php require("garage/subhead.php");?>

<?php require("garage/thesearch.php"); ?>

<br>
<?php

$start = mysqli_query($conne,"SELECT * FROM profiles WHERE cookie = '$cookie' LIMIT 1"); 
 $confirm = 0;
   while($gotuser = mysqli_fetch_array($start))
 {$confirm = 1;

echo "<div class='pagecen'>
<div class='profilebox'>

<div class='pef'>
<div class='blfhead'>Edit Profile</div><br>

<form enctype='multipart/form-data' style='display:block' method='post' action='me.php'>
<img accept='image/*' src='$userheadimg' id='esi' class='profilephoto' alt='$fullname'>
<input type='text' style='display:none;' name='imgname' id='ii'><br>

<div id='imageadd'>
<button id='uit' type='button'>Upload new image</button>
<input onchange='editimgename()' type='file' type='button' id='imgfree' name='editimage' accept='image/*'>
<label for='imgfree'><i class='material-icons' style='vertical-align:sub'>add_photo_alternate</i></label>
  </div>
  <br><br>

<input maxlength='25' type='text' value='$fullname' class='privinput' name='editfullname' placeholder='... .... ...' required><br>
<h class='petd'>account name</h><br><br>

<textarea type='text' style='height:80px' id='source' oninput='countkeys()' maxlength='160' class='privinput' name='editbio' placeholder='What I do...'>$userBio</textarea><br>
<h class='petd' id='plicate'>Tell people your best skills.</h><br><br>


<input maxlength='27' type='text' value='$userLocation' class='privinput' name='editlocation' placeholder='... .... ...'><br>
<h class='petd'>Location</h><br><br>


<input type='text' value='$link' class='privinput' name='editlink' placeholder='example.com'><br>
<h class='petd'>Link</h><br><br>

<input type='text' value='$checkpasswordsecurity' class='privinput' name='editpassword' placeholder='********' id='passin' required><br>
<h class='petd'>Password</h><br>
<input type='text' value='available' name='update' class='rates'>

<div id='peff'>

<button class='copele' title='Update Changes'><i class='material-icons' style='font-size:17px;vertical-align:sub;'>done_all</i> Save Changes</button>

<a href='account/settings'><button type='button' class='triocontrol'><i class='material-icons' style='font-size:17px;vertical-align:sub;'>tune</i> Settings</button></a>

</div>
</form><br>
<h class='petd'>want more information on cookies, terms or privacy?<br><a href='app/terms.html'>Learn more</a></h><br><br>
<button class='control' id='deactshower' onclick='showdeact()'><i class='material-icons' style='vertical-align:sub;font-size:17px'>person_add_disabled</i> Delete Account</button>
<div id='deact'>
<div id='oalert'>Please confirm your account's email.<br> Don't worry, we'll delete everything<br> Events, Profile, Cookies and Programs<br> ...this action is also not reversible.</div><br>
<form action='account/deactivate_account.php' method='post' style='display:block'>
<input type='text' name='rate' class='rates'>
<input type='email' class='privinput' name='deactemail' required placeholder='... .... ...'><br>
<h class='petd'>email</h><br><br>
<button class='copele'><i class='material-icons' style='vertical-align:sub;font-size:17px'>person_add_disabled</i> Delete Account</button>
</form>
</div><br><br>

<div class='blfheadalt'></div>
</div>


<br><br>
</div>
</div>
";

}#end of while

  
require("garage/networkStatus.php"); ?>

</body>
</html>