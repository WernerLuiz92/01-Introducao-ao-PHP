<?php
    for ($i = 1; $i <= 15; $i++) {
        if($i == 13){
            continue;
        }

        echo "#$i: ".PHP_EOL;
    }

    for ($i = 1; $i <= 15; $i++) {
        if($i == 13){
            break;
        }

        echo "#$i: ".PHP_EOL;
    }