<?php

/**
 * 剑指 Offer 11. 旋转数组的最小数字
 * @Author: pengwei
 * @Date:   2021-05-18 23:53:05
 * @Last Modified by:   pengwei
 */

function minArray($numbers) {
   
   $len = count($numbers);
   for ($i = 1; $i < $len; $i++) {
       if ($numbers[$i] < $numbers[$i - 1]) {
           return $numbers[$i];
       }
   }
   return $numbers[0];
}