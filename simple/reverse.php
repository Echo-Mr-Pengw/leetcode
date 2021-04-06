<?php
function reverse($x) {

    if ($x == 0) {
        return 0;
    }
    
    $flag = false;
    if ($x < 0) {
        $flag = true;
        $x = abs($x);
    }

    $tmp = '';
    $x   = strval($x);
    $len = strlen($x) -1;

    for ($i = $len; $i >= 0; $i--) {
        $tmp .= $x[$i];
    }

    $x = intval($tmp);
    $pow = pow(2, 31);

    if (($flag && $x > $pow) || (!$flag && ($x > ($pow - 1)))) {
        return 0;
    }

    if ($flag) {
        $x = $x * -1;
    }
    return $x;
}

var_dump(reverse(-123));
