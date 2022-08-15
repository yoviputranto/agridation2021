<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\City;
use App\Province;

class WorkshopController extends Controller
{
    public function daftarWorkshop()
    {
        return view('user.workshop.daftar');
    }

    public function formDaftar()
    {
        return view('user.workshop.form');
    }

    public function listWorkshop()
    {
        return view('user.workshop.list');
    }

    public function detailWorkshop()
    {
        return view('user.workshop.menu');
    }

    public function cekOngkir(Request $request)
    {
        //dd($request->all());
        if ($request->destination && $request->courier) {
            $origin = 79;
            $destination = $request->destination;
            $weight = 500;
            $courier = $request->courier;

            $response = Http::asForm()->withHeaders([
                'key' => '9e3612365a7aff0db5fa0e345b62e8f7'
            ])->post('https://api.rajaongkir.com/starter/cost', [
                'origin' => $origin,
                'destination' => $destination,
                'weight' => $weight,
                'courier' => $courier,
            ]);
            $cekongkir = $response['rajaongkir']['results'][0]['costs'];
        } else {
            $origin = '';
            $destination = '';
            $weight = '';
            $courier = '';
            $cekongkir = null;
        }
       $provinces = Province::all();
       $cities = City::all();
        return view('user.workshop.ongkir', compact('provinces', 'cekongkir', 'cities'));
    }

    public function ajax($id)
    {
        $cities = City::where('province_id', '=', $id)->pluck('city_name', 'id');
        return json_encode($cities);
    }
}
