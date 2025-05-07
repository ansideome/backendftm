<?php

namespace App\Helpers;

class ResponseFormatter
{
    public static function success(
        $data = null,
        $message = null,
        $code = 200
    ) {
        return response()->json(
            [
                'success' => true,
                'message' => $message,
                'data' => $data,
                'error' => null
            ],
            $code
        );
    }

    public static function error(
        $message = null,
        $errors = null,
        $code = 401
    ) {
        return response()->json(
            [
                'success' => true,
                'message' => $message,
                'data' => null,
                'error' => $errors
            ],
            $code
        );
    }
}
