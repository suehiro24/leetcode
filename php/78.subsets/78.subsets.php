<?php
namespace Subsets;

use Exception;

/*
 * @lc app=leetcode id=78 lang=php
 *
 * [78] Subsets
 */

// @lc code=start
class Solution {
    /** @var int[] */
    public $input;

    /** @return int */
    public function n()  {
        return count($this->input);
    }

    /**
     * @param int $toBit
     * @return int[]
     */
    public function findOne(int $toBit)
    {
        if (! (0 <= $toBit && $toBit < pow(2, $this->n()))) {
            throw new Exception();
        }

        $result = [];

        for ($i=0; $i < $this->n(); ++$i) {
            if ($toBit & (1 << $i)) {  // condition > 0 => true
                array_push($result, $this->input[$i]);
            }
        }

        return $result;
    }

    /**
     * @return int[][]
     */
    public function findAll()
    {
        $result = [];

        // ビット積(AND)を取ることで2^n 通りの全組み合わせを表現する整数値
        for ($bit=0; $bit < (1 << $this->n()); ++$bit) {  // O(n)
            array_push($result, $this->findOne($bit));
        }

        return $result;
    }

    /**
     * @param int[] $nums
     * @return int[][]
     */
    function subsets($nums) {
        $this->input = $nums;
        return $this->findAll();
    }
}
// @lc code=end

