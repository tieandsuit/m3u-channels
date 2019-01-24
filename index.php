<?php
header("Access-Control-Allow-Origin: *");
$playlist = file_get_contents('playlist.m3u');
echo($playlist);
?>
