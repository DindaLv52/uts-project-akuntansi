<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiHistoryBackup;
use Illuminate\Http\Request;

class TabelAkuntansiHistoryBackupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabel_akuntansi_history_backup = TabelAkuntansiHistoryBackup::all();
        return view("tabelakuntansihistorybackup.index", compact("tabel_akuntansi_history_backup"));
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
    public function show(TabelAkuntansiHistoryBackup $tabelAkuntansiHistoryBackup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TabelAkuntansiHistoryBackup $tabelAkuntansiHistoryBackup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TabelAkuntansiHistoryBackup $tabelAkuntansiHistoryBackup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TabelAkuntansiHistoryBackup $tabelAkuntansiHistoryBackup)
    {
        //
    }
}
