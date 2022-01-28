<?php
    $num=0;
    $x=1;
    for($a=1;$a<=5;$a++){
        for($b=1;$b<=$a;$b++){
            $num += $x;
            echo "$num &nbsp;";
        }
        echo "<br>";
    }
?>