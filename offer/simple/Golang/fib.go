package main

import "fmt"

func main() {

	n := 3
	fmt.Println(fib(n))
}

func fib(n int) int {
	if (n < 3) {
		return n
	}

	a := 1
	b := 2
	c := 0
	for i := 3; i <= n; i++ {
		c = a + b
		a = b
		b = c
	}
	return b
}