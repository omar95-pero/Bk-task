<?php

namespace App\Traits;

trait ApiResponseTrait
{

    public function sendError($message, $data = null, $code = 400)
    {

        $body["status"] = "error";
        $body["message"] = $message;
        $body["data"] = $data;
        $body["code"] = $code;

        return Response()->json($body, 200);
    }

    public function sendSuccess($message, $data = null)
    {

        $body["status"] = "success";
        $body["message"] = $message;
        $body["data"] = $data;
        $body["code"] = 200;
        return Response()->json($body, 200);
    }
}
