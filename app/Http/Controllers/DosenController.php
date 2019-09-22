<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Fandy Hidayat";

        $pelajaran = ["Math","Editing","Programmer","Design"];
        return view('biodata',['nama' => $nama, 'matkul' => $pelajaran]);
    }
}
