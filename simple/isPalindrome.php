<?php

/**
 * 9. 回文数
 * 判断一个整数是否是回文数。回文数是指正序（从左向右）和倒序（从右向左）读都是一样的整数。
 * @Author: pengwei
 * @Date:   2021-01-25 23:04:39
 * @Last Modified by:   pengwei
 */


function isPalindrome(string $x)
{
    $int = intval($x);
	if ($int < 0) {
		return false;
	}

    if ($int === 0 || $int < 10) {
        return true;
    }

	$endPtr = strlen($x);
    $midPtr = ceil($endPtr / 2);

    // 前后取值比较
	for ($i = 0; $i < $endPtr; $i++) {
	    if ($x{$i} != $x{$endPtr - $i - 1}) {
	        return false;
        }
        // 对折比较完，则退出
	    if ($midPtr == $i + 1) {
	        break;
        }
    }
    return true;
}
$x = '121';
var_dump(isPalindrome($x));