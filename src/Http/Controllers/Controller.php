<?php

namespace Laymont\Shicontstand\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function responseProhibited(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => 'Prohibited Resource'
        ], 403);
    }
}
