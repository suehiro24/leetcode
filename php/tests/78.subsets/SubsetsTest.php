<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Subsets\Solution;

class SubsetsTest extends TestCase
{
    /**
     * - [x] 正数の配列を受け付ける
     * - [x] 0 <= x < 2^n を満たす整数値を受けて任意の部分集合を1つ取得する
     *   - [x] 0を受けて空集合を取得する
     *   - [x] 1を受けて1つ目の要素だけを含む部分集合を取得する
     *   - [x] 2を受けて2つ目の要素だけを含む部分集合を取得する
     *   - [x] 3を受けて1つ目と2つ目の要素を含む部分集合を取得する
     *   - [x] 0以上かつ2のn乗未満に含まれない数を受けると例外を送出する
     * - [x] ビット全探索ですべての部分集合を取得する
     * - [ ] 重複する部分集合は含んではいけない
     * - [ ] 部分集合の配列の順番は考慮しない
     */

    public function test_正数の配列を入力して受け付ける()
    {
        // 3. 準備 (Arrage, Given)
        $solution = new Solution();

        // 2. 実行 (Act, When)
        $solution->input = [1, 2];

        // 1. 検証 (Assert, Then)
        $this->assertEquals(expected: [1, 2], actual: $solution->input);

        // 4. 後片付け
    }

    public function test_0を受けて空集合を取得する()
    {
        // 3. 準備 (Arrage, Given)
        $solution = new Solution();

        // 2. 実行 (Act, When)
        $solution->input = [1, 2];
        $actual = $solution->findOne(0);

        // 1. 検証 (Assert, Then)
        $this->assertEquals(expected: [], actual: $actual);

        // 4. 後片付け
    }

    public function test_1を受けて1つ目の要素だけを含む部分集合を取得する()
    {
        // 3. 準備 (Arrage, Given)
        $solution = new Solution();

        // 2. 実行 (Act, When)
        $solution->input = [1, 2];
        $actual = $solution->findOne(1);

        // 1. 検証 (Assert, Then)
        $this->assertEquals(expected: [1], actual: $actual);

        // 4. 後片付け
    }

    public function test_2を受けて2つ目の要素だけを含む部分集合を取得する()
    {
        // 3. 準備 (Arrage, Given)
        $solution = new Solution();

        // 2. 実行 (Act, When)
        $solution->input = [1, 2];
        $actual = $solution->findOne(2);

        // 1. 検証 (Assert, Then)
        $this->assertEquals(expected: [2], actual: $actual);

        // 4. 後片付け
    }

    public function test_3を受けて1つ目と2つ目の要素を含む部分集合を取得する()
    {
        // 3. 準備 (Arrage, Given)
        $solution = new Solution();

        // 2. 実行 (Act, When)
        $solution->input = [1, 2];
        $actual = $solution->findOne(3);

        // 1. 検証 (Assert, Then)
        $this->assertEquals(expected: [1, 2], actual: $actual);

        // 4. 後片付け
    }

    public function test_0以上かつ2のn乗未満に含まれない数を受けると例外を送出する()
    {
        // 3. 準備 (Arrage, Given)
        $solution = new Solution();

        // 1. 検証 (Assert, Then)
        $this->expectException(Exception::class);

        // 2. 実行 (Act, When)
        $solution->input = [1, 2];
        $solution->findOne(-1);

        // 4. 後片付け
    }

    public function test_ビット全探索ですべての部分集合を取得する()
    {
        // 3. 準備 (Arrage, Given)
        $solution = new Solution();

        // 2. 実行 (Act, When)
        $solution->input = [1, 2];
        $actual = $solution->findAll();

        // 1. 検証 (Assert, Then)
        $this->assertEquals(
            expected: [[], [1], [2], [1,2]],
            actual: $actual
        );

        // 4. 後片付け
    }
}
