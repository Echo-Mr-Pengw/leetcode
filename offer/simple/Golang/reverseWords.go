
// 输入一个英文句子，q，但单词内字符的顺序不变。
// 为简单起见，标点符号和普通字母一样处理。
// 例如输入字符串"I am a student. "，则输出"student. a am I"。

package main

import (
	"fmt"
	"strings"
)

func main() {

	words := "I am a student. "
	ret := reverseWords(words)
	fmt.Println(ret)
}

func reverseWords(words string) string {
	str := ""
	wordSlice := strings.Fields(words)
	l := len(wordSlice) - 1
	for ; l >=0; l-- {
		str += wordSlice[l]
		if l != 0 {
			str += " "
		}
	}
	return str
}
