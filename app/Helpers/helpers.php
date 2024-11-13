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
