<?php

$a1 = array(7, 1, 4, 2, 5);
sort($a1);
reset($a1);
while (list($key, $val) = each($a1)) {
    echo "a1[" . $key . "] = " . $val . "\n";
}

?>