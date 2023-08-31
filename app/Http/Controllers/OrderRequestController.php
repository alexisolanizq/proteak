<?php

namespace App\Http\Controllers;

use App\Models\OrderRequest;
use Illuminate\Http\Request;

class OrderRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'orders' => OrderRequest::paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderRequest $orderRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderRequest $orderRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderRequest $orderRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderRequest $orderRequest)
    {
        //
    }
}
