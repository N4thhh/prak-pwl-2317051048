<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mata_kuliah;

class MataKuliahController extends Controller
{
    public function index(){
        $data =[
            'title' => 'List MK',
            'mks' => mata_kuliah::all(),
        ];
        return view('list_mk', compact('data'));
    }

    public function create(){
        return view('create_mk',[
            'title' => 'Create MK',]);

    }

    public function store(Request $request){
        mata_kuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);
        return redirect()->to('/mk')->with('success', 'Data Berhasil Ditambahkan');
    }
}
