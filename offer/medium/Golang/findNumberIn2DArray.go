//
// 剑指 Offer 04. 二维数组中的查找
// 在一个 n * m 的二维数组中，每一行都按照从左到右递增的顺序排序，每一列都按照从上到下递增的顺序排序。
// 请完成一个高效的函数，输入这样的一个二维数组和一个整数，判断数组中是否含有该整数。
//

package main

import (
	"fmt"
)

func findNumberIn2DArray(matrix [][]int, target int) bool {

	rows := len(matrix)
	if rows == 0 {
		return false
	}

	cols := len(matrix[0]) - 1
	r := 0
	isExist := false

	for {
		if r < rows && cols >= 0 {
			if matrix[r][cols] == target {
				isExist = true
				break
			} else if target > matrix[r][cols] {
				r++
			} else {
				cols--
			}
		} else {
			break
		}
	}
	return isExist
}

func main() {
	matrix := [][]int {
		{1,2,3},
		{4,5,6},
		{7,8,9},
	}
	target := 7
	m := []int{1,2,3}
	fmt.Println(findNumberIn2DArray(matrix, target), m[:1])
}
