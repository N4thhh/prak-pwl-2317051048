<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index(){
        $data =[
            'title' => 'List MK',
            'mks' => MataKuliah::all(),
        ];
        return view('list_mk', $data);
    }

    public function create(){
        return view('create_mk',[
            'title' => 'Create MK',]);

    }

    public function store(Request $request){
        MataKuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);
        return redirect()->to('/mk')->with('success', 'Data Berhasil Ditambahkan');
    }
}
