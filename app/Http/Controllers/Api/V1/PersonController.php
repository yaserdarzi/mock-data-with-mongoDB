<?php

namespace App\Http\Controllers\Api\V1;

use App\Exceptions\ApiException;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends ApiController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->respond(DB::connection('mongodb')->collection('person')->get());
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
        if (DB::connection('mongodb')->collection('person')->where('code', $request->input('code'))->exists())
            throw new ApiException(
                ApiException::EXCEPTION_BAD_REQUEST_400,
                'کاربر گرامی کد تکراری می باشد'
            );
        $data = $request->all();
        $data['id'] = (string)(DB::connection('mongodb')->collection('person')->count() + 1);
        return $this->respond(DB::connection('mongodb')->collection('person')->insertGetId($data));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        return $this->respond(DB::connection('mongodb')->collection('person')->where('id', $id)->first());
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
        if (DB::connection('mongodb')->collection('person')->where('id', '!=', $id)->where('code', $request->input('code'))->exists())
            throw new ApiException(
                ApiException::EXCEPTION_BAD_REQUEST_400,
                'کاربر گرامی کد تکراری می باشد'
            );
        DB::connection('mongodb')->collection('person')->where('id', $id)->update($request->all());
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
        DB::connection('mongodb')->collection('person')->where('code', $id)->delete();
        return $this->respond('');
    }

    ///////////////////public function///////////////////////
}
