<?php

namespace App\Http\Controllers\Api\V1;

use App\Exceptions\ApiException;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CurrencyController extends ApiController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $currency = DB::connection('mongodb')->collection('currency');
        if ($request->input('search')) {
            $search = $request->input('search');
            $currency = $currency->where('title', 'LIKE', "%$search%");
        }
        if ($request->input('except'))
            $currency = $currency->where('title', '!=', $request->input('except'));
        $currency = $currency->get();
        return $this->respond($currency);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['id'] = (string)(DB::connection('mongodb')->collection('currency')->count() + 1);
        return $this->respond(DB::connection('mongodb')->collection('currency')->insertGetId($data));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        return $this->respond(DB::connection('mongodb')->collection('currency')->where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::connection('mongodb')->collection('currency')->where('id', $id)->update($request->all());
        return $this->respond('');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        DB::connection('mongodb')->collection('currency')->where('title', $id)->delete();
        return $this->respond('');
    }

    ///////////////////public function///////////////////////
}
