<?php
/**
 * 13. 罗马数字转整数
 */

function romanToInt($s) {
    $map = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
        'IV' => 4,
        'IX' => 9,
        'XL' => 40,
        'XC' => 90,
        'CD' => 400,
        'CM' => 900,
    ];

    $result = 0;
    $strLen = strlen($s);
    for ($i = 0; $i < $strLen; $i++) {
    	$tmp = $map[$s[$i].$s[$i+1]] ?? [];
    	if (!empty($tmp)) {
    		$result += $tmp;
    		++$i;
    	} else {
    		$result += $map[$i];
    	}
    }
    return $result;
}


var_dump(romanToInt('III'));