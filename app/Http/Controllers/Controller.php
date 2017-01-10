<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function json_success($message = 'Success', $data = array(), $status = 200) {
        $response = array(
            'data' => $data,
            'error' => FALSE,
            'status' => $status,
            'message' => $message
        );
        return response($response, $status);
    }
    
    public function json_failure($message = 'Failure', $data = array(), $status = 404) {
        $response = array(
            'data' => $data,
            'error' => TRUE,
            'status' => $status,
            'message' => $message
        );
        return response($response, $status);
    }
}
