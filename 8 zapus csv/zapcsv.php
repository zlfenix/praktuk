<?php
/**
 * Created by PhpStorm.
 * User: semen_000
 * Date: 2/23/2017
 * Time: 3:19 PM
 */

$a1 = array(
    'name' => 'some name',
    'age' => 5,
    'city' => 'some town'
);

$a2 = array(
    'age' => 6,
    'country' => 'small country',
    'city' => 'mego city',
    'street' => 'cute ave.'
);

$fp = fopen('file.csv', 'w');

fputcsv($fp, $a1);
fputcsv($fp, $a2);
fclose($fp);