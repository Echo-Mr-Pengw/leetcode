<?php

/**
 * 剑指 Offer 21. 调整数组顺序使奇数位于偶数前面
 * @Author: pengwei
 * @Date:   2021-05-20 09:48:24
 * @Last Modified by:   pengwei
 */
function exchange(array $nums)
{
	// 方法1-暴力法
	// $oddNum  = [];
	// $evenNum = [];

	// // 通过位与运算符判断奇偶性
	// foreach ($nums as $v) {
	// 	if ($v & 1) {
	// 		$oddNum[] = $v;
	// 	} else {
	// 		$evenNum[] = $v;
	// 	}
	// }

	// // 合并
	// foreach ($evenNum as $v) {
	// 	$oddNum[] = $v;
	// }
	// return $oddNum;
	

	// 方法2-双指针法
	$left  = 0;
	$right = count($nums) - 1;

	while ($left < $right) {
		// 左边移动-为奇数
		if ($nums[$left] & 1) {
			++$left;
			continue;
		}

		// 右边移动-为偶数
		if (($nums[$right] & 1) == 0) {
			--$right;
			continue;
		}

		$tmp = $nums[$left];
		$nums[$left] = $nums[$right];
		$nums[$right] = $tmp;;
	}
	return $nums;
}