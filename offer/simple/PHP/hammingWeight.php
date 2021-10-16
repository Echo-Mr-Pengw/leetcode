<?php

/**
 * 剑指 Offer 15. 二进制中1的个数
 * @Author: pengwei
 * @Date:   2021-05-19 00:17:13
 * @Last Modified by:   pengwei
 */

function hammingWeight($num)
{
	$res = 0;
	while ($num > 0) {
		if ($num & 1) {
			++$res;
		}
		$num = $num >> 1;
	}
	return $res;
}

var_dump(hammingWeight(00000000000000000000000010000000));
