<?php
/**
 * 26. 删除有序数组中的重复项
 * @Author   pengwei
 * @DateTime 2021-04-09
 * @param    [type]     &$nums [description]
 * @return   [type]            [description]
 */
function removeDuplicates(&$nums) {
	
	sort($nums);

	$l = count($nums);
	$k = $l;
	for ($i = 0; $i < $l; $i++) {
		$j = $i + 1;
		if ($nums[$i] == $nums[$j] && $j < $l) {
			unset($nums[$i]);
			--$k;
		}
	}
	return $k;
}

$nums = [1,1, 1,2,2,3,3,4,3, 1];
removeDuplicates($nums);
var_dump($nums);
