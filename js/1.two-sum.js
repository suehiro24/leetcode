/*
 * @lc app=leetcode id=1 lang=javascript
 *
 * [1] Two Sum
 */

// @lc code=start
/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */
var twoSum = function (nums, target) {
  for (let i1 = 0; i1 < nums.length; i1++) {
    for (let i2 = 0; i2 < nums.length; i2++) {
      if (i1 == i2) continue;
      if (nums[i1] + nums[i2] !== target) continue

      return [i1, i2];
    }
  }
};
// @lc code=end
