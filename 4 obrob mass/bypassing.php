<?php
/**
 * Created by PhpStorm.
 * User: semen_000
 * Date: 2/23/2017
 * Time: 2:50 PM
 */

$a1 = array('el', 'ab', 'cd');
$a2 = array('y5', 'y6', 'y7');

$res = array();
$a2 = array_reverse($a2);
for ($i = 0; $i< 3; $i++){
    $res[$i] = $a1[$i].'-'.$a2[$i];

    echo $res[$i].'<br>';
}
