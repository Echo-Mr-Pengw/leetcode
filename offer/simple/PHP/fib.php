<?php

/**
 * 剑指 Offer 10- I. 斐波那契数列
 * @Author: pengwei
 * @Date:   2021-05-18 23:04:09
 * @Last Modified by:   pengwei
 */

class Solution
{

    // 保持每次递归结果
    public $result_map = [];

    /**
     * @param Integer $n
     * @return Integer
     */
    function fib($n) 
    {
        if ($n < 2) {
            return $n;
        }

        if($this->result_map[$n]) {
            return $this->result_map[$n];
        }

       $this->result_map[$n] = ($this->fib($n - 1) + $this->fib($n - 2)) % 1000000007;

       return $this->result_map[$n];
    }

    // 正常递归，不保存每次递归结果
    // function fib($n)
    // {
    //     if ($n < 2) {
    //         return $n;
    //     }

    //     return fib($n - 1) + fib($n -2);
    // }
}