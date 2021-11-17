<?php

namespace App\Traits;

trait ApiResponse
{
    public function ApiResponse($response)
   {
       $data = $response->json();
        if( $response->failed() ||   $response->clientError() ||   $response->serverError()) {
            return response()->json($data, $data['cod']);
        }
        return response()->json([
            'data' => $data,
        ], 200);
    }

    public function SuccessResponse($message, $code)
    {
        return response()->json(['message' => $message], $code);
    }
}
