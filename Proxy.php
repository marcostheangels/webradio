<?php
header("Content-Type: text/plain");
// usa o 7.html do shoutcast
$url = "http://uk3freenew.listen2myradio.com:26173/7.html";
echo file_get_contents($url);
