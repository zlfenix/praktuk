<?php
/**
 * Created by PhpStorm.
 * User: semen_000
 * Date: 2/27/2017
 * Time: 8:33 PM
 */

$a = array(
    0 => 7,
    1 => 1,
    2 => 4,
    3 => 2,
    4 => 5
);

for ($i = 0; $i<sizeof($a); $i++){
    for ($j = 0; $j< sizeof($a); $j++){
        if ($a[$i] < $a[$j]){
            $x = $a[$i];
            $a[$i] = $a[$j];
            $a[$j] = $x;
        }

    }
}

print_r($a);