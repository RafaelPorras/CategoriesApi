<?php

namespace App\Traits;
use Illuminate\Http\Response;

trait ApiResponser{

    /**
     * Build a success response
     * @param string|array $data
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function successResponse($data,$code = Response::HTTP_OK){
        return response()->json(['data'=>$data], $code);
    }

    /**
     * Build a error response
     * @param string|array $message
     * @param int $code
     * @return Illuminate\Http\jsonResponse
     */
    public function errorResponse($message,$code){
        return response()->json(['message'=>$message,'code'=> $code],$code);
    }
}