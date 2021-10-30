<?php

/**
 * 剑指 Offer 04. 二维数组中的查找
 */
function findNumberIn2DArray($matrix, $target)
{
	if (empty($matrix)) {
		return false;
	}

	$rowNum = count($matrix);
	$cloNum = count($matrix[0]);

	$rows = $rowNum - 1;
	$cols = $cloNum - 1;

	$i = 0;
	while ($i <= $rows && $cols >= 0) {
		if ($matrix[$i][$cols] == $target) {
			return true;
		} else if ($matrix[$i][$cols] > $target) {
			$cols--;
		} else {
			$i++;
		}
	}
	return false;
}


$matrix = [
	[0, 1, 2, 3],
	[4, 5, 6, 7],
	[8, 9, 10, 11],
	[12, 13, 14, 15],
];

$target = 10;

var_dump(findNumberIn2DArray($matrix, $target));
