<?php
/**
 * 两个有序的数组合并成一个有序数组
 * @Author pengw
 * @DateTime 2020-08-22
 */

function arrMerge(array $arr1, array $arr2) : array
{
	// 合并后新数组
	$tmp_arr = [];

	// 数组1的长度
	$arr1_len = count($arr1);

	// 数组2的长度
	$arr2_len = count($arr2);

	// 指向数组1起始位的‘指针’
	$i = 0;
	// 指向数组2起始位的‘指针’
	$j = 0;

	// 合并
	while ($i < $arr1_len && $j < $arr2_len) {
		if ($arr1[$i] > $arr2[$j]) {
			$tmp_arr[] = $arr2[$j];
			++$j;
		} else {
			$tmp_arr[] = $arr1[$i];
			++$i;
		}
	}

	// 如果数组1中还存在未合并的数据，则依次合并到新数组中
	while ($i < $arr1_len) {
		$tmp_arr[] = $arr1[$i];
		++$i;
	}

	// 如果数组2中还存在未合并的数据，则依次合并到新数组中
	while ($j < $arr2_len) {
		$tmp_arr[] = $arr2[$j];
		++$j;
	}

	return $tmp_arr;
}

// 测试数据
$arr1 = [1, 4, 6];
$arr2 = [0, 3, 6, 7, 9];

var_dump(arrMerge($arr1, $arr2));exit;