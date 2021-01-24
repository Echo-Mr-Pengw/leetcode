<?php

/**
 * 27.移除元素
 * @Author: pengwei
 * @Date:   2021-01-24 23:29:10
 * @Last Modified by:   pengwei
 */


// 方法一：暴力法
//  function removeElement(&$nums, $val) 
//  {
//  	$i = 0;
//     foreach ($nums as $k => $v) {
//         if ($v == $val) {
//             unset($nums[$k]);
//         } else {
//         	++$i;
//         }
//     }
//     return $i;
// }

// 方法2: 双指针
function removeElement(&$nums, $val)
{
	$i   = 0;
	$len = count($nums);

	for ($j = 0; $j < $len; $j++) {
		if ($nums[$j] != $val) {
			$nums[$i] = $nums[$j]; // “覆盖元素”
			++$i;
		}
	}
	
	return $i;
}

// 测试
$nums = [1,2,3,4,2];
$val = 2;
var_dump(removeElement($nums, $val));