<?php
// Do make a visitors.html file and set permission to 0777

$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$dateTime = date('Y/m/d G:i:s');
$file = "visitors.html";
$file = fopen($file, "a");
$data = "<pre><b>User IP</b>: $ip <b> Browser</b>: $browser <br>on Time : $dateTime <br></pre>";
fwrite($file, $data);
fclose($file);
echo "<h1>FILE NOT FOUND</h1>";
// Enviarlo a otro lado
ob_start(); // ensures anything dumped out will be caught

// do stuff here
$url = 'https://www.memecreator.org/static/images/memes/3975375.jpg'; // this can be set based on whatever
// clear out the output buffer
while (ob_get_status()) 
{
    ob_end_clean();
}
// no redirect
header( "Location: $url" )
?>
