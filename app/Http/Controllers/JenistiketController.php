<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class JenistiketController extends Controller
{
    public function index(){
        $data = DB::table('jenis_tiket')->get();
        return view('tiket.index', compact('data'));
    }
}
