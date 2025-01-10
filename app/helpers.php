<?php

if (!function_exists('formatNumber')) {
    function formatNumber($num)
    {
        if ($num >= 1000 && $num < 1000000) {
            return number_format($num / 1000, 1) . 'K';
        } else if ($num >= 1000000 && $num < 1000000000) {
            return number_format($num / 1000000, 1) . 'M';
        } else if ($num >= 1000000000) {
            return number_format($num / 1000000000, 1) . 'B';
        } else {
            return $num;
        }
    }
}
