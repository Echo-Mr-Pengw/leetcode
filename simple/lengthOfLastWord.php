<?php
/**
 * 58. 最后一个单词的长度
 */

// 方法1-借助函数
 // function lengthOfLastWord($s)
 // {
 // 	$arr = explode(' ', trim($s));
 // 	return strlen(end($arr)) ?: 0;
 // }


 // 方法2-从后遍历
 function lengthOfLastWord(string $s)
 {
 	$s = trim($s);
 	if (empty($s)) return 0;

 	$count = 0;
 	$len   = strlen($s) - 1;

 	for ($i = $len; $i >= 0; $i--) {
 		if ($s[$i] == ' ') {
 			break;
 		}
 		++$count;
 	}
 	return $count;
 }
