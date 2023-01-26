<?php

namespace App\Http\Controllers;

use App\Models\ProductLinks;
use App\Http\Requests\StoreProductLinksRequest;
use App\Http\Requests\UpdateProductLinksRequest;

class ProductLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProductLinksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductLinksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductLinks  $productLinks
     * @return \Illuminate\Http\Response
     */
    public function show(ProductLinks $productLinks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductLinks  $productLinks
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductLinks $productLinks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductLinksRequest  $request
     * @param  \App\Models\ProductLinks  $productLinks
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductLinksRequest $request, ProductLinks $productLinks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductLinks  $productLinks
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductLinks $productLinks)
    {
        //
    }
}
