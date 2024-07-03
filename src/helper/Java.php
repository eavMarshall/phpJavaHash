<?php

namespace App\helper;

use function mb_ord;
use function mb_strlen;
use function mb_substr;

class Java
{
    /**
     * PHP implementation of https://docs.oracle.com/javase/7/docs/api/java/lang/String.html#hashCode()
     *
     * Java strings are always utf-16
     * https://stackoverflow.com/questions/43482364/java-implementation-of-phps-ord-yields-different-results-for-chars-beyond-as
     *
     * @param string $s
     * @return int
     */
    public static function javaStringHashCode(string $s): int
    {
        /*
            // java implementation
            public int hashCode() {
                int h = hash;
                if (h == 0 && value.length > 0) {
                    char val[] = value;

                    for (int i = 0; i < value.length; i++) {
                        h = 31 * h + val[i];
                    }
                    hash = h;
                }
                return h;
            }
        */
        $h = 0;
        $bitmask32 = 0xFFFFFFFF; // 32-bit mask to emulate 32-bit int overflow behavior
        $maxInt32 = 0x7FFFFFFF; // max value for a 32-bit signed integer
        $utf16Str = mb_convert_encoding($s, 'UTF-16', 'UTF-8');
        $n = strlen($utf16Str) / 2; // each UTF-16 character is 2 bytes

        for ($i = 0; $i < $n; $i++) {
            // mb_ord doesn't work for emojis, found this hack instead
            $asciiCode = (ord($utf16Str[$i * 2]) << 8) + ord($utf16Str[$i * 2 + 1]);
            // h = 31 * h + val[i];
            $h = (31 * $h + $asciiCode) & $bitmask32;
        }

        // adjust for negative values as Java hashCode can return negative numbers
        if ($h > $maxInt32) {
            $h -= 0x100000000;
        }

        return $h;
    }
}
