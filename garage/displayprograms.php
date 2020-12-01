<?php
echo "
<div id='program'>
<div id='progmenu'>$ee</div>
<div id='prognavbar'>Program starts
$day at $time
</div>
";

echo "<div id='itemboxesalt'></div> <div id='itemboxes'>";
if ($pa > ""){
  echo "<div class='itemfloters'>
  <i class='material-icons' style='color:#21d88c;font-size:16px;vertical-align:middle'>timelapse</i>  <h class='programtime'>$pa</h><br>
  <div class='progitem'>
  $pat<br></div>

  </div>";
}
else { echo "";}

if ($pb > ""){
  echo "<div class='itemfloters'>
   <i class='material-icons' style='color:#21d88c;font-size:16px;vertical-align:middle'>timelapse</i>  <h class='programtime'>$pb</h><br>
  <div class='progitem'>
  $pbt<br></div>

  </div>";
}
else { echo "";}

if ($pc > ""){
  echo "<div class='itemfloters'>
   <i class='material-icons' style='color:#21d88c;font-size:16px;vertical-align:middle'>timelapse</i>  <h class='programtime'>$pc</h><br>
  <div class='progitem'>
  $pct<br></div>

  </div>";
}
else { echo "";}

if ($pd > ""){
  echo "<div class='itemfloters'>
   <i class='material-icons' style='color:#21d88c;font-size:16px;vertical-align:middle'>timelapse</i>  <h class='programtime'>$pd</h><br>
  <div class='progitem'>
  $pdt<br></div>

  </div>";
}
else { echo "";}

if ($pe > ""){
  echo "<div class='itemfloters'>
   <i class='material-icons' style='color:#21d88c;font-size:16px;vertical-align:middle'>timelapse</i>  <h class='programtime'>$pe</h><br>
  <div class='progitem'>
  $pet<br></div>

  </div>";
}
else { echo "";}

if ($pf > ""){
  echo "<div class='itemfloters'>
   <i class='material-icons' style='color:#21d88c;font-size:16px;vertical-align:middle'>timelapse</i>  <h class='programtime'>$pf</h><br>
  <div class='progitem'>
  $pft<br></div>

  </div>";
}
else { echo "";}

if ($pg > ""){
  echo "<div class='itemfloters'>
   <i class='material-icons' style='color:#21d88c;font-size:16px;vertical-align:middle'>timelapse</i>  <h class='programtime'>$pg</h><br>
  <div class='progitem'>
  $pgt<br></div>

  </div>";
}
else { echo "";}

if ($ph > ""){
  echo "<div class='itemfloters'>
   <i class='material-icons' style='color:#21d88c;font-size:16px;vertical-align:middle'>timelapse</i>  <h class='programtime'>$ph</h><br>
  <div class='progitem'>
  $pht<br></div>

  </div>";
}
else { echo "";}

if ($pi > ""){
  echo "<div class='itemfloters'>
   <i class='material-icons' style='color:#21d88c;font-size:16px;vertical-align:middle'>timelapse</i>  <h class='programtime'>$pi</h><br>
  <div class='progitem'>
  $pit<br></div>

  </div>";
}
else { echo "";}

if ($pj > ""){
  echo "<div class='itemfloters'>
   <i class='material-icons' style='color:#21d88c;font-size:16px;vertical-align:middle'>timelapse</i>  <h class='programtime'>$pj</h><br>
  <div class='progitem'>
  $pjt<br></div>

  </div>";
}
else { echo "";}

if ($pk > ""){
  echo "<div class='itemfloters'>
  <i class='material-icons' style='color:#21d88c;font-size:16px;vertical-align:middle'>timelapse</i>  <h class='programtime'>$pk</h><br>
  <div class='progitem'>
  $pkt<br></div>

  </div>";
}
else { echo "";}

if ($pl > ""){
  echo "<div class='itemfloters'>
   <i class='material-icons' style='color:#21d88c;font-size:16px;vertical-align:middle'>timelapse</i>  <h class='programtime'>$pl</h><br>
  <div class='progitem'>
  $plt<br></div>

  </div>";
}
else { echo "";}

echo "</div><button id='actbtn' onclick='closeclose()'>CLOSE</button>"; #end of item box
echo "<div id='progdis'></div></div>";


?>