<?php

function pattern($n){
    for($a=0;$a<$n;$a++){
        for($b=0;$b<=$a;$b++){
            echo "* &nbsp;";
        }
        echo "<br>";
    }
    for($a=4;$a>=0;$a--){
        for($b=0;$b<=$a;$b++){
            echo "* &nbsp;";
        }
        echo "<br>";
    }
}
pattern(5);
?>