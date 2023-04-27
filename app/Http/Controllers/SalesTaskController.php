<?php

namespace App\Http\Controllers;

use App\Models\Sales_task;
use App\Models\Status_task;
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
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'deadline' => $request->deadline,
            'status' => 'Proses',
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
    public function edit($id)
    {
        $task_sales = Sales_task::find($id);
        $status_task = Status_task::all();
        return view('dashboard.sales.edit_task', [
            'task' => $task_sales,
            'status_task' => $status_task
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sales_task  $sales_task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // return $request;
        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'deadline' => $request->deadline,
            'status' => $request->status,
        ];

        Sales_task::where('id', $request->id)->update($data);
        return redirect('task_sales')->with('success', 'berhasil update');
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
