<?php

namespace App\Http\Classes\RestApiResponse;

class Response400 extends Response
{
    private static int $status = 400;

   public static function get(array $message, array $body)
    {
        $responseArray = [
            'message' => $message,
            'body' => $body
        ];
        return response()->json($responseArray,self::$status);
    }

}
