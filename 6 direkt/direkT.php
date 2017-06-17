<?php
/**
 * Created by PhpStorm.
 * User: semen_000
 * Date: 2/27/2017
 * Time: 8:14 PM
 */

$files = scandir("c://xampp/htdocs/test", 1);
foreach ($files as $value){
    $int = intval(preg_replace('/[^0-9]+/', '', $value), 10);
    if ($int > 10){
        echo $value.'<br>';
    }
}
