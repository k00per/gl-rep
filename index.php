<?php

$sys_def_page="index";
$page1=$_GET['page']; 
if (!isset($page1) || ($page1=="") || (!file_exists ("pagcon/$page1.html")))
  {$page1=$sys_def_page;}

$filename = "pagcon/$page1.html";
$fd = fopen( $filename, "r" );
$content = fread( $fd, filesize( $filename ) );
fclose( $fd );
include "inc/globe.html";
?>