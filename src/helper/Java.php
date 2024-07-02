<?php

namespace App\helper;

use function mb_ord;
use function mb_strlen;
use function mb_substr;

class Java
{
    /**
     * PHP implementation of https://docs.oracle.com/javase/7/docs/api/java/lang/String.html#hashCode()
     * for utf8 strings
     *
     * Java strings are always utf-16
     * https://stackoverflow.com/questions/43482364/java-implementation-of-phps-ord-yields-different-results-for-chars-beyond-as
     *
     * This would be better converting to UTF-16BE to accommodate unicode chars
     *
     * @param string $s
     * @return int
     */
    public static function javaStringHashCode($s)
    {
        $hash = 0;
        $bitmask32 = 0xFFFFFFFF; // 32-bit mask to emulate 32-bit int overflow behavior
        $maxInt32 = 0x7FFFFFFF; // max value for a 32-bit signed integer
        $n = mb_strlen($s, 'UTF-8');

        for ($i = 0; $i < $n; $i++) {
            // $s[$i] accesses a single byte, mb_substr will get whole character
            $char = mb_substr($s, $i, 1, 'UTF-8');
            $code = mb_ord($char, 'UTF-8');
            $hash = (31 * $hash + $code) & $bitmask32;
        }

        // adjust for negative values as Java hashCode can return negative numbers
        if ($hash > $maxInt32) {
            $hash -= 0x100000000;
        }

        return $hash;
    }
}
