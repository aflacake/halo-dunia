<?php
#buka file
 fopen=
   $filename("a", "x+") or die("membatalkan");
 echo fwrite($filename);

#tutup ile
fclose($filename);
?>
