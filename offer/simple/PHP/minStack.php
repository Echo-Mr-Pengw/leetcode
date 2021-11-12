<?php
// 定义栈的数据结构，请在该类型中实现一个能够得到栈的最小元素的 min 函数在该栈中，
// 调用 min、push 及 pop 的时间复杂度都是 O(1)。

class minStack
{
    public $stack1 = [];
    public $stack2 = [];

    public function push($val)
    {
        array_push($this->stack1, $val);
        if (empty($this->stack2)) {
            array_push($this->stack2, $val);
        } else {
            $min = $this->min();
            if ($min <= $val) {
                array_push($this->stack2, $min);
            } else {
                array_push($this->stack2, $val);
            }
        }
    }

    public function pop()
    {
        $elem = array_pop($this->stack1);
        array_pop($this->stack2);
        return $elem;
    }

    public function top()
    {
        $elem = array_pop($this->stack1);
        array_push($this->stack1, $elem);
        return $elem;
    }

    public function min()
    {
        $elem = array_pop($this->stack2);
        array_push($this->stack2, $elem);
        return $elem;
    }
}

$stack = new minStack();
$stack->push(-2);
$stack->push(0);
$stack->push(-3);
var_dump($stack->min());      //--> 返回 -3.
$stack->pop();
var_dump($stack->top());    // --> 返回 0.
var_dump($stack->min());     // --> 返回 -2.
