<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.login', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        // return $request->all();

        $credential = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        $cariUser = User::where('username', $request->username)->first();
        // dd($cariUser);

        if ($cariUser) {
            if (Auth::attempt($credential)) {
                $request->session()->regenerate();
                // dd('cocok');
                return redirect('/');
            } else {
                return back()->with('loginError', 'Username atau password salah !');
            }
        } else {
            return back()->with('loginError', 'Username tidak ditemukan');
        }
    }

    public function menu_awal()
    {
        $nama_user = auth()->user();
        return view('dashboard.menu_awal', [
            'nama' => $nama_user
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

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
