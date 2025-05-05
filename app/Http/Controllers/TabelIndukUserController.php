<?php

namespace App\Http\Controllers;

use App\Models\TabelIndukUser;
use Illuminate\Http\Request;

class TabelIndukUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabel_induk_user = TabelIndukUser::all();
        return view('tabelindukuser.index', compact('tabel_induk_user'));
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
    public function show(TabelIndukUser $tabelIndukUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TabelIndukUser $tabelIndukUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TabelIndukUser $tabelIndukUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TabelIndukUser $tabelIndukUser)
    {
        //
    }
}
