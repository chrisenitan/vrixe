<?php
if($pagename == ""){
	$pagename = "<button class='hbut' id='mbut' aria-label='vrixe'>V R I X E</button>";
}
echo"
<div id='head'>
<a href='#'><span class='notranslate'>$pagename</span></a>

<button onclick='pagemenu()' aria-label='menu' class='textbut' id='abut'><i class='material-icons'>more_vert</i></button>

<button aria-label='search' title='search event' onclick='search()' class='hbut' id='sbut'><i class='material-icons'>search</i></button>

</div>
";
?>
