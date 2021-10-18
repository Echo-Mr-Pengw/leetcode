package main

import "fmt"

// 两数之和
// 剑指 Offer 57. 和为s的两个数字

func main() {

	nums := []int{1, 2, 3, 4}
	target := 6

	res := towSum(nums, target)
	fmt.Println(res)
}

func towSum(nums []int, target int) []int {

	numsLen := len(nums)
	if numsLen < 1 {
		return nums
	}

	i := 0
	j := numsLen - 1
	result := make([]int, 0)
	for i < j {
		if nums[i] + nums[j] == target {
			result = append(result, nums[i], nums[j])
			break
		} else if nums[i] + nums[j] > target {
			j--
		} else {
			i++
		}
	}
	return result
}
