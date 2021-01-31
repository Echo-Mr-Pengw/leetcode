<?php
/**
 * 9.数字是否为回文数
 * @Author pengw
 * @DateTime 2020-08-15
 */

function isPailndRome(int $x) : bool
{
	// 小于0的不是回文数
	if ($x < 0) {
		return false;
	}

	// 将数字转变成字符串数字
	$str = strval($x);
	$len = strlen($str);
	$mid = floor($len / 2);

	// 前后数字进行比较
	$i = 0;
	while ($i < $mid) {
		// 如果前后数字不相等，则不是回文数
		if ($str{$i} != $str{$len - $i - 1}) {
			return false;
		}
		++$i;
	}
	return true;
}

// 测试
$x = 10;
var_dump(isPailndRome($x));