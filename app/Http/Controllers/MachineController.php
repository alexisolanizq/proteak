<?php

namespace App\Http\Controllers;

use App\Http\Requests\MachineRequest;
use App\Models\Machine;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'machines' => Machine::paginate()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MachineRequest $request)
    {
        $machine = new Machine($request->validated());
        $machine->slug = Str::slug($request->model);
        $machine->save();

        return $machine;
    }

    /**
     * Display the specified resource.
     */
    public function show(Machine $machine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Machine $machine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MachineRequest $request, Machine $machine)
    {
        return $machine->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Machine $machine)
    {
        //
    }
}
