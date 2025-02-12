//go:build ignore

package main

import (
	"fmt"
	"sort"
)

// 给定两个由小写字母组成的字符串 s1 和 s2，请编写一个程序，确定其中一个字符串的字符重新排列后，能否变成另一个字符串。

// 示例 1：

// 输入: s1 = "abc", s2 = "bca"
// 输出: true
// 示例 2：

// 输入: s1 = "abc", s2 = "bad"
// 输出: false
// 说明：

// 0 <= len(s1) <= 100
// 0 <= len(s2) <= 100


func CheckPermutation(s1 string, s2 string) bool {

    if len(s1) != len(s2) {
        return false
    }

    char1 := []rune(s1)
	char2 := []rune(s2)

	sort.Slice(char1, func(i, j int) bool {
		return char1[i] < char1[j] // 正序排列
	})

	sort.Slice(char2, func(i, j int) bool {
		return char2[i] < char2[j] // 正序排列
	})

    return string(char1) == string(char2)
}



func main()  {

	 // testStr := "leetcode"
	 testStr1 := "abb"
     testStr2 := "aab"
     if CheckPermutation(testStr1,testStr2){
		fmt.Println("String can sort correctly")
	 }else{
		fmt.Println("String can not sort correctly")
	 }
	
}