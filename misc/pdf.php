<?php
$file=$_GET["filename"].".pdf";
header('Content-disposition: attachment; filename='.$file);
header('Content-type: application/pdf');
readfile('files/'.$file);
?>