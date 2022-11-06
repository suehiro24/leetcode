<?php
declare(strict_types=1);

// phpunit.xml にて読み込み済み
// require_once('../../../vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_abc()
    {
        $this->assertTrue(true, 'example test case');
    }
}
