<?php

// 剑指 Offer 12. 矩阵中的路径
// 给定一个 m x n 二维字符网格 board 和一个字符串单词 word 。如果 word 存在于网格中，返回 true ；否则，返回 false 。
//
//单词必须按照字母顺序，通过相邻的单元格内的字母构成，其中“相邻”单元格是那些水平相邻或垂直相邻的单元格。
//同一个单元格内的字母不允许被重复使用。

class Solution {

    /**
     * @param String[][] $board
     * @param String $word
     * @return Boolean
     */
    public function exist($board, $word) {
        if (empty($board)) {
            return false;
        }

        $rows = count($board);
        $cols = count($board[0]);

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                if ($this->dfs($board, $word, $i, $j, 0)) {
                    return true;
                }
            }
        }
        return false;
    }

    public function dfs($board, $word, $i, $j, $k) {
        if ($i < 0 || $i >= count($board) ||
            $j < 0 || $j >= count($board[0]) ||
            $word[$k] != $board[$i][$j]) {
            return false;
        }

        if ($k == (strlen($word) - 1)) {
            return true;
        }

        $board[$i][$j] = '*';

        $res = $this->dfs($board, $word, $i - 1, $j, $k + 1) ||
            $this->dfs($board, $word, $i + 1, $j, $k + 1) ||
            $this->dfs($board, $word, $i, $j - 1, $k + 1) ||
            $this->dfs($board, $word, $i, $j + 1, $k + 1);

        $board[$i][$j] = $word[$k];
        return $res;
    }
}


