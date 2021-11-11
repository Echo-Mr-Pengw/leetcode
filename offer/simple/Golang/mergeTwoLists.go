// 剑指 Offer 25. 合并两个排序的链表
// 输入两个递增排序的链表，合并这两个链表并使新链表中的节点仍然是递增排序的。

package main

//type ListNode struct {
//	val int
//	next *ListNode
//}

func mergeTwoLists(l1 *listNode, l2 *listNode) *listNode {
	node := &listNode{}
	curr := node

	for l1 != nil && l2 != nil {
		if l1.val <= l2.val {
			curr.next = l1
			l1 = l1.next
		} else {
			curr.next = l2
			l2 = l2.next
		}
		curr = curr.next
	}

	// 两链表是否存在未比较完的元素
	if l1 != nil {
		curr.next = l1
	}

	if l2 != nil {
		curr.next = l2
	}

	return node.next
}