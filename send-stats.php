<?php
$upday = $_GET['ud'];
$uphour = $_GET['uh'];
$upmin = $_GET['um'];

$ram = $_GET['ram'];
$ping = $_GET['ping'];
$guilds = $_GET['guilds'];
$users = $_GET['users'];
$commands = $_GET['ran'];

$uptime = $upday . "D, " . $uphour . "H, " . $upmin . "M";

$JSON->uptime = $uptime;
$JSON->ram = $ram;
$JSON->ping = $ping;
$JSON->guilds = $guilds;
$JSON->users = $users;
$JSON->commands = $commands;
$JSON->upday = $upday;
$JSON->uphour = $uphour;
$JSON->upmin = $upmin;
  

  $DATA = json_encode($JSON);
  echo $DATA;
  
  $open = fopen("stats.json","w+");
fwrite($open, $DATA);
fclose($open);
?>
