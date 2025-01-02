<?php

if (!function_exists('getEncodedVideoUrl')) {
    /**
     * Generate a full URL for a video file and URL-encode it.
     *
     * @param  string  $filename
     * @return string
     */
    function getEncodedVideoUrl($filename)
    {
        $baseUrl = 'https://himayapotretstudio.com/assets/vid/';
        return $baseUrl . $filename;
        // return $baseUrl . urlencode($filename);
    }
}

if (!function_exists('formatResponse')) {
    function formatResponse($status, $message, $data = null, $errors = null, $httpCode = 200)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
            'errors' => $errors
        ], is_int($httpCode) ? $httpCode : 500);
    }
}

if (!function_exists('format_price_idr')) {
    function format_price_idr($amount)
    {
        return 'Rp ' . number_format($amount, 0, ',', '.');
    }
}

if (!function_exists('format_indonesian_date')) {
    function format_indonesian_date($date)
    {
        $days = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => "Jum'at",
            'Saturday' => 'Sabtu'
        ];

        $months = [
            'Jan' => 'Jan',
            'Feb' => 'Feb',
            'Mar' => 'Mar',
            'Apr' => 'Apr',
            'May' => 'Mei',
            'Jun' => 'Jun',
            'Jul' => 'Jul',
            'Aug' => 'Agu',
            'Sep' => 'Sep',
            'Oct' => 'Okt',
            'Nov' => 'Nov',
            'Dec' => 'Des'
        ];

        // Convert to DateTime object
        $dateObject = \Carbon\Carbon::parse($date);

        $dayName = $days[$dateObject->format('l')];
        $monthName = $months[$dateObject->format('M')];

        return "{$dayName}, " . $dateObject->format('d') . " {$monthName} " . $dateObject->format('Y');
    }
}

if (!function_exists('countDisc')) {
    function countDisc($price, $discount, $max)
    {
        $totalDiscount = $price * $discount/100;
        if($price > $max){
            $finalPrice = $price - $max;
            return $finalPrice;
        }
        $finalPrice = $price - $totalDiscount;
        return $finalPrice;
    }
}
