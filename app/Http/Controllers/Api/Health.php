<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class Health extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return response()->json([
            'message' => 'ok',
            'status' => 200
        ], 200, []);
    }
}
