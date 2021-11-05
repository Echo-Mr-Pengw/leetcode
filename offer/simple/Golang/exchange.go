package main

import "fmt"

// 输入一个整数数组，实现一个函数来调整该数组中数字的顺序，使得所有奇数在数组的前半部分，所有偶数在数组的后半部分。
//
//示例：
//输入：nums = [1,2,3,4]
//输出：[1,3,2,4]
//注：[3,1,2,4] 也是正确的答案之一。

func main() {

	nums := []int {1, 2, 3, 4, 5, 6}
	fmt.Println(exchange(nums))
}

func exchange(nums []int) []int {

	len := len(nums)
	if len < 2 {
		return nums
	}

	// 1 2 3 4 5
	i := 0
	j := len - 1
	for i < j {
		if nums[i] & 1 == 1 {
			i++
			continue
		}

		if nums[j] & 1 == 0 {
			j--
			continue
		}

		tmp := nums[i]
		nums[i] = nums[j]
		nums[j] = tmp
	}
	return nums
}
