package main

type TreeNode struct {
     Val int
     Left *TreeNode
     Right *TreeNode
 }

func buildTree(preorder []int, inorder []int) *TreeNode {

	if len(preorder) == 0 {
		return nil
	}

	root := preorder[0]
	index := 0
	for i, v := range inorder {
		if root == v {
			index = i
			break
		}
	}

	node := &TreeNode{root, nil, nil}
	node.Left = buildTree(preorder[1:index + 1], inorder[:index])
	node.Right = buildTree(preorder[index + 1:], inorder[index + 1:])
	return node
}