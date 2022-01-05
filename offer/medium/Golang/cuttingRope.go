package main

import "fmt"

func main() {

	res := cuttingRope(5)
	fmt.Println(res)
}

func cuttingRope(n int) int {
	if n < 4 {
		return n - 1
	}

	result := 1
	for n > 4 {
		result *= 3
		n -= 3
	}
	return result * n
}