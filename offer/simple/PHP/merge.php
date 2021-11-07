<?php
/**
 *
 * 你两个按 非递减顺序 排列的整数数组 nums1 和 nums2，另有两个整数 m 和 n ，分别表示 nums1 和 nums2 中的元素数目。
 * 请你 合并 nums2 到 nums1 中，使合并后的数组同样按 非递减顺序 排列。
 */

function merge (&$nums1, $m, $nums2, $n)
{
    while ($n > 0) {
        if ($nums1[$m - 1] <= $nums2[$n - 1]) {
            $nums1[$m + $n - 1] = $nums2[$n - 1];
            $n--;
        } else {
            $nums1[$m + $n - 1] = $nums1[$m - 1];
            $m--;
        }
    }
}

$nums1 = [1, 2, 8, 0, 0, 0];
$nums2 = [3, 6, 9];
merge($nums1, 3, $nums2, 3);
var_dump($nums1);
