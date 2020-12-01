<?php
if($username > ""){
	echo"
<div id='subhead'>

<a href='/me' title='PWA'><button aria-label='Profile' class='subhitems' id='Profile' $mecolor><i class='material-icons'>
person_outline
</i></button></a><a href='/invite' title='Create'><button aria-label='Create' class='subhitems' id='Create' $invitecolor><i class='material-icons'>
add_circle_outline
</i></button></a><a href='/picks' title='Picks'><button aria-label='Picks' class='subhitems' id='Picks' $planscolor><i class='material-icons'>
favorite_border
</i></button></a><a href='/account/notifications' title='Notifications'><button aria-label='Notifications' class='subhitems' id='Notifications' $notifcolor><i class='material-icons'>
notifications_none
</i></button></a>

</div>";
}
else{
	echo"
	<div id='subhead'>
<div style='float:left;width:55%;margin-left:5%;text-align:left;'>
<h class='bottoms'>For every team event.   </h> 
 </div>

 <div style='float:rightwidth:55%;margin-right:5%;text-align:right;'>
 <a href='/aboutvrixe'><h class='bottoms'>Features</h></a>

<h class='bottoms'> | </h> 


<a href='/index?q=profile_required#signup'><h class='bottoms'><b>Sign up</b></h></a>
</div>
</div>
";
}
?>