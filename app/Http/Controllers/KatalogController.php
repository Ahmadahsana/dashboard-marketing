<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;
use App\Imports\KatalogImport;
use Maatwebsite\Excel\Facades\Excel;

class KatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.katalog.dashboard_katalog');
    }

    public function list()
    {
        $listKatalog = Katalog::all();
        return view('dashboard.katalog.list_katalog', [
            'listKatalog' => $listKatalog
        ]);
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
        // return $request->all();
        $data = [
            'nama_mesin' => $request->mesin,
            'qty' => $request->qty,
            'sales' => $request->sales,
            'lokasi' => $request->lokasi,
            'nilai_kontrak' => $request->nilai,
            'status' => $request->status,
            'deltime' => $request->deltime,
        ];

        Katalog::create($data);

        return redirect()->back()->with('success', 'Berhasil Transfer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function show(Katalog $katalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function edit(Katalog $katalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Katalog $katalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Katalog $katalog)
    {
        //
    }

    public function tambah()
    {
        return view('dashboard.katalog.tambah_katalog');
    }

    public function bulk_insert(Request $request)
    {
        $file = $request->file('katalog');
        Excel::import(new KatalogImport, $file);

        return redirect()->back();
    }
}
