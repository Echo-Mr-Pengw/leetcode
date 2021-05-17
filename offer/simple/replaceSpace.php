<?php

/**
 * 剑指 Offer 05. 替换空格
 * @Author: pengwei
 * @Date:   2021-05-17 23:28:29
 * @Last Modified by:   pengwei
 */

//  方法一。时间复杂度和空间复杂度 O(N)
function replaceSpace($s) {

   $data = '';
   $len  = strlen($s);

   for ($i = 0; $i < $len; $i++) {
       if ($s[$i] == ' ') {
           $data .= "%20";
       } else {
           $data .= $s[$i];
       }
   }
   return $data;
}