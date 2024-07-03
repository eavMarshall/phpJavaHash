<?php

namespace App\helper;

use function mb_convert_encoding;
use function ord;
use function strlen;

class Java
{
    /**
     * PHP implementation of https://docs.oracle.com/javase/7/docs/api/java/lang/String.html#hashCode()
     *
     * @param string $s
     * @return int
     */
    public static function javaStringHashCode(string $s): int
    {
        $h = 0;
        $utf16Str = mb_convert_encoding($s, 'UTF-16', 'UTF-8');
        $n = strlen($utf16Str) / 2; // each UTF-16 character is 2 bytes

        for ($i = 0; $i < $n; $i++) {
            // h = 31 * h + val[i]; // java implementation
            $h = self::emulate32BitOverflow(31 * $h + self::getAsciiCode($utf16Str, $i));
        }

        return self::adjustForSignInt($h);
    }

    /**
     * 32-bit mask to emulate 32-bit int overflow behavior
     * @param int $hash
     * @return int
     */
    private static function emulate32BitOverflow(int $hash): int
    {
        return $hash & 0xFFFFFFFF;
    }

    /**
     * Get ascii code for a char in an utf-16 string at position i
     * this is a workaround for mb_ord not working for emojis
     * @param string $utf16Str utf-16 string
     * @param int $i position of target char in string
     * @return int the 16-bit Unicode code point of the character
     */
    private static function getAsciiCode(string $utf16Str, int $i): int
    {
        $asciiOfFirstByte = ord($utf16Str[$i * 2]) << 8;
        $asciiOfSecondByte = ord($utf16Str[$i * 2 + 1]);

        return $asciiOfFirstByte + $asciiOfSecondByte;
    }

    /**
     * adjust for negative values as Java hashCode can return negative numbers
     * @param int $h
     * @return int
     */
    private static function adjustForSignInt(int $h): int
    {
        $maxInt32 = 0x7FFFFFFF; // max value for a 32-bit signed integer
        if ($h > $maxInt32) {
            return $h - 0x100000000;
        }
        return $h;
    }
}
