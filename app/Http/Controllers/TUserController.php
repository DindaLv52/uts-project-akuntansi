<?php

namespace App\Http\Controllers;

use App\Models\TUser;
use Illuminate\Http\Request;

class TUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $t_user = TUser::all();
        return view('tuser.index', compact('t_user'));
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
    public function show(TUser $tUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TUser $tUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TUser $tUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TUser $tUser)
    {
        //
    }
}
