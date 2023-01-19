<?php 

namespace ViriusApi\Viri;


class ApiFormatter{
    protected static $response = [
        'GET' => null,
        'status' => null,
        'data' => null,
    ];

    public static function createApi( $GET , $status , $data = null ) {
        self::$response['GET'] = $GET;
        self::$response['status'] = $status;
        self::$response['data'] = $data;

        return response()->json(self::$response, self::$response['GET']);
    }
}