<?php
/**
 *  20.检测括号的有效性
 *
 * @author pengw
 * @DateTime 2020-08-15
 */

class VaildBrackets
{
	// 定义左括号集
	public $left_bracket = ['(', '{', '['];

	// 定义左右括号集
	public $bracket_map = [
		'(' => ')',
		'{' => '}',
		'[' => ']',
	]; 

	// 验证字符串括号的有效性
	public function isValid($str)
	{
		$str_len = strlen($str);
		
		// 如果括号字符串为基数，则不合法
		if ($str_len % 2 !== 0) {
			return false;
		}

		// 定义一个栈
		$stack = [];

		// 依次循环每个字符
		for ($i = 0; $i < $str_len; $i++) {

			// 如果字符在左括号集合中，则入栈
			if (in_array($str{$i}, $this->left_bracket)) {
				array_push($stack, $str{$i});
			} else {
				// 如果栈为空了，括号字符串不合法
				if (!$stack) {
					return false;
				}

				// 弹出栈顶元素
				$pop_element = array_pop($stack);

				// 通过弹出的栈顶元素（键）去 左右括号集合找到对应的值，进行比较
				if ($this->bracket_map[$pop_element] != $str{$i}) {
					return false;
				}
			}
		}

		// 整个括号字符串循环完毕后，如果栈中还有元素，则不合法
		if ($stack) {
			return false;
		}

		return true;
	}
}

$b = new VaildBrackets();

$str = '{}{()}{';
var_dump($b->isValid($str));