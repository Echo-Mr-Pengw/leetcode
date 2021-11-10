// 剑指 Offer 18. 删除链表的节点
// 给定单向链表的头指针和一个要删除的节点的值，定义一个函数删除该节点。
// 返回删除后的链表的头节点。
package main

import "fmt"

type listNode struct {
	val int
	next *listNode
}

// 添加结点
func add (head *listNode, val int) {
	curr := head
	for curr.next != nil {
		curr = curr.next
	}
	curr.next = &listNode{val:val}
}

// 删除结点
func deleteNode(head *listNode, val int) *listNode {

	curr := head
	for curr.next != nil {
		if curr.next.val == val {
			curr.next = curr.next.next
		} else {
			curr = curr.next
		}
	}
	return head
}

// 获取所有结点
func getAllNode(head *listNode) {
	for head != nil {
		fmt.Println(head.val)
		head = head.next
	}
}
func main() {
	// 头结点
	head := &listNode{}

	// 添加结点
	add(head, 1)
	add(head, 2)
	add(head, 3)
	add(head, 4)

	// 删除结点
	deleteNode(head, 3)
	getAllNode(head)
}
