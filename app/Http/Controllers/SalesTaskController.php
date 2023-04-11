<?php

namespace App\Http\Controllers;

use App\Models\Sales_task;
use Illuminate\Http\Request;

class SalesTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task_sales = Sales_task::where('user_id', auth()->user()->username)->get();
        return view('dashboard.sales.list_task', [
            'task_sales' => $task_sales
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sales = auth()->user()->nama;

        return view('dashboard.sales.tambah_task', [
            'nama_sales' => $sales
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
            'user_id' => auth()->user()->username,
            'wilayah' => $request->wilayah,
            'mesin' => $request->mesin,
            'qty' => $request->qty,
            'pagu' => $request->pagu,
            'kontrak' => $request->kontrak,
            'keterangan' => $request->keterangan,
        ];

        Sales_task::create($data);

        return redirect('task_sales')->with('success', 'berhasil insert');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sales_task  $sales_task
     * @return \Illuminate\Http\Response
     */
    public function show(Sales_task $sales_task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales_task  $sales_task
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales_task $sales_task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sales_task  $sales_task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales_task $sales_task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales_task  $sales_task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales_task $sales_task)
    {
        //
    }
}
