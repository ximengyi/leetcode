//go:build ignore

package main

import (
	"fmt"
)

// URL化。编写一种方法，将字符串中的空格全部替换为%20。假定该字符串尾部有足够的空间存放新增字符，并且知道字符串的“真实”长度。（注：用Java实现的话，请使用字符数组实现，以便直接在数组上操作。）

// 示例 1：

// 输入："Mr John Smith    ", 13
// 输出："Mr%20John%20Smith"
// 示例 2：

// 输入："               ", 5
// 输出："%20%20%20%20%20"

// 提示：

// 字符串长度在 [0, 500000] 范围内。

func replaceSpaces(S string, length int) string {
	
    trimSpace := S[:length]
    var char2 []rune
    char1 := []rune(trimSpace)
    for _,char := range char1 {

		if char != ' '{
			char2 = append(char2, char)
        }else{
            char2 = append(char2, '%','2','0')
		}

	}

	return string(char2)
}



func main()  {

	 // testStr := "leetcode"
	  testStr1 := "    "
	 //testStr1 := "Mr John Smith    "
	 testStr1 ="nwmog q k  gW  c    H  DYpIE    Lcz         gV    Bj   vkH X g       l  "
	 fmt.Println(len(testStr1))
     fmt.Println(replaceSpaces(testStr1,len(testStr1)))
	
}