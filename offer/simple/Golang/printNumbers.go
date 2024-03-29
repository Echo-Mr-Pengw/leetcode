// 剑指 Offer 17. 打印从1到最大的n位数
// 输入数字 n，按顺序打印出从 1 到最大的 n 位十进制数。比如输入 3，则打印出 1、2、3 一直到最大的 3 位数 999。

package main

import (
	"fmt"
	"math"
)

func printNumbers(n int) []int {
	max := int(math.Pow10(n)) - 1

	// 声明切片
	i := 0
	s := make([]int, max)

	for {
		if i >= max {
			break
		}
		s[i] = i + 1
		i++
	}
	return s
}

func main() {
	fmt.Println(printNumbers(2))
}
