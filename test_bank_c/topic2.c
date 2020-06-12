#include <stdio.h>
#include<stdlib.h>


 struct ListNode
{
  int val;
  struct ListNode *next;
};


struct ListNode *create_node(int val)
{

  struct ListNode *node_ptr =  malloc(sizeof(struct ListNode));
  (*node_ptr).val = val;
  (*node_ptr).next = NULL;

  return node_ptr;
    
}


struct ListNode *create_ListNode(int array[],int count)
{
     struct ListNode *node_ptr1;
     struct ListNode *node_ptr2;
     node_ptr1 = create_node(array[0]);
     node_ptr2 = node_ptr1;
  for (int i = 1; i < count; ++i){
       
       while((*node_ptr2).next !=NULL){
         node_ptr2 = (*node_ptr2).next;
       }
       (*node_ptr2).next = create_node(array[i]);   
  }

  return node_ptr1;
}


struct ListNode* addTwoNumbers(struct ListNode* l1, struct ListNode* l2)
{ 
  
     int add_flag = 0;
     struct ListNode *head_ptr = NULL;
     struct ListNode *last_list_ptr = NULL;
     int count =0;
  while(l1 != NULL || l2 != NULL){
     int temp = 0;
    if(l1 == NULL){
       temp = (*l2).val;
    }else if(l2 == NULL){
      temp = (*l1).val;
    }else{
       temp = (*l1).val + (*l2).val;
    }
    
        if(add_flag){
          temp = temp +1;
          add_flag =0;
        }
        if(temp >=10){
            temp = temp - 10;
            add_flag = 1;
        } 
        struct ListNode *temp_node_ptr = create_node(temp);

         (*temp_node_ptr).val = temp;
         if(last_list_ptr !=NULL){
           (*last_list_ptr).next = temp_node_ptr;
         }
          if(l1 != NULL)
         l1 = (*l1).next;
          if(l2 != NULL)
         l2 = (*l2).next;
               
        if(count == 0){
          head_ptr = temp_node_ptr;
        
        }
       last_list_ptr = temp_node_ptr;
        count++;
  }
    if(add_flag){
       struct ListNode *temp_node_ptr = create_node(1);
       if( last_list_ptr != NULL){
          (*last_list_ptr).next = temp_node_ptr;
       }
    }

      return head_ptr;

}

int main(int argc, char const *argv[])
{

       int array[3] = {5,7,8};
       int array1[2] = {0,8};
       struct ListNode * l1  = create_ListNode(array,3);
       struct ListNode * l2  = create_ListNode(array1,2);
       struct ListNode *ptr = addTwoNumbers(l1,l2);
       while( ptr != NULL){
           printf("%d\n", (*ptr).val);
           ptr = (*ptr).next;
         }

       // while( l2 != NULL){
       //     printf("%d\n", (*l2).val);
       //     l2 = (*l2).next;
       //   }
      return 0;
}
