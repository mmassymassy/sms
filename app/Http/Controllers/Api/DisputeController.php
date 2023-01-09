<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DisputeRequest;
use App\Http\Resources\DisputeResource;
use App\Models\Dispute;
use Illuminate\Http\Request;

class DisputeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DisputeResource::collection(Dispute::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dispute = Dispute::create($request->validated());
        return new DisputeResource($dispute);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dispute  $dispute
     * @return \Illuminate\Http\Response
     */
    public function show(Dispute $dispute)
    {
        return new DisputeResource($dispute);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dispute  $dispute
     * @return \Illuminate\Http\Response
     */
    public function update(DisputeRequest $request, Dispute $dispute)
    {
        $dispute->update($request->validated());
        return new DisputeResource($dispute);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dispute  $dispute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dispute $dispute)
    {
        $dispute->delete();
        return response()->noContent();
    }
}
