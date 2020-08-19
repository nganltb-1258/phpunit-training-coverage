<?php

 namespace Tests\C2;

use App\ProcessRunner;
use PHPUnit\Framework\TestCase;

class ProcessRunnerTest extends TestCase
{
    public function test_return_2_WHEN_input1_gt_10_input2_div_by_2_input3_div_by_3()
    {
        $sut = new ProcessRunner;

        $actualResult = $sut->run(12, 3);

        $expectedResult = 2;
        $this->assertEquals($expectedResult, $actualResult);
        $this->assertTrue($sut->wasProcess1Called());
        $this->assertFalse($sut->wasProcess2Called());
        $this->assertTrue($sut->wasProcess3Called());
        $this->assertFalse($sut->wasProcess4Called());
    }

    public function test_return_2_WHEN_input1_gt_10_input2_div_by_2_input3_not_div_by_3()
    {
        $sut = new ProcessRunner;

        $actualResult = $sut->run(12, 2);

        $expectedResult = 2;
        $this->assertEquals($expectedResult, $actualResult);
        $this->assertTrue($sut->wasProcess1Called());
        $this->assertFalse($sut->wasProcess2Called());
        $this->assertTrue($sut->wasProcess3Called());
        $this->assertFalse($sut->wasProcess4Called());
    }

    public function test_return_2_WHEN_input1_gt_10_input2_not_div_by_2_input3_div_by_3()
    {
        $sut = new ProcessRunner;

        $actualResult = $sut->run(11, 3);

        $expectedResult = 2;
        $this->assertEquals($expectedResult, $actualResult);
        $this->assertTrue($sut->wasProcess1Called());
        $this->assertFalse($sut->wasProcess2Called());
        $this->assertTrue($sut->wasProcess3Called());
        $this->assertFalse($sut->wasProcess4Called());
    }

    public function test_return_2_WHEN_input1_gt_10_input2_not_div_by_2_input3_not_div_by_3()
    {
        $sut = new ProcessRunner;

        $actualResult = $sut->run(11, 2);

        $expectedResult = 2;
        $this->assertEquals($expectedResult, $actualResult);
        $this->assertTrue($sut->wasProcess1Called());
        $this->assertFalse($sut->wasProcess2Called());
        $this->assertFalse($sut->wasProcess3Called());
        $this->assertTrue($sut->wasProcess4Called());
    }

    public function test_return_2_WHEN_input1_lt_10_input2_div_by_2_input3_div_by_3()
    {
        $sut = new ProcessRunner;

        $actualResult = $sut->run(2, 3);

        $expectedResult = 2;
        $this->assertEquals($expectedResult, $actualResult);
        $this->assertFalse($sut->wasProcess1Called());
        $this->assertTrue($sut->wasProcess2Called());
        $this->assertTrue($sut->wasProcess3Called());
        $this->assertFalse($sut->wasProcess4Called());
    }

    public function test_return_2_WHEN_input1_lt_10_input2_div_by_2_input3_not_div_by_3()
    {
        $sut = new ProcessRunner;

        $actualResult = $sut->run(2, 2);

        $expectedResult = 2;
        $this->assertEquals($expectedResult, $actualResult);
        $this->assertFalse($sut->wasProcess1Called());
        $this->assertTrue($sut->wasProcess2Called());
        $this->assertTrue($sut->wasProcess3Called());
        $this->assertFalse($sut->wasProcess4Called());
    }

    public function test_return_2_WHEN_input1_lt_10_input2_not_div_by_2_input3_div_by_3()
    {
        $sut = new ProcessRunner;

        $actualResult = $sut->run(3, 3);

        $expectedResult = 2;
        $this->assertEquals($expectedResult, $actualResult);
        $this->assertFalse($sut->wasProcess1Called());
        $this->assertTrue($sut->wasProcess2Called());
        $this->assertTrue($sut->wasProcess3Called());
        $this->assertFalse($sut->wasProcess4Called());
    }

    public function test_return_2_WHEN_input1_lt_10_input2_not_div_by_2_input3_not_div_by_3()
    {
        $sut = new ProcessRunner;

        $actualResult = $sut->run(3, 2);

        $expectedResult = 2;
        $this->assertEquals($expectedResult, $actualResult);
        $this->assertFalse($sut->wasProcess1Called());
        $this->assertTrue($sut->wasProcess2Called());
        $this->assertFalse($sut->wasProcess3Called());
        $this->assertTrue($sut->wasProcess4Called());
    }
}
