<?php

namespace App\Http\Controllers;

use App\Imports\InquiryImport;
use App\Models\Inquiry;
use App\Models\Sales;
use Illuminate\Http\Request;
use App\Imports\KatalogImport;
use App\Models\Status_inquiry;
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
            'no_lpp' => $request->lpp,
            'sales' => $request->sales,
            'proyek' => $request->proyek,
            'customer' => $request->customer,
            'alamat' => $request->alamat,
            'tgl_prospek' => $request->tgl_prospek,
            'deadline' => $request->deadline,
            'status' => '1',
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
    public function edit($id)
    {
        $inquiry = Inquiry::find($id);
        $sales = Sales::all();
        $status_inquiry = Status_inquiry::all();

        return view('dashboard.inquiry.edit_inquiry', [
            'inquiry' => $inquiry,
            'list_sales' => $sales,
            'list_status_inquiry' => $status_inquiry,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // return $request->all();

        $data_update = [
            'no_lpp' => $request->lpp,
            'sales' => $request->sales,
            'proyek' => $request->proyek,
            'customer' => $request->customer,
            'alamat' => $request->alamat,
            'tgl_prospek' => $request->tgl_prospek,
            'deadline' => $request->deadline,
            'status' => $request->status,
        ];

        Inquiry::where('id', $request->id)->update($data_update);

        return redirect('list_inquiry')->with('success', 'berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Inquiry::where('id', $request->id)->delete();
        return redirect('list_inquiry')->with('success', 'berhasil delete');
    }

    public function bulk_insert(Request $request)
    {
        $file = $request->file('inquiry');
        Excel::import(new InquiryImport, $file);

        return redirect()->back();
    }
}
