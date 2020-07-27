<?php

namespace Tests\C0;

use App\ProcessRunner;
use PHPUnit\Framework\TestCase;

class ProcessRunnerTest extends TestCase
{
    public function test_return_2_WHEN_pass_case_1_case_3_run_test()
    {
        $sut = new ProcessRunner;

        $actualResult = $sut->run(12, 1);

        $expectedResult = 2;
        $this->assertEquals($expectedResult, $actualResult);
        $this->assertTrue($sut->wasProcess1Called());
        $this->assertTrue($sut->wasProcess3Called());
        $this->assertFalse($sut->wasProcess2Called());
        $this->assertFalse($sut->wasProcess4Called());
    }

    public function test_return_2_WHEN_pass_case_2_case_4_run_test()
    {
        $sut = new ProcessRunner;

        $actualResult = $sut->run(1, 1);

        $expectedResult = 2;
        $this->assertEquals($expectedResult, $actualResult);
        $this->assertTrue($sut->wasProcess2Called());
        $this->assertTrue($sut->wasProcess4Called());
        $this->assertFalse($sut->wasProcess1Called());
        $this->assertFalse($sut->wasProcess3Called());
    }
}
