<?php

/**
 * author: Jayin <tonjayin@gmail.com>
 */

namespace Jayin;

class Luhn {

    /**
     * 解析字符串，返回完整的字符串
     *
     * @param string $string
     * @return string
     * @throws \Exception
     */
    public static function parser($string) {
        $len = strlen($string);
        if($len < 2){
            throw new \Exception('the length of the string should be bigger than 2');
        }

        $sum = 0;
        $position = 2;
        for ($index = $len - 2; $index >= 0; $index--) {
            if ($position % 2 == 0) {
                $num = $string[$index] * 2;
                if ($num > 9) {
                    $num -= 9;
                }
            } else {
                $num = $string[$index];
            }
            $sum += $num;
            $position++;
        }

        $result = 10 - $sum % 10;

        return substr($string, 0, $len - 1) . $result;
    }

}