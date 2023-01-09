<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommandRequest;
use App\Http\Resources\CommandResource;
use App\Models\Commands;
use Illuminate\Http\Request;

class CommandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CommandResource::collection(Commands::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommandRequest $request)
    {
        $command = Commands::create($request->validated());
        return new CommandResource($command);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commands  $commands
     * @return \Illuminate\Http\Response
     */
    public function show(Commands $command)
    {
        return new CommandResource($command);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commands  $commands
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commands $command)
    {
        $command->update($request->validated());
        return new CommandResource($command);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commands  $commands
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commands $command)
    {
        $command->delete();
        return response()->noContent();
    }
}
