<?php
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

  //log user out
echo"
  <script>  
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
  </script>";

//get user data
/*
echo"
<script>
  function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
</script>
";

  */

?>