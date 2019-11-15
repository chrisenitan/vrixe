<div id="deskpop"><br>
<a href="/account/contacts" title="My Contacts"><div class="tsl"><i class='material-icons' style='vertical-align:middle'>perm_contact_calendar</i><br>
<span class="tinytsltxt">Contacts</span></div></a>
  
  <a href="/app/pwa.html" title="Progressive Web App"><div class="tsl"><i class='material-icons' style='vertical-align:middle'>laptop_chromebook</i><br>
<span class="tinytsltxt">PWA</span></div></a>

<a href="/account/profile_analytics" title="Analytics and Notificaions"><div class="tsl"><i class='material-icons' style='vertical-align:middle'>timeline</i><br>
<span class="tinytsltxt">Analytics</span></div></a>  
  
<a href="/app/allmenu.html" title="App Settings"><div class="tsl"><i class='material-icons' style='vertical-align:middle'>apps</i><br>
<span class="tinytsltxt">More</span></div></a>
  
   
  <?php
  if($username > ""){
    echo"
<form action='/index.php' method='post' style='vertical-align:top'>
<button aria-label='sign out' title='Sign Out' class='tsl'><i class='material-icons' style='vertical-align:middle'>exit_to_app</i><br><span class='tinytsltxt'>Sign out</span></button>
<input type='text' value='signout' name='signout' class='rates'>
</form>";
  }
  else{
    echo"
<a href='/index?q=login'><div aria-label='log in' title='Log In' class='tsl'><i class='material-icons' style='vertical-align:middle'>person</i><br><span class='tinytsltxt'>Log in</span></div></a>
    ";
  }

  ?>


<br>
</div>

