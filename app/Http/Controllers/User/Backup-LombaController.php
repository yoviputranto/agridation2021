<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lomba;
use App\Dlomba;


class LombaController extends Controller
{
    public function daftarLomba()
    {
        $lombas = Lomba::all()->sortByDesc('name');
        return view('user.lomba.daftar', compact('lombas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function formDaftar($id)
    // {
    //     $lomba = Lomba::findorFail($id);
    //     return view('user.lomba.form', compact('lombas'));
        
    // }
    /** 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function daftar(Request $request)
    // {
    //     $lombas = Lomba::all();
    //     foreach ($lombas as $dlombas) {
    //         $dlombas->id;
    //     }
    //     $dlombas = $request->all();
    //     $dlombas['pelogin'] = auth()->user()->name;
    //     $dlombas['user_id'] = auth()->id();
    //     $dlombas['status'] = 'proses';
    //     $dlombas['bukti'] = $request->file('bukti')->store(
    //         'assets/gallery',
    //         'public'
    //     );
    //     Dlomba::create($dlombas);
    //     return redirect()->route('user.lomba.daftar');
    // }

    public function create()
    {
        return view('user.dlomba.index');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ldaftar(Request $request)
    {
        $daftars = $request->all();
        //User::create($peserta);
        $daftars['bukti'] = $request->file('bukti')->store(
            'assets/gallery',
            'public'
        );
        Dlomba::create($daftars);

        return redirect()->route('peserta.index');
    }
    public function listLomba()
    {
        return view('user.lomba.list');
    }

    public function detailLomba()
    {
        return view('user.lomba.lomba');
    }
}
