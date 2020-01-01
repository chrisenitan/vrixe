<?php
//invoke button
echo"<div class='g-signin2' data-onsuccess='onSignIn' id='signin' style='display:none'></div><br>";


//get user data
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

  
  
?>