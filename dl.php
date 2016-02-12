<?php $filename = $_GET['file'];
$filepath = "./";
$url = $filepath.$filename;
header("Content-disposition: attachment; filename=".$filename."");
header("Content-type: application/octet-stream");
readfile("".$url."");?>