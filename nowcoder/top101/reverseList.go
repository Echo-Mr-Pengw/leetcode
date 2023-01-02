//BM1 反转链表
package main

type ListNode struct {
	Val  int
	Next *ListNode
}

func ReverseList(pHead *ListNode) *ListNode {
	// write code here
	if pHead == nil {
		return pHead
	}

	var pre *ListNode

	for pHead != nil {
		temp := pHead.Next
		pHead.Next = pre

		pre = pHead
		pHead = temp
	}
	return pre
}
