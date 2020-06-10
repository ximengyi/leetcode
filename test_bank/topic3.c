#include <stdio.h>
#include<stdlib.h>
#include<string.h>
//abcadfbb

//判断字符是否在字符串数组中
 int in_array(char c ,char *s){
   int index =0;
   while((s[index]) != '\0'){
    if(s[index] == c) return 1;
     index++;
   }
   return 0;
 }

 int lengthOfLongestSubstring(char * s){
   int i;
   int max =0;
   int start =0;
   int count =0;
   int index [128] ={0};
   for (int i = 0; s[i] !='\0'; ++i)
   {

       if(index[s[i]] > start){
         count = i-start;

         if(max < count) max = count;
         start = index[s[i]];
       }

        index[s[i]] =i+1;  
        
      }
      count = i-start;
      printf("%s\n", max);
      return max;
   } 
      

int lengthOfLongestSubstring2(char * s){
    int i, j = 0, count = 0, max = 0, index[128] = {0}, start = 0;
    for(i=0;s[i]!='\0';i++)     
    {
        if(index[s[i]]>start)   //index用来储存出现重复字符时
        {                       //子串起始下标应移动到的地方
            count = i-start;
            if(count>max)
            {
                max = count;
            }
            start = index[s[i]];
            printf("%d\n",i);
            printf("%d\n", start);
            printf("%s\n", "===========");
        }
        index[s[i]] = i+1;
    }
    count = i-start;
    return count>max?count:max;
}


int main(int argc, char const *argv[])
{
  
   //char s[9] = {'a','b','c','a','b','c','b','b'};
   char s[9] = {'a','b','c','a','d','f','b','b'};
  
   int res = lengthOfLongestSubstring2(s);


   // int count = strlen(s);
   //    for (int i = 0; i <= count; ++i)
   // {
   //    printf("%c\n", s[i]);"work_city"
   // }
 
    return 0;
}
