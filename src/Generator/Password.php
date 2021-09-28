<?php
/**
 * @author      Pierre-Henry Soria <hi@ph7.me>
 * @copyright   (c) 2021, Pierre-Henry Soria
 * @license     MIT License; <https://opensource.org/licenses/MIT>
 */

namespace PH7\Generator;

class Password
{
    const DEFAULT_LENGTH = 12;
    const SPECIAL_CHARACTERS = ['-', '_', '~', '|', '%', '^', '!', '$', '#', '@', '?'];

    /**
     * Generate password.
     *
     * @param int $iLength
     * @param bool $bSpecialCharacters
     *
     * @return string
     */
    public static function generate($iLength = self::DEFAULT_LENGTH, $bSpecialCharacters = true)
    {
        $sWord = '';
        $aSpecialChars = $bSpecialCharacters ? self::SPECIAL_CHARACTERS : [];

        $aKeys = array_merge(
            range(0, 9),
            range('a', 'z'),
            range('Z', 'Z'),
            $aSpecialChars
        );

        for ($iAmount = 0; $iAmount < $iLength; $iAmount++) {
            $sWord .= $aKeys[array_rand($aKeys)];
        }

        return $sWord;
    }
}
