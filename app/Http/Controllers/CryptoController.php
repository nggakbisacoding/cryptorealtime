<?php

namespace App\Http\Controllers;

use App\Models\Crypto;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCryptoRequest;
use App\Http\Requests\UpdateCryptoRequest;

class CryptoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        return view("crypto");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCryptoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Crypto $crypto)
    {
        $users = DB::table('cubers')->select('Ranking','Name','Country', 'Competition')->get();

        return view('admin.show', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crypto $crypto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCryptoRequest $request, Crypto $crypto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crypto $crypto)
    {
        //
    }
}
