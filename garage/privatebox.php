<?php
if($privateBoxError > ""){
  $errorBox = "<div id='oalert'>$privateBoxError</div><br>";
}
else{
  $errorBox = "";
}
echo"<br>
<div style='width:100%;text-align:center'>
<div class='pef'>
<div class='blfhead'>This content is private</div><br>
$errorBox
<img src='https://vrixe.com/images/essentials/secure.svg' class='everybodyimg'>
  <br>
 
  <form method='post' action='$sendformto' autocomplete='off'>
  <h class='blf'>Access code required<br></h><br>
  <input type='text' style='display:none' name='refs' value='$privateref'>
  <input type='password' name='authkey' placeholder='... ... ....' required id='cindy' autocomplete='nope'><button class='therecins' type='button' id='recindy' title='Show Key'>show</button><button class='therecins' type='button' id='recindo' title='Hide Key'>hide</button><br>
<h class='petd' style='width: 50%;text-align: left;float: left;margin-left:23px;'>input access code</h><br><br><br><br>
<button class='copele'><i class='material-icons' style='font-size:17px;vertical-align:sub'>lock_open</i> Verify Access</button><br><br><br>
  <h class='miniss'>The content you're trying to view is Private and requires an access code to be viewed. If you do not have one, please contact @$pposter<br>
  <a href='/aboutvrixe.php#lmape'>Want to know more about Vrixe? <i class='material-icons' style='font-size:14px;vertical-align:middle'>arrow_forward</i></a></h>
  </form>
 <br><br>

    <div class='blfheadalt'></div>
  </div>
  </div>
";
  ?>