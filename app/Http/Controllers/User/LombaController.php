<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dlomba;
use App\Lomba;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class LombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('user.lomba.index', [
           'lombas' => Lomba::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lombas = Lomba::all();
        return view('user.dlomba.index', compact('lombas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->all();
        $data['pelogin'] = auth()->user()->name;
        $data['status'] = 'proses';
        $data['user_id'] = auth()->user()->id;
        // $data['lomba_id'] = Lomba::find($id);
        // if($request->data['lomba_id'] == 'Karya Tulis Ilmiah') {
        //     $data['lomba_id'] = 1;
        // } elseif($request->data['lomba_id'] == 'Podcast') {
        //     $data['lomba_id'] = 2;
        // } elseif($request->data['lomba_id'] == 'Creative Video') { 
        //     $data['lomba_id'] = 3;
        // } elseif($request->data['lomba_id'] == 'Fotografi') {
        //     $data['lomba_id'] = 4;
        // } elseif($request->data['lomba_id'] == 'Poster') {
        //     $data['lomba_id'] = 5;
        // }
        $data['bukti'] = $request->file('bukti')->store(
            'assets/gallery',
            'public'
        );
        Dlomba::create($data);
        Alert::success('Berhasil mendaftar lomba!', 'Proses verifikasi sedang berlangsung, mohon tunggu 1x24 jam');
        return redirect()->route('user.dashboard');
    }

    public function myLomba()
    {
        return view('user.lomba.mylomba', [
            'dlombas' => Dlomba::with('getLomba')->get()
        ]);
    }
    public function detailLomba($id)
    {
        $dlombas = Dlomba::with('getLomba')->where('id', $id)->firstOrFail();
        return view('user.lomba.detail-lomba', compact('dlombas'));
    }
}
