# Hash Code Comparison for java to php

This project is designed to compare hash codes generated by Java and PHP implementations for a given set of strings. The goal is to ensure that both implementations produce identical hash codes for the same input strings.

Test output

    PHPUnit 9.6.19 by Sebastian Bergmann and contributors.
    
    ...............................................................  63 / 484 ( 13%)
    ............................................................... 126 / 484 ( 26%)
    ............................................................... 189 / 484 ( 39%)
    ............................................................... 252 / 484 ( 52%)
    ............................................................... 315 / 484 ( 65%)
    ............................................................... 378 / 484 ( 78%)
    ............................................................... 441 / 484 ( 91%)
    ...........................................                     484 / 484 (100%)
    
    Time: 00:38.138, Memory: 6.00 MB
    
    OK (484 tests, 484 assertions)

Java implementation to be converted to php


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
