<?php

/**
 * Number Format Precision.
 *
 * @param string|null $number
 * @param int $precision
 * @param string $return
 * @return float|int|string
 */
function number_format_precision(?string $number, int $precision = 0, string $return = '')
{
    if (is_null($number)) {
        $number = 0.00;
    }

    if (empty($number)) {
        $number = 0.00;
    }

    switch ($return) {
        case 'int':
        case 'integer':
            return intval($number * ($p = pow(10, $precision))) / $p;
        case 'string':
            return substr(number_format($number, $precision + 1, '.', ''), 0, -1);
        default:
            return $return;
    }
}
