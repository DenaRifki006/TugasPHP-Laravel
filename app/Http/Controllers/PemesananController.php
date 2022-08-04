<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemesananController extends Controller
{
    public function index(){
        $data = DB::table('table_pesanan')->get();
        return view('pemesanan.index', compact('data'));
    }

    public function pesanTiket(Request $request){

        $data = DB::table('table_pesanan')->insert([
            'kode_pemesanan' => $this->generateKodeTiket(),
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'jenis_tiket' => $request->jenis_tiket,
            'tanggal_pemesanan' => NOW(),
            'status' => 0
        ]);

        $tiket = DB::table('table_pesanan')->where('no_hp', $request->no_hp)->first();

        return view('tiket', compact('tiket'));
    }

    public function checkin(){
        $data = DB::table('table_pesanan')->where('status', '>', 0)->get();
        return view('checkin.index', compact('data'));
    }

    public function verify(Request $request){
        

        DB::table('table_pesanan')->where('id', $request->id)->update([
            'status' => $request->status,
        ]);

        return redirect()->back();
    }

    public function checkinTicket(Request $request){

        DB::table('table_pesanan')->where('id', $request->id)->update([
            'status' => $request->status,
        ]);

        return redirect()->back();
    }

    public function generateKodeTiket(){
        $maxData = DB::table('table_pesanan')->max('id');

        $max = $maxData + 1;
        $code = "TKT-". $max;
        return $code;
    }
}
