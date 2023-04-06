<?php

namespace App\Http\Controllers;

use App\Imports\InquiryImport;
use App\Models\Inquiry;
use App\Models\Sales;
use Illuminate\Http\Request;
use App\Imports\KatalogImport;
use Maatwebsite\Excel\Facades\Excel;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listInquiry = Inquiry::all();
        return view('dashboard.inquiry.list_inquiry', [
            'listInquiry' => $listInquiry
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_sales = Sales::all();
        return view('dashboard.inquiry.tambah_inquiry', [
            'list_sales' => $list_sales
        ]);
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
            'sales' => $request->sales,
            'judul' => $request->judul,
            'jenis_instansi' => $request->jenis_instansi,
            'tgl_prospek' => $request->tgl_prospek,
            'alamat_instansi' => $request->alamat,
            'divisi' => $request->divisi,
            'status' => $request->status,
        ];

        Inquiry::create($data);

        return redirect('list_inquiry')->with('success', 'berhasil insert');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Inquiry $inquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquiry $inquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquiry $inquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquiry $inquiry)
    {
        //
    }

    public function bulk_insert(Request $request)
    {
        $file = $request->file('inquiry');
        Excel::import(new InquiryImport, $file);

        return redirect()->back();
    }
}
