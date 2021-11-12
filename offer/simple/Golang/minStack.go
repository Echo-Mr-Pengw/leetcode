// 定义栈的数据结构，请在该类型中实现一个能够得到栈的最小元素的 min 函数在该栈中，
// 调用 min、push 及 pop 的时间复杂度都是 O(1)。

package main

import "fmt"

type MinStack struct {
	stack1 []int
	stack2 []int
}


/** initialize your data structure here. */
func Constructor() MinStack {
	return MinStack{
		stack1: []int{},
		stack2: []int{},
	}
}


func (this *MinStack) Push(x int)  {
	this.stack1 = append(this.stack1, x)
	if len(this.stack2) == 0 {
		this.stack2 = append(this.stack2, x)
	} else {
		min:= this.Min()
		if min <= x {
			this.stack2 = append(this.stack2, min)
		} else {
			this.stack2 = append(this.stack2, x)
		}
	}
	//fmt.Println(this.stack1, this.stack2)
}


func (this *MinStack) Pop()  {
	l1 := len(this.stack1)
	l2 := len(this.stack2)

	this.stack1 = this.stack1[:l1-1]
	this.stack2 = this.stack2[:l2-1]
}


func (this *MinStack) Top() int {
	l1 := len(this.stack1)
	if l1 == 0 {
		return -1
	}
	return this.stack1[l1 - 1]
}


func (this *MinStack) Min() int {
	l2 := len(this.stack2)
	if l2 == 0 {
		return -1
	}
	return this.stack2[l2 - 1]
}


func main() {
	obj := Constructor()
	obj.Push(-2)
	obj.Push(0)
	obj.Push(-3)
	obj.Pop()
	param_3 := obj.Top()
    param_4 := obj.Min()

    fmt.Println(param_3, param_4)
}
