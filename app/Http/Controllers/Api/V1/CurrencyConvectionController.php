<?php

namespace App\Http\Controllers\Api\V1;

use App\Exceptions\ApiException;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CurrencyConvectionController extends ApiController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->respond(DB::connection('mongodb')->collection('currencyConvection')->get());
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
        if (DB::connection('mongodb')->collection('currencyConvection')->where(['date' => $request->input('date'), 'baseCurrency' => $request->input('baseCurrency'), 'currency' => $request->input('currency')])->exists())
            throw new ApiException(
                ApiException::EXCEPTION_BAD_REQUEST_400,
                'کاربر گرامی تاریخ تکراری می باشد'
            );
        return $this->respond(DB::connection('mongodb')->collection('currencyConvection')->insertGetId($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        return $this->respond(DB::connection('mongodb')->collection('currencyConvection')->where('_id', $id)->first());
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
        if (DB::connection('mongodb')->collection('currencyConvection')->where('_id', '!=', $id)->where(['date' => $request->input('date'), 'baseCurrency' => $request->input('baseCurrency'), 'currency' => $request->input('currency')])->exists())
            throw new ApiException(
                ApiException::EXCEPTION_BAD_REQUEST_400,
                'کاربر گرامی کد تکراری می باشد'
            );
        DB::connection('mongodb')->collection('currencyConvection')->where('_id', $id)->update($request->all());
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
        DB::connection('mongodb')->collection('currencyConvection')->where('_id', $id)->delete();
        return $this->respond('');
    }

    ///////////////////public function///////////////////////
}
