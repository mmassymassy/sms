<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PayementRequest;
use App\Http\Resources\PayementResource;
use App\Http\Resources\SheetResource;
use App\Models\Payement;
use App\Models\Sheet;
use Illuminate\Http\Request;

class PayementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PayementResource::collection(Payement::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payement = Payement::create($request->validated());
        return new PayementResource($payement);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payement  $payement
     * @return \Illuminate\Http\Response
     */
    public function show(Payement $payement)
    {
        return new PayementResource($payement);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payement  $payement
     * @return \Illuminate\Http\Response
     */
    public function update(PayementRequest $request, Payement $payement)
    {
        $payement->update($request->validated());
        return new PayementResource($payement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payement  $payement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payement $payement)
    {
        $payement->delete();
        return response()->noContent();
    }
}
