package main

import (
	"fmt"
	"math"
)

func main() {

	numbers := []int{3,4,5,0,1,2}
	fmt.Println(minArray(numbers))
}

func minArray(numbers []int) int {

	// 方法1
	//sort.Ints(numbers)
	//return numbers[0]

	// 方法2  二分查找
	i := 0
	j := len(numbers) - 1
	for i <= j {
		mid := int(math.Floor(float64((i + j) / 2)))
		if numbers[mid] > numbers[j] {
			i = mid + 1
		} else if numbers[mid] < numbers[j] {
			j = mid - 1
		} else {
			j--
		}
	}
	return numbers[i]
}
