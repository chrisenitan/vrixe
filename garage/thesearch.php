<?php 
$dam = date("F"); //mobile search

if($userheadimg == ""){
  $userheadimg = "https://vrixe.com/images/profiles/user.png";
}
  ?>
<div id="searchboxes"><br>
<form style="width:100%" action="/search.php" method="post" autocomplete='off'>
<?php echo "<input type='search' id='hinput' name='refs' required placeholder='Search for profiles with @' autocomplete='off' oninput='checkforuser(this.id)'><button aria-label='search' id='subsearch'><i class='material-icons' style='vertical-align: bottom;'>search</i></button>

<div id='searchatprofile'>

</div>



"; ?>

</form><br>

</div>







<div id="menuboxes">
  <?php
echo"<a href='/me' aria-label='my_profile'><img id='mbbimg' src='$userheadimg' alt='avatar'></a>";
?>
<a href="/account/settings.php"><button class="mbb"><i class='material-icons' style='vertical-align:bottom;font-size:21px'>settings</i> &nbsp Settings</button></a>
    
  <a href="/help/feedbacks"><button class="mbb"><i class='material-icons' style='vertical-align:bottom;font-size:21px'>question_answer</i> &nbsp Feedbacks</button></a>
 
  <?php
  if($username > ""){
    echo"
    <a href='/account/profile_analytics'><button class='mbb'><i class='material-icons' style='vertical-align:bottom;font-size:21px'>pie_chart</i> &nbsp Profile Analytics</button></a>

<a href='/account/contacts'><button class='mbb'><i class='material-icons' style='vertical-align:bottom;font-size:21px'>perm_contact_calendar</i> &nbsp Contacts</button></a>

<form action='/index.php' method='post' style='width:100%;'>
<input type='text' value='signout' name='signout' class='rates'>
<button aria-label='sign out' title='Sign Out' class='mbb'><i class='material-icons' style='vertical-align:bottom;font-size:21px'>exit_to_app</i> &nbsp Sign Out</button>
</form>";
  }
  else{
    echo"
    <a href='/app/pwa.html'><button class='mbb'><i class='material-icons' style='vertical-align:bottom;font-size:21px'>add_to_home_screen</i> &nbsp Install Web App</button></a>

<a href='/aboutvrixe'><button class='mbb'><i class='material-icons' style='vertical-align:bottom;font-size:21px'>view_carousel</i> &nbsp Product Tour</button></a>

<a href='/index?q=login'><button aria-label='log in' title='Log In' class='mbb'><i class='material-icons' style='vertical-align:bottom;font-size:21px'>person</i> &nbsp Log In</button></a>
    ";
  }

  ?>

  
<a href="/app/allmenu.html"><button class="mbb"><i class='material-icons' style='vertical-align:bottom;font-size:21px'>more_horiz</i> &nbsp More</button></a>

<button onclick="revpagemenu()" class="mbb" style="color:#6464fd;font-weight:bold;text-align:right">Close</button>


</div>



