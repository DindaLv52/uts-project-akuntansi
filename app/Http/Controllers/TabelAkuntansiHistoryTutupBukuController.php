<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiHistoryTutupBuku;
use Illuminate\Http\Request;

class TabelAkuntansiHistoryTutupBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabel_akuntansi_history_tutup_buku = TabelAkuntansiHistoryTutupBuku::all();
        return view("tabelakuntansihistorytutupbuku.index", compact("tabel_akuntansi_history_tutup_buku"));
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
    public function show(TabelAkuntansiHistoryTutupBuku $tabelAkuntansiHistoryTutupBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TabelAkuntansiHistoryTutupBuku $tabelAkuntansiHistoryTutupBuku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TabelAkuntansiHistoryTutupBuku $tabelAkuntansiHistoryTutupBuku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TabelAkuntansiHistoryTutupBuku $tabelAkuntansiHistoryTutupBuku)
    {
        //
    }
}
