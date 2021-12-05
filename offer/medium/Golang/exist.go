
// 剑指 Offer 12. 矩阵中的路径
// 给定一个 m x n 二维字符网格 board 和一个字符串单词 word 。如果 word 存在于网格中，返回 true ；否则，返回 false 。
//
//单词必须按照字母顺序，通过相邻的单元格内的字母构成，其中“相邻”单元格是那些水平相邻或垂直相邻的单元格。
//同一个单元格内的字母不允许被重复使用。

package main

func dfs(board [][]byte, word string, i int, j int, k int) bool {
	if i < 0 || i >= len(board) ||
		j < 0 || j >= len(board[0]) || board[i][j] != word[k] {
		return false
	}

	if k == (len([]byte(word)) - 1) {
		return true
	}

	board[i][j] = '*'
	res := dfs(board, word, i - 1, j, k + 1) || dfs(board, word, i + 1, j, k + 1) || dfs(board, word, i, j - 1, k + 1) || dfs(board, word, i, j + 1, k + 1)
	board[i][j] = word[k]
	return res
}


func exist(board [][]byte, word string) bool {

	rows := len(board)
	if rows == 0 {
		return false
	}

	cols := len(board[0])
	for i := 0; i < rows; i++ {
		for j := 0; j < cols; j++ {
			if dfs(board, word, i, j, 0) {
				return true
			}
		}
	}
	return false
}





