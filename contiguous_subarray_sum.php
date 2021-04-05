<?php
/*
Given an integer array of numbers, find the contiguous subarray (containing at least one number) which has the largest sum and return its sum.



Example

Input: nums = [-2,1,-3,4,-1,2,1,-5,4]

Output: 6



﻿Explanation: [4,-1,2,1] has the largest sum = 6
*/
function solution($arr) {
    // Write your code here: for testing inputs are processed from the standard input box(es)
    $mFar = $arr[0]; $mNow = 0;
    foreach ($arr as $val){
      $mNow += $val;
      if ($mNow < 0) {
        $mNow = 0;
      }
      if ($mFar < $mNow) {
        $mFar = $mNow;
      }
    }
    return $mFar;
}