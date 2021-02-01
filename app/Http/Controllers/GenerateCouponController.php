<?php

namespace App\Http\Controllers;

use App\Models\Generate_Coupon;
use Illuminate\Http\Request;

class GenerateCouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('generate_coupon.list');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Generate_Coupon  $generate_Coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Generate_Coupon $generate_Coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Generate_Coupon  $generate_Coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Generate_Coupon $generate_Coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Generate_Coupon  $generate_Coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generate_Coupon $generate_Coupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Generate_Coupon  $generate_Coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generate_Coupon $generate_Coupon)
    {
        //
    }
}
