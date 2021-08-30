<?php

namespace App\Http\Controllers;

use App\Models\Peminjamanalat;
use Illuminate\Http\Request;

class ApialatProyek extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Peminjamanalat::all();
        //return "data ";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $peminjamanalat = new Peminjamanalat;
        $peminjamanalat->nama_peminjam = $request->nama_peminjam;
        $peminjamanalat->nim_peminjam = $request->nim_peminjam;
        $peminjamanalat->no_hp = $request->no_hp;
        $peminjamanalat->alamat = $request->alamat;
        $peminjamanalat->email_peminjam = $request->email_peminjam;
        $peminjamanalat->tgl_peminjaman = $request->tgl_peminjaman;
        $peminjamanalat->tgl_pengembalian = $request->tgl_pengembalian;
        $peminjamanalat->jumlah_alat = $request->jumlah_alat;
        $peminjamanalat->status_peminjaman = $request->status_peminjaman;
        $peminjamanalat->ktm = $request->no_hp;
        $peminjamanalat->surat_peminjaman = $request->surat_peminjaman;

        return "Data Berhasil Ditambahkan !";
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
