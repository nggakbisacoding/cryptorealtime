<?php

namespace App\Http\Controllers;

use App\Models\Komik;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreKomikRequest;
use App\Http\Requests\UpdateKomikRequest;

class KomikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("komik.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("komik.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKomikRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Komik $komik)
    {
        $users = DB::table('komik')->select('komik_name','komik_desc','komik_img', 'komik_date', 'komik_author')->get();

        return view('komik.show', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Komik $komik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKomikRequest $request, Komik $komik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Komik $komik)
    {
        //
    }
}
