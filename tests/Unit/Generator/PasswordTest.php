<?php
/**
 * @author      Pierre-Henry Soria <hi@ph7.me>
 * @copyright   (c) 2021, Pierre-Henry Soria
 * @license     MIT License; <https://opensource.org/licenses/MIT>
 */

namespace PH7\Generator\Test\Unit;

use PH7\Generator\Password;
use PHPUnit_Framework_TestCase;

final class PasswordTest extends PHPUnit_Framework_TestCase
{
    public function testPasswordLength()
    {
        $iLength = 8;
        $sPassword = Password::generate($iLength);

        $this->assertSame($iLength, strlen($sPassword));
    }

    public function testPasswordIsString()
    {
        $sPassword = Password::generate();

        $this->assertTrue(is_string($sPassword));
    }
}
