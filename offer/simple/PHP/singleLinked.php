<?php

/**
 * 剑指 Offer 18. 删除链表的节点
 * @Author: pengwei
 * @Date:   2021-05-20 10:17:45
 * @Last Modified by:   pengwei
 */

class Node
{	
	/**
	 * [$data 元素]
	 * @var [type]
	 */
	public $data;

	/**
	 * [$next 指针]
	 * @var [type]
	 */
	public $next;

	/**
	 * 初始化
	 * @Author   pengwei
	 * @DateTime 2021-05-20
	 * @param    [type]     $data [description]
	 */
	public function __construct($data = NULL)
	{
		$this->data = $data;
		$this->next = NULL;
	}
}

class SingleLinked
{	
	/**
	 * [$headNode 头节点]
	 * @var [type]
	 */
	public $headNode;

	/**
	 * 初始化头节点
	 * @Author   pengwei
	 * @DateTime 2021-05-20
	 */
	public function __construct()
	{
		$this->headNode = new Node;
	}

	/**
	 * 添加节点
	 * @Author   pengwei
	 * @DateTime 2021-05-20
	 * @param    [type]     $data [description]
	 */
	public function addNode($data)
	{	
		$node = $this->headNode;
		// 找到最后一个节点元素
		while ($node->next != NULL) {
			$node = $node->next;
		}

		// 加入节点
		$node->next = new Node($data);
	}	

	/**
	 * 带头节点的删除
	 * @Author   pengwei
	 * @DateTime 2021-05-20
	 * @param    [type]     $data [description]
	 * @return   [type]           [description]
	 */
	public function deleteNode($data)
	{
		$node = $this->headNode;
		while ($node->next->data != NULL && $node->next->data != $data) {
			$node = $node->next;
		}

		$node->next = $node->next->next;
	}

	/**
	 * 判断节点元素是否存在
	 * @Author   pengwei
	 * @DateTime 2021-05-20
	 * @param    [type]     $data [description]
	 * @return   boolean          [description]
	 */
	public function isExistNode($data)
	{
		$node = $this->headNode;

		while ($node->next != NULL && $node->data != $data) {
			$node = $node->next;
		}

		return ($node->data == $data) ? true : false;
	}
}

$single = new SingleLinked();
$single->addNode(1);
$single->addNode(2);
$single->addNode(3);
$single->addNode(4);

$single->deleteNode(3);
$single->deleteNode(1);

var_dump($single->isExistNode(1));
