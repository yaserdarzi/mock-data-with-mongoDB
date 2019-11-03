<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function __construct()
    {
        //
    }

    /**
     * @param array $data
     * @param array $meta
     * @param int $status
     *
     * @return mixed
     */
    public function respond($data = [], $status = 200)
    {
        return response()->json($data, $status);
    }
}
