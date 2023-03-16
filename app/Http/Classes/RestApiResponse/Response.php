<?php

namespace App\Http\Classes\RestApiResponse;

use Illuminate\Http\RestApiResponse;

abstract class Response
{
    private static int $status;
 
    abstract public static function get(array $message, array $body);

}
