<?php

if ($programcheck > ""){

$pons = mysqli_query($conne,"SELECT * FROM programs WHERE refs = '$code' LIMIT 1"); 
$foundprogram = 0;
  while($rowt = mysqli_fetch_array($pons)){
$foundprogram = 1;
$pa = $rowt['pa'];
 $pat = $rowt['pat'];
 $pb = $rowt['pb'];
 $pbt = $rowt['pbt'];
 $pc = $rowt['pc'];
 $pct = $rowt['pct'];
 $pd = $rowt['pd'];
 $pdt = $rowt['pdt'];
 $pe = $rowt['pe'];
 $pet = $rowt['pet'];
 $pf = $rowt['pf'];
 $pft = $rowt['pft'];
 $pg = $rowt['pg'];
 $pgt = $rowt['pgt'];
 $ph = $rowt['ph'];
 $pht = $rowt['pht'];
 $pi = $rowt['pi'];
 $pit = $rowt['pit'];
 $pj = $rowt['pj'];
 $pjt = $rowt['pjt'];
 $pk = $rowt['pk'];
 $pkt = $rowt['pkt'];
 $pl = $rowt['pl'];
 $plt = $rowt['plt'];



echo"

<div id='createprogram' class='pef'>
 <div class='blfhead'>Agenda</div><br>

<h class='petd' style='color: #379e65;'>...add up to 12 program items</h><br><br>

<button class='sobox' type='button' onclick='addoninput(ones)' style='border-top-left-radius: 50px;border-bottom-left-radius: 50px;'><h>1</h></button>

<button class='sobox' type='button' onclick='addoninput(two)'><h>2</h></button>

<button class='sobox' type='button' onclick='addoninput(three)'><h>3</h></button>

<button class='sobox' type='button' onclick='addoninput(four)'><h>4</h></button>

<button class='sobox' type='button' onclick='addoninput(five)'><h>5</h></button>

<button class='sobox' type='button' onclick='addoninput(six)'><h>6</h></button>

<button class='sobox' type='button' onclick='addoninput(seven)'><h>7</h></button>

<button class='sobox' type='button' onclick='addoninput(eight)'><h>8</h></button>

<button class='sobox' type='button' onclick='addoninput(nine)'><h>9</h></button>

<button class='sobox' type='button' onclick='addoninput(ten)'><h>10</h></button>

<button class='sobox' type='button' onclick='addoninput(eleven)'><h>11</h></button>

<button class='sobox' type='button' onclick='addoninput(twleve)' style='border-top-right-radius: 50px;border-bottom-right-radius: 50px;'><h>12</h></button>


<br><br>


<div class='proginput' id='ones'>
<input value='$pa' type='time' class='so' name='pa' id='begpro'>

<button class='po'>1</button>

<input type='text' value='$pat' class='privinput' name='pat' placeholder='Opening remarks from...'></div>


<div class='proginput' id='two'>
<input value='$pb' type='time' class='so' name='pb'>

<button class='po'>2</button>

<input type='text' value='$pbt' class='privinput' name='pbt' placeholder='... .... ...'></div>


<div class='proginput' id='three'>
<input value='$pc' type='time' class='so' name='pc'>

<button class='po'>3</button>

<input type='text' value='$pct' class='privinput' name='pct' placeholder='... .... ...'></div>


<div class='proginput' id='four'>
<input value='$pd' type='time' class='so' name='pd'>

<button class='po'>4</button>

<input type='text' value='$pdt' class='privinput' name='pdt' placeholder='... .... ...'></div>


<div class='proginput' id='five'>
<input value='$pe' type='time' class='so' name='pe'>

<button class='po'>5</button>

<input type='text' value='$pet' class='privinput' name='pet' placeholder='... .... ...'></div>


<div class='proginput' id='six'>
<input value='$pf' type='time' class='so' name='pf'>

<button class='po'>6</button>

<input type='text' value='$pft' class='privinput' name='pft' placeholder='... .... ...'></div>


<div class='proginput' id='seven'>
<input value='$pg' type='time' class='so' name='pg'>

<button class='po'>7</button>

<input type='text' value='$pgt' class='privinput' name='pgt' placeholder='... .... ...'></div>


<div class='proginput' id='eight'>
<input value='$ph' type='time' class='so' name='ph'>

<button class='po'>8</button>

<input type='text' value='$pht' class='privinput' name='pht' placeholder='... .... ...'></div>


<div class='proginput' id='nine'>
<input value='$pi' type='time' class='so' name='pi'>

<button class='po'>9</button>

<input type='text' value='$pit' class='privinput' name='pit' placeholder='... .... ...'></div>


<div class='proginput' id='ten'>
<input value='$pj' type='time' class='so' name='pj'>

<button class='po'>10</button>

<input type='text' value='$pjt' class='privinput' name='pjt' placeholder='... .... ...'></div>


<div class='proginput' id='eleven'>
<input value='$pk' type='time' class='so' name='pk'>

<button class='po'>11</button>

<input type='text' value='$pkt' class='privinput' name='pkt' placeholder='... .... ...'></div>


<div class='proginput' id='twleve'>
<input value='$pl' type='time' class='so' name='pl'>

<button class='po'>12</button>

<input type='text' value='$plt' class='privinput' name='plt' placeholder='... .... ...'></div><br><br>


<div class='blfheadalt'></div>
</div>

";

}}

else{echo "

<div id='createprogram' class='pef'>
 <div class='blfhead'>Agenda</div><br>

<h class='petd' style='color: #379e65;'>...add up to 12 program items</h><br><br>

<button class='sobox' type='button' onclick='addoninput(ones)' style='border-top-left-radius: 50px;border-bottom-left-radius: 50px;'><h>1</h></button>

<button class='sobox' type='button' onclick='addoninput(two)'><h>2</h></button>

<button class='sobox' type='button' onclick='addoninput(three)'><h>3</h></button>

<button class='sobox' type='button' onclick='addoninput(four)'><h>4</h></button>

<button class='sobox' type='button' onclick='addoninput(five)'><h>5</h></button>

<button class='sobox' type='button' onclick='addoninput(six)'><h>6</h></button>

<button class='sobox' type='button' onclick='addoninput(seven)'><h>7</h></button>

<button class='sobox' type='button' onclick='addoninput(eight)'><h>8</h></button>

<button class='sobox' type='button' onclick='addoninput(nine)'><h>9</h></button>

<button class='sobox' type='button' onclick='addoninput(ten)'><h>10</h></button>

<button class='sobox' type='button' onclick='addoninput(eleven)'><h>11</h></button>

<button class='sobox' type='button' onclick='addoninput(twleve)' style='border-top-right-radius: 50px;border-bottom-right-radius: 50px;'><h>12</h></button>


<br><br>


<div class='proginput' id='ones'>
<input type='time' class='so' name='pa' id='begpro' value='12:00:00'>

<button class='po'>1</button>

<input type='text' class='privinput' name='pat' placeholder='Opening remarks from...'></div>


<div class='proginput' id='two'>
<input type='time' class='so' name='pb' value='13:00:00'>

<button class='po'>2</button>

<input type='text' class='privinput' name='pbt' placeholder='Meeting of...'></div>


<div class='proginput' id='three'>
<input type='time' class='so' name='pc' value='13:30:00'>

<button class='po'>3</button>

<input type='text' class='privinput' name='pct' placeholder='Introduction of...'></div>


<div class='proginput' id='four'>
<input type='time' class='so' name='pd' value='14:00:00'>

<button class='po'>4</button>

<input type='text' class='privinput' name='pdt' placeholder='... .... ...'></div>


<div class='proginput' id='five'>
<input type='time' class='so' name='pe' value='15:00:00'>

<button class='po'>5</button>

<input type='text' class='privinput' name='pet' placeholder='... .... ...'></div>


<div class='proginput' id='six'>
<input type='time' class='so' name='pf' value='16:00:00'>

<button class='po'>6</button>

<input type='text' class='privinput' name='pft' placeholder='... .... ...'></div>


<div class='proginput' id='seven'>
<input type='time' class='so' name='pg' value='17:00:00'>

<button class='po'>7</button>

<input type='text' class='privinput' name='pgt' placeholder='... .... ...'></div>


<div class='proginput' id='eight'>
<input type='time' class='so' name='ph' value='18:00:00'>

<button class='po'>8</button>

<input type='text' class='privinput' name='pht' placeholder='... .... ...'></div>


<div class='proginput' id='nine'>
<input type='time' class='so' name='pi' value='19:00:00'>

<button class='po'>9</button>

<input type='text' class='privinput' name='pit' placeholder='... .... ...'></div>


<div class='proginput' id='ten'>
<input type='time' class='so' name='pj' value='20:00:00'>

<button class='po'>10</button>

<input type='text' class='privinput' name='pjt' placeholder='... .... ...'></div>


<div class='proginput' id='eleven'>
<input type='time' class='so' name='pk' value='20:30:00'>

<button class='po'>11</button>

<input type='text' class='privinput' name='pkt' placeholder='... .... ...'></div>


<div class='proginput' id='twleve'>
<input  type='time' class='so' name='pl' value='21:00:00'>

<button class='po'>12</button>

<input type='text' class='privinput' name='plt' placeholder='... .... ...'></div><br><br>


<div class='blfheadalt'></div>
</div>


 ";}



?>