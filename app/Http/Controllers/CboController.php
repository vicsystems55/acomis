<?php

namespace App\Http\Controllers;

use App\Cbo;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllCBOs()
    {
        //
        $cbos = Cbo::all();

        return $cbos;
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

        $cbo = Cbo::create($request->all());

        $user = User::create([
            'name' => $request->cbo_name,
            'email' => $request->email,
            'password' => Hash::make($request->phone),
            'role' => 'hcbo'
        ]);

        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cbo  $cbo
     * @return \Illuminate\Http\Response
     */
    public function show(Cbo $cbo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cbo  $cbo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cbo $cbo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cbo  $cbo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cbo $cbo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cbo  $cbo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cbo $cbo)
    {
        //
    }
}
