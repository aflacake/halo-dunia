<?php
#buka file
 fopen=
   $filename("r", "a", "x+") or die("membatalkan");
 echo fwrite($filename);

#tutup ile
fclose($filename);
?>
