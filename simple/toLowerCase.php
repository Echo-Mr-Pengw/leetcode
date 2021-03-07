<?php

/**
 * 709. 转换成小写字母
 * @Author: pengwei
 * @Date:   2021-03-07 23:24:51
 * @Last Modified by:   pengwei
 */

function toLowerCase($str) {
	
	$len = strlen($str);
	if ($len === 0) {
		return $str;
	}

	// A-Z 65-90
	// a-z 97-122
	for ($i = 0; $i < $len; $i++) {
		$ascii = ord($str[$i]);
		if ($ascii >= 65 && $ascii <= 90) {
			$str[$i] = chr($ascii + 32);

		}
	}

	return $str;
}

$str = "Asa(&Q";
var_dump(toLowerCase($str));
