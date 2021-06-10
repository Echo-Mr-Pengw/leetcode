<?php

/**
 * 面试题 17.10. 主要元素
 * @Author: pengwei
 * @Date:   2021-06-10 23:44:35
 * @Last Modified by:   pengwei
 */

function majorityElement($nums) {
    $data = [];
    $len = count($nums);

   $eval = ceil($len / 2); 
   foreach ($nums as $v) {
       if (isset($data[$v])) {
           $data[$v] += 1; 
       } else {
           $data[$v] = 1;
       }
       
       if ($data[$v] >= $eval) {
           return $v;
       }
   }
   return -1;
}