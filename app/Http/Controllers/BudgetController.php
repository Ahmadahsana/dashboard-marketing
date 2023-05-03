<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Budget_cashin;
use App\Models\Budget_detail;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgets = Budget::all();
        return view('dashboard.budget.list_budget', [
            'budgets' => $budgets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.budget.tambah_budget');
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
            'tanggal' => $request->bulan,
            'target' => array_sum($request->nilai)
        ];

        $id_budget = Budget::create($data);

        foreach ($request->customer as $key => $value) {
            $data_detail = [
                'budget_id' => $id_budget->id,
                'customer' => $request->customer[$key],
                'produk' => $request->produk[$key],
                'nilai' => $request->nilai[$key],
                'tanggal' => date('Y-m-d H:i:s'),
            ];

            Budget_detail::create($data_detail);
        }

        return redirect('list_budget')->with('success', 'berhasil insert');
    }

    public function store_cashin(Request $request)
    {
        // return $request->all();

        $budget_head = Budget::find($request->id);

        $data_update = [
            'realisasi' => array_sum($request->nilai) + $budget_head->realisasi
        ];

        Budget::where('id', $request->id)->update($data_update);

        foreach ($request->customer as $key => $value) {
            $data = [
                'budget_id' => $request->id,
                'customer' => $request->customer[$key],
                'alasan_budget' => $request->alasan[$key],
                'nilai' => $request->nilai[$key],
                'tanggal' => $request->tanggal[$key],
            ];

            Budget_cashin::create($data);
        }

        return redirect('list_budget')->with('success', 'berhasil insert');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function show(Budget $budget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function edit_target($id)
    {
        $target = Budget::where('id', $id)->with('detail')->first();

        return view('dashboard.budget.edit_budget_target', [
            'target' => $target
        ]);
    }

    public function edit_realisasi($id)
    {
        $target = Budget::where('id', $id)->with('detail')->first();

        $realisasi = Budget_cashin::where('budget_id', $id)->get();
        return view('dashboard.budget.edit_budget_realisasi', [
            'target' => $target,
            'list_realisasi' => $realisasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Budget $budget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Budget::where('id', $request->id)->delete();

        return redirect('list_budget')->with('success', 'berhasil delete');
    }

    public function update_budget(Request $request)
    {
        // return $request->all();

        foreach ($request->customer as $key => $value) {
            $data_update = [
                'customer' => $request->customer[$key],
                'produk' => $request->produk[$key],
                'nilai' => $request->nilai[$key],
            ];

            Budget_detail::where('id', $request->id_detail[$key])->update($data_update);
        }

        $data_update_head = [
            'target' => array_sum($request->nilai)
        ];

        Budget::where('id', $request->id)->update($data_update_head);

        return redirect('list_budget')->with('success', 'berhasil update');
    }
}
