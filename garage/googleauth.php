
<input class='rates' id='googleauthemail'>
<?php
require("versions.php");
//call api. must be befor visa so we know which server
//if dev
if($phpurla == 'vrixe-enn'){
  echo"
<meta name='google-signin-client_id' content='550611812237-mt2280d8j767c5u4o6rqkodv36te9727.apps.googleusercontent.com'>";
}
else{
  echo"
<meta name='google-signin-client_id' content='550611812237-72tcvlonovsvuv8ok9thbfcdmjcqut1i.apps.googleusercontent.com'>";
}



echo"<script src='https://apis.google.com/js/platform.js' async defer></script>";

//invoke button
echo"<div class='g-signin2' data-onsuccess='onSignIn' id='signin' style='display:none'></div>";

//all js for google. required pages only
echo"<script type='text/javascript' defer src='/garage/scripts/googleauthSettings.js?v=$vv'></script>";


?>
