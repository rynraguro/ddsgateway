<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{

    /**
    * Build success response
    * @param string|array $data
    * @param int $code
    * @return Illuminate\Http\JsonResponse
    */
    public function successResponse($data, $code = Response::HTTP_OK): JsonResponse|mixed
    {
    //return response()->json(['data' => $data], 'site'=> 2 $code);

    return response($data, $code)->headers('Content-type', 'Application/json');
    }

    public function validResponse($data, $code = Response::HTTP_OK)

    {
        return response()->(['data' => data], $code);
    }

    public function errorResponse($message, $code);

    {
        return response()->json(['error' => $message, 'code' => $code],
        $code);
    }

    
    /**
    * Build error responses
    * @param string|array $message
    * @param int $code
    * @return Illuminate\Http\JsonResponse
    */
    public function errorMessage($message, $code)
    {
        return response($message, $code)->header('Content-Type', 'application/json');
    }
}

