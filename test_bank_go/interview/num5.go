//go:build ignore

package main

import (
	"fmt"
)

// 字符串有三种编辑操作:插入一个英文字符、删除一个英文字符或者替换一个英文字符。 给定两个字符串，编写一个函数判定它们是否只需要一次(或者零次)编辑。

// 示例 1：

// 输入：
// first = "pale"
// second = "ple"
// 输出：True

// 示例 2：

// 输入：
// first = "pales"
// second = "pal"
// 输出：False

func oneEditAway(first string, second string) bool {
    if first == second { return true }
    M, N := len(first), len(second)
    // 长在前  即令first始终是长的，M也表示first的长度，方便解题
    if M < N {
        first, second = second, first
        M, N = N, M
    }
    // 如果长度差值大于1 则直接false
    if M - N > 1 { return false }
    // 核心代码
    i := 0
    // 遍历较短的   遇到不同的字符，比较 （first删除该位置 || 两者替换该位置）  的情况下后面是否相等
    for i < N {
        if first[i] != second[i] {
            return first[i+1:] == second[i:] || first[i+1:] == second[i+1:]
        }
        i++
    }
    return true
}

func main()  {

     fmt.Println(oneEditAway("pale","ple"))
	
}