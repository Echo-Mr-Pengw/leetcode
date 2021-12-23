
// 剑指 Offer 33. 二叉搜索树的后序遍历序列

package main

import "fmt"

func verifyPostorder(postorder []int) bool {
	return isValid(postorder, 0, len(postorder) - 1)
}

func isValid(data []int, left int, right int) bool {

	if left >= right {
		return true
	}

	mid := left
	root := data[right]
	for data[mid] < root {
		mid++
	}

	tmp := mid
	for tmp < right {
		if data[tmp] < root {
			return false
		}
		tmp++
	}
	return isValid(data, left, mid - 1) && isValid(data, mid, right - 1)
}

func main() {
	postorder := []int{1, 2, 3, 4}
	fmt.Println(verifyPostorder(postorder))
}