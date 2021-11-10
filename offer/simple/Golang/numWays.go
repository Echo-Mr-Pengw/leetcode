//
// 剑指 Offer 10- II. 青蛙跳台阶问题
// 一只青蛙一次可以跳上1级台阶，也可以跳上2级台阶。求该青蛙跳上一个 n 级的台阶总共有多少种跳法。
//
//答案需要取模 1e9+7（1000000007），如计算初始结果为：1000000008，请返回 1。

package main

import "fmt"

func main() {

	n := 10
	fmt.Println(numWays(n))
}

func numWays(n int) int {
	if n == 0 {
		return 1
	}

	if n < 3 {
		return n
	}

	a := 1
	b := 2
	c := 0
	for i := 0; i < n; i++ {
		c = (a + b) % 1000000007
		a = b
		b = c
	}
	return c
}