// 请实现一个函数，把字符串 s 中的每个空格替换成"%20"。

//示例 1：
//
//输入：s = "We are happy."
//输出："We%20are%20happy."

package main

import "fmt"

func main() {

	s := "     "
	fmt.Println(replaceSpace(s))
}

func replaceSpace(s string ) string {

	// 方法1 利用strings包中的Replace函数
	//return strings.Replace(s, " ", "%20", -1)

	// 方法2
	//newStr := ""
	//	//for _, v := range s {
	//	//	if v == ' ' {
	//	//		newStr += "%20"
	//	//	} else {
	//	//		newStr += string(v)
	//	//	}
	//	//}
	//	//return newStr

	// 方法3
	oldLen := len(s) - 1
	for _, v := range s {
		if v == ' ' {
			for i := 0; i < 2 ; i++ {
				s += " "
			}
		}
	}

	newLen := len(s) - 1
	ss := []rune(s)
	for i := oldLen; i >= 0; i-- {
		if ss[i] == ' ' {
			ss[newLen] = '0'
			newLen--
			ss[newLen] = '2'
			newLen--
			ss[newLen] = '%'
			newLen--
		} else {
			ss[newLen] = ss[i]
			newLen--
		}
	}
	return string(ss)
}