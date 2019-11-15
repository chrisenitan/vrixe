<div id="deskhead">
<form action="/search.php" method="post" style="width:50%;margin-left:1%">
<input onclick="desksearch()" type="search" id="deser" name="refs" required placeholder=" Search Vrixe" autocomplete="off" title="Search Vrixe" oninput='checkforuser(this.id)'><span style="float:right;width:16%"><button aria-label="show search" onclick="desksearch()" id="dhss" type="button"><i class='material-icons' style='font-size:14px;vertical-align:middle'>arrow_downward</i></button><button aria-label="hide search" onclick="desksearchs()" id="sh" type="button"><i class='material-icons' style='font-size:14px;vertical-align:middle'>arrow_upward</i></button><button aria-label="search" id="dhsb"><i class='material-icons' style='font-size:14px;vertical-align:middle'>search</i></button></span>
</form>

<div id="floare">
	<?php
	if ($fullname != "" and $fullname != "relog"){
echo "<a href='/me' class='disl' title='my account'>@$username &nbsp &nbsp </a>";
}
else if ($fullname != "" and $fullname == "relog"){
	echo "<a href='/me' class='disl' title='Please login again' style='color:crimson'><i class='material-icons' style='font-size:14px;'>person</i> Verify Account &nbsp &nbsp </a>";
}
else{
	echo "<a href='/index' class='disl' title='Log into your account'><i class='material-icons' style='font-size:14px;'>person</i> Log In</a> <span style='color:black'>|</span> <a href='/index' class='disl' title='Sign Up for a Vrixe Account'>Sign Up &nbsp &nbsp </a>";
}
?>
<a href="/picks" class="disl" title="Plans you are working on"> <i class='material-icons' style='font-size:14px'>star</i> Picks &nbsp &nbsp</a>

<a href="/invite" class="disl" title="Create">Create &nbsp &nbsp</a>

<a href="/help/faq" class="disl" title="FAQ">FAQ &nbsp &nbsp</a>

<a href="/help/feedbacks" class="disl" title="Feedbacks">Feedbacks &nbsp &nbsp &nbsp</a>&nbsp &nbsp &nbsp 

<h id="dboy" onclick="deskpop()"><i class='material-icons' style='font-size:14px;vertical-align:middle'>arrow_downward</i> </h>

<h id="uboy" onclick="deskpops()"><i class='material-icons' style='font-size:14px;vertical-align:middle'>arrow_upward</i> </h>
</div>
</div>
