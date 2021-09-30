<?php
/**
 * @author      Pierre-Henry Soria <hi@ph7.me>
 * @copyright   (c) 2021, Pierre-Henry Soria
 * @license     MIT License; <https://opensource.org/licenses/MIT>
 */

namespace PH7\Generator\Test\Unit;

use PH7\Generator\Password;
use PHPUnit\Framework\TestCase;

final class PasswordTest extends TestCase
{
    public function testPasswordWithSpecifiedLength()
    {
        $iLength = 8;
        $sPassword = Password::generate($iLength);

        $this->assertSame($iLength, strlen($sPassword));
    }

    public function testPasswordWithDefaultLength()
    {
        $sPassword = Password::generate();

        $this->assertSame(Password::DEFAULT_LENGTH, strlen($sPassword));
    }

    public function testPasswordIsString()
    {
        $sPassword = Password::generate();

        $this->assertTrue(is_string($sPassword));
    }

    public function testPasswordWithSpecialCharacters()
    {
        $sPassword = Password::generate(Password::DEFAULT_LENGTH, true);

        $this->assertSame(Password::DEFAULT_LENGTH, strlen($sPassword));
        $this->assertTrue($this->doesContainSpecialChars($sPassword));
    }

    public function testPasswordWithoutSpecialCharacters()
    {
        $sPassword = Password::generate(Password::DEFAULT_LENGTH, false);

        $this->assertSame(Password::DEFAULT_LENGTH, strlen($sPassword));
        $this->assertFalse($this->doesContainSpecialChars($sPassword));
    }

    /**
     * @param string $sPassword
     *
     * @return bool
     */
    private function doesContainSpecialChars($sPassword)
    {
        $aSpecialChars = ['-', '_', '~', '|', '%', '^', '!', '$', '#', '@', '?'];

        foreach (str_split($sPassword) as $sCharacter) {
            if (in_array($sCharacter, $aSpecialChars, true)) {
                return true;
            }
        }
        return false;
    }
}
