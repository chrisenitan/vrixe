<?php
//3rd party or self user auth
require("../garage/visa.php");

require("api.php");
    
header("Content-Type: application/json");
$api = new Api;
//echo $api->select($conne);

$seto = $api->select($conne);

$thearray = json_decode($seto, true);

//echo "{$thearray['user']['fullname']} is in {$thearray['user']['location']}, his account was created on {$thearray['user']['created']}";

echo $seto;


?>

