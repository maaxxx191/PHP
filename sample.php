<?php
 for($i = 1; $i < 15; $i++) {
    if ($i == 14) {
        break;
    }
    if ($i % 2 == 0) {
        continue;
    }
    echo $i."\n";
 }
 echo "for_out"."\n";
 
?>
