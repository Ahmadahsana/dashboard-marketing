<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;
use App\Imports\KatalogImport;
use App\Models\Sales;
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
            'status' => strtolower($request->status),
            'deltime' => $request->deltime,
        ];

        Katalog::create($data);

        return redirect('list_katalog')->with('success', 'berhasil insert');
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
    public function edit($id)
    {
        $katalog = Katalog::find($id);
        $sales = Sales::all();
        return view('dashboard.katalog.edit_katalog', [
            'katalog' => $katalog,
            'sales' => $sales
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
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

        Katalog::where('id', $request->id)->update($data);

        return redirect('list_katalog')->with('success', 'berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Katalog  $katalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Katalog::where('id', $request->id)->delete();
        return redirect('list_katalog')->with('success', 'berhasil delete');
    }

    public function tambah()
    {
        $sales = Sales::all();
        return view('dashboard.katalog.tambah_katalog', [
            'sales' => $sales
        ]);
    }

    public function bulk_insert(Request $request)
    {
        $file = $request->file('katalog');
        Excel::import(new KatalogImport, $file);

        return redirect()->back();
    }

    public function video()
    {
        return view('dashboard.video.video');
    }
}
