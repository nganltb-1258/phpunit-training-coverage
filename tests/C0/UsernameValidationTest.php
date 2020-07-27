<?php

namespace Tests\C0;

use App\UsernameValidation;
use PHPUnit\Framework\TestCase;

class UsernameValidationTest extends TestCase
{
    public function test_return_false_when_user_name_lt_min_length_is_valid_test()
    {
        $sut = new UsernameValidation;

        $actualResult = $sut->isValid('');

        $this->assertFalse($actualResult);
        $this->assertEquals('Minimum length is 1', $sut->getMessage());
    }

    public function test_return_false_when_user_name_gt_max_length_is_valid_test()
    {
        $sut = new UsernameValidation;

        $actualResult = $sut->isValid('012345678901234567890');

        $this->assertFalse($actualResult);
        $this->assertEquals('Maximum length is 20', $sut->getMessage());
    }

    public function test_return_false_when_user_name_not_allow_dash_begin_or_end_is_valid_test()
    {
        $sut = new UsernameValidation;

        $actualResult = $sut->isValid('-1234');

        $this->assertFalse($actualResult);
        $this->assertEquals('- cannot appear at begin or end of name', $sut->getMessage());
    }

    public function test_return_false_when_user_name_not_allow_double_dash_is_valid_test()
    {
        $sut = new UsernameValidation;

        $actualResult = $sut->isValid('1--2');

        $this->assertFalse($actualResult);
        $this->assertEquals('Only single - is allowed', $sut->getMessage());
    }

    public function test_return_false_when_user_name_not_allow_invalid_character_is_valid_test()
    {
        $sut = new UsernameValidation;

        $actualResult = $sut->isValid('@');

        $this->assertFalse($actualResult);
        $this->assertEquals('Invalid character. Use only letters, digits and -', $sut->getMessage());
    }

    public function test_return_true_when_user_name_valid_is_valid_test()
    {
        $sut = new UsernameValidation;

        $actualResult = $sut->isValid('lethibaongan');

        $this->assertTrue($actualResult);
    }
}
