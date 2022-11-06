<?php

/*
 * @lc app=leetcode id=1 lang=php
 *
 * [1] Two Sum
 */

// @lc code=start
class Solution {

    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function twoSum($nums, $target) {
        foreach ($nums as $i => $num1) {
            foreach ($nums as $j => $num2) {
                if ($i === $j) continue;
                if ($num1 + $num2 == $target) return [$i, $j];
            }
        }
    }
}
// @lc code=end

