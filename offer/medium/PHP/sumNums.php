<?php
// 求 1+2+...+n ，
//要求不能使用乘除法、for、while、if、else、switch、case等关键字及条件判断语句（A?B:C）。

$result = 0;
function sumNums($n) {
    global  $result;
    $b = $n > 1 && sumNums($n - 1);
    $result += $n;
    return $result;
}

var_dump(sumNums(3));
