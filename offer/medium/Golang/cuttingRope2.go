package main

import "fmt"

func main() {

	n := 100000000000000
	res := cuttingRope2(n)
	fmt.Println(res)
}

func cuttingRope2(n int) int {
	if  n < 4 {
		return n - 1
	}

	result := 1
	for n > 4 {
		result = (result * 3) % 1000000007
		n -= 3
	}
	return (result * n) % 1000000007
}
