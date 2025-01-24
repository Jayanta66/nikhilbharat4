<?php
$myfile = fopen("feedback.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("feedback.txt"));
fclose($myfile);
?>