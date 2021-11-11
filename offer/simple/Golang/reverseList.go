// 剑指 Offer 24. 反转链表
// 定义一个函数，输入一个链表的头节点，反转该链表并输出反转后链表的头节点。

package main


//type listNode struct {
//	val int
//	next *listNode
//}

func reverseList(head *listNode) *listNode {
	var pre *listNode = nil
	curr := head
	for curr != nil {
		tmp := curr.next
		curr.next = pre
		pre = curr
		curr = tmp
	}
	return pre
}