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

    /**
     * Generate password.
     *
     * @param int $iLength
     *
     * @return string
     */
    public static function generate($iLength)
    {
        $sWord = '';
        $aSpecialChars = ['-', '_', '~', '|', '%', '^', '!', '$', '#', '@', '?'];
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
