<?php

namespace Tests\C1;

use App\DumpExample;
use PHPUnit\Framework\TestCase;

class DumpExampleTest extends TestCase
{
    public function test_return_1_when_input_true()
    {
        $sut = new DumpExample;

        $actualResult = $sut->examine(true);

        $expectedResult = 1;
        $this->assertEquals($expectedResult, $actualResult);
    }

    public function test_return_0_when_input_false()
    {
        $sut = new DumpExample;

        // Cause by division 0
        $this->expectError();

        $sut->examine(false);
    }
}
