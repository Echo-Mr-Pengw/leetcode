// 剑指 Offer 22. 链表中倒数第k个节点
// 输入一个链表，输出该链表中倒数第k个节点。为了符合大多数人的习惯，本题从1开始计数，即链表的尾节点是倒数第1个节点。
//
//例如，一个链表有 6 个节点，从头节点开始，它们的值依次是 1、2、3、4、5、6。这个链表的倒数第 3 个节点是值为 4 的节点。

package main

import "fmt"

// 为了多加练习，构建链表每次写一遍
type listNode1 struct {
	val int
	next *listNode1
}

// 添加结点
func add1(head *listNode1, val int) {
	curr := head
	for curr.next != nil {
		curr = curr.next
	}
	curr.next = &listNode1{val:val}
}

func getKthFromEnd(head *listNode1, k int) *listNode1 {

	// 去除头结点
	slow := head.next
	fast := head.next

	for i := 0; i < k; i++ {
		fast = fast.next
	}

	for fast != nil {
		slow = slow.next
		fast = fast.next
	}
	return slow
}

func getAllNode1(head *listNode1) {
	curr := head

	for curr != nil {
		fmt.Println(curr.val)
		curr = curr.next
	}
}
func main() {

	head := &listNode1{}
	add1(head, 1)
	add1(head, 2)
	add1(head, 3)

	//getAllNode1(head) // 0 1 2 3
	retNode := getKthFromEnd(head, 2)
	getAllNode1(retNode) // 2 3
}


