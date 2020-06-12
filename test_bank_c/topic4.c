#include <stdio.h>
#include<stdlib.h>

// [1,5,7] [1,2,4,5,6,7,8]
// [2,4,6,8];
//0,1
//0
double findMedianSortedArrays(int* nums1, int nums1Size, int* nums2, int nums2Size){
     int array[4] = {0};
     int index = 0;
    if(nums1Size % 2 == 0){
       index = nums1Size/2 -1;
       array[0] = nums1[index];
       array[1] = nums1[index+1];

       	if(nums2Size % 2 == 0){
       		index = nums2Size/2 -1;
       		array[2] = nums2[index];
       		array[3] = nums2[index+1];
    		}else{
    			index = (nums2Size+1)/2;
    			array[2] =nums2[index-1];
    			}

    }else{
    	index = (nums1Size+1)/2;
    	array[0] =nums1[index-1];
       	if(nums2Size % 2 == 0){
       		index = nums2Size/2 -1;
       		array[1] = nums2[index];
       		array[2] = nums2[index+1];
    		}else{
    			index = (nums2Size+1)/2;
    			array[1] =nums2[index-1];
    			}
    }

    
    printf("%d\n",array[0]);
    printf("%d\n",array[1]);
    printf("%d\n",array[2]);
    printf("%d\n",array[3]);


}

int main(int argc, char const *argv[])
{
	int nums1[3] = {0,2,3};
	int nums2[1] = {0};
    findMedianSortedArrays(nums1,3,nums2,1);
	return 0;
}