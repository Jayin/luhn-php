<?php

namespace Jayin;

class CCID {

    /**
     * 获取解密后的CCID
     *
     * @param $ccid
     * @return int
     */
    public static function getRealCCID($ccid) {
        $len = strlen($ccid);
        $sum = 0;
        $position = 2;
        for ($index = $len - 2; $index >= 0; $index--) {
            if ($position % 2 == 0) {
                $num = $ccid[$index] * 2;
                if ($num > 9) {
                    $num -= 9;
                }
            } else {
                $num = $ccid[$index];
            }
            $sum += $num;
            $position++;
        }

        $result =  10 - $sum % 10;
        return substr($ccid, 0, $len -1) . $result;
    }
}