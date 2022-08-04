<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){
        $jenisTiket = DB::table('jenis_tiket')->get();
        return view('welcome', compact('jenisTiket'));
    }
}
