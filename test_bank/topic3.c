#include <stdio.h>
#include<stdlib.h>
#include<string.h>


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
   int index =0;
   for (int i = 0; s[i] !='\0'; ++i)
   {
      printf("%c\n", (s[i]));
   } 
      return 0;
}


int main(int argc, char const *argv[])
{

   char s[9] = {'a','b','c','a','b','c','b','b'};

   if(in_array('0',s)){
    printf("%s\n","是" );
   }else{
    printf("%s\n","否" );
   }

   lengthOfLongestSubstring(s);
   // int count = strlen(s);
   //    for (int i = 0; i <= count; ++i)
   // {
   //    printf("%c\n", s[i]);"work_city"
   // }
 
    return 0;
}
