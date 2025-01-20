<?php
 fopen=
   $filename("a", "x+") or die("membatalkan");
 echo fwrite($filename);
fclose($filename);
?>
