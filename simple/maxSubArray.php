<?php
/**
 * 53. 最大子序和
 * @Author   pengwei
 * @DateTime 2021-04-12
 * @param    [type]     $nums [description]
 * @return   [type]           [description]
 */
 function maxSubArray(array $nums) {
    $ans = $nums[0];
    $sum = 0;
    $len = count($nums); 
    
    for ($i = 0; $i < $len; $i++) {
        $sum = $nums[$i] + max($sum, 0);
        $ans = max($ans, $sum);
    }
    return $ans;
}