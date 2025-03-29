<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{
    /**
     * Return a successful JSON response.
     *
     * @param mixed $data
     * @param int $code
     * @return \Illuminate\Http\Response
     */
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response($data, $code)->header('Content-Type', 'application/json');
    }

    /**
     * Return an error JSON response.
     *
     * @param mixed $message
     * @param int $code
     * @return \Illuminate\Http\Response
     */
    public function errorResponse($message, $code)
    {
        return response()->json([
            'error' => $message,
            'code' => $code
        ], $code);
    }

    /**
     * Return an error message response.
     *
     * @param mixed $message
     * @param int $code
     * @return \Illuminate\Http\Response
     */
    public function errorMessage($message, $code)
    {
        return response($message, $code)->header('Content-Type', 'application/json');
    }
}

