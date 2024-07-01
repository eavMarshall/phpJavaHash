<?php

namespace App\helper;

class Java
{
    /**
     * php implementation of https://docs.oracle.com/javase/7/docs/api/java/lang/String.html#hashCode()
     * @param $s
     * @return int
     */
    public static function javaStringHashCode($s)
    {
        $hash = 0;
        $bitmask32 = 0xFFFFFFFF; // 32-bit mask to emulate 32-bit int overflow behavior
        $maxInt32 = 0x7FFFFFFF; // max value for a 32-bit signed integer
        $n = strlen($s);

        for ($i = 0; $i < $n; $i++) {
            //s[0]*31^(n-1) + s[1]*31^(n-2) + ... + s[n-1]
            $hash = (31 * $hash + ord($s[$i])) & $bitmask32;
        }

        // Adjust for negative values as Java hashCode can return negative numbers
        if ($hash > $maxInt32) {
            $hash -= 0x100000000;
        }

        return $hash;
    }
}