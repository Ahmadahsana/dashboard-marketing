<?php

namespace App\Http\Controllers;

use App\Models\Bast;
use App\Models\Bast_detail;
use App\Models\Status_bast;
use Illuminate\Http\Request;

class BastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_bast = Bast::all();
        return view('dashboard.bast.list_bast', [
            'data_bast' => $data_bast
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.bast.tambah_bast', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $data = [
            'no_poi' => $request->nopoi,
            'barang' => $request->mesin,
            'status_bast_id' => '1',
            'proses_kontrak' => date("Y-m-d H:i:s"),
        ];


        $bast = Bast::create($data);

        $data_detail = [
            'bast_id' => $bast->id,
            'status_bast_id' => '1',
        ];

        Bast_detail::create($data_detail);

        return redirect('list_bast')->with('success', 'berhasil insert');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bast  $bast
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bast = Bast::find($id);
        $status_bast = Status_bast::all();
        return view('dashboard.bast.edit_bast', [
            'bast' => $bast,
            'status_bast' => $status_bast
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bast  $bast
     * @return \Illuminate\Http\Response
     */
    public function edit(Bast $bast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bast  $bast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // return $request;
        $bast = Bast::find($request->id);
        // return $bast->status_bast_id + 1;

        if ($bast->status_bast_id == 1) {
            $col_status = 'selesai_kontrak';
        } elseif ($bast->status_bast_id == 2) {
            $col_status = 'kirim';
        } elseif ($bast->status_bast_id == 3) {
            $col_status = 'sampai';
        } elseif ($bast->status_bast_id == 4) {
            $col_status = 'proses_pasang';
        } elseif ($bast->status_bast_id == 5) {
            $col_status = 'selesai_pasang';
        } elseif ($bast->status_bast_id == 6) {
            $col_status = 'proses_uji_coba';
        } elseif ($bast->status_bast_id == 7) {
            $col_status = 'selesai_uji_coba';
        } elseif ($bast->status_bast_id == 8) {
            $col_status = 'bast';
        }

        // return $col_status;

        $validatedData = [
            'no_poi' => $request->nopoi,
            'barang' => $request->mesin,
            'status_bast_id' => $bast->status_bast_id + 1,
            $col_status  => $request->tanggal
        ];

        $data_detail = [
            'bast_id' => $bast->id,
            'status_bast_id' => $bast->status_bast_id + 1,
        ];

        Bast_detail::create($data_detail);
        // return $validatedData;

        $jajal = Bast::where('id', $bast->id)->update($validatedData);

        return redirect('list_bast')->with('success', 'berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bast  $bast
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bast $bast)
    {
        //
    }

    public function jajal()
    {
    }
}
