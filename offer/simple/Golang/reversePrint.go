// 剑指 Offer 06. 从尾到头打印链表
// 输入一个链表的头节点，从尾到头反过来返回每个节点的值（用数组返回）。

package main

import "fmt"

type Node struct {
	data int
	next *Node
}

type List struct {
	head *Node
}

func (this *List) add(val int) {

	node := &Node{data:val}
	if this.head == nil {
		this.head = node
	} else {
		curr := this.head
		for curr.next != nil {
			curr = curr.next
		}
		curr.next = node
	}
}

func (this *List) reversePrint() []int {

	var num int
	curr := this.head
	for curr != nil {
		num++
		curr = curr.next
	}

	i := num - 1
	//创建切片
	s := make([]int, num)
	fmt.Println(s)
	curr = this.head
	for curr != nil {
		s[i] = curr.data
		i--
		curr = curr.next
	}
	return s
}

func main() {
	var l List
	l.add(1)
	l.add(2)
	l.add(3)

	fmt.Println(l.reversePrint())
}

