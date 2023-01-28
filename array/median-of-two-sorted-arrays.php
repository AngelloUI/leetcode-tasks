<?php
function findMedianSortedArrays($nums1, $nums2): float
{
    if (count($nums1) == 0){
        if (count($nums2) % 2 == 0) {
            return ($nums2[count($nums2)/2]+$nums2[count($nums2)/2-1])/2;
        }else{
            return ($nums2[(count($nums2)-1)/2]);
        }
    }
    if (count($nums2) == 0){
        if (count($nums1) % 2 == 0) {
            return ($nums1[count($nums1)/2]+$nums1[count($nums1)/2-1])/2;
        }else{
            return ($nums1[(count($nums1)-1)/2]);
        }
    }
    $resultArray = [];
    $IndArray1 = 0;
    $IndArray2 = 0;
    while ($IndArray1 < count($nums1) && $IndArray2 < count($nums2)) {
        if ($nums1[$IndArray1] < $nums2[$IndArray2]) {
            $resultArray[] = $nums1[$IndArray1];
            ++$IndArray1;
        } else {
            $resultArray[] = $nums2[$IndArray2];
            ++$IndArray2;
        }
        if ($IndArray1 == count($nums1)) {
            for ($i = $IndArray2; $i < count($nums2); ++$i) {
                $resultArray[] = $nums2[$i];
            }
        }
        if ($IndArray2 == count($nums2)) {
            for ($i = $IndArray1; $i < count($nums1); ++$i) {
                $resultArray[] = $nums1[$i];
            }
        }
    }
    if (count($resultArray) % 2 == 0) {
        return ($resultArray[count($resultArray)/2]+$resultArray[count($resultArray)/2-1])/2;
    }else{
        return ($resultArray[(count($resultArray)-1)/2]);
    }
}
echo findMedianSortedArrays([],[2]);