<?php

/**
 * 有序数组反转
 * @Author: pengwei
 * @Date:   2021-05-21 23:32:53
 * @Last Modified by:   pengwei
 */

function arrayReverse(array $data)
{
	if (empty($data)) return false;

	$i = 0;
    $j = count($data) - 1;
    while ($i < $j) {
        $tmp = $data[$i];
        $data[$i] = $data[$j];
        $data[$j] = $tmp;
        ++$i;
        --$j;
       } 
    return $data;
}

// $data = [1,2,3,4,5];
// var_dump(arrayReverse($data));
