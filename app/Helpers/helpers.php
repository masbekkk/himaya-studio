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
