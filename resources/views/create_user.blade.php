@extends('layouts.app')

@section('content')
<div class="bg-white p-6 md:p-8 rounded-xl shadow-md max-w-lg mx-auto">
    <h1 class="text-3xl font-bold mb-6 text-slate-800">Formulir Tambah Mahasiswa</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-slate-700 text-sm font-bold mb-2">Nama:</label>
            <input type="text" id="nama" name="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="nim" class="block text-slate-700 text-sm font-bold mb-2">NIM:</label>
            <input type="text" id="nim" name="nim" class="shadow appearance-none border rounded w-full py-2 px-3 text-slate-700" required>
        </div>
        <div class="mb-6">
            <label for="kelas_id" class="block text-slate-700 text-sm font-bold mb-2">Kelas:</label>
            <select name="kelas_id" id="kelas_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-slate-700" required>
                <option value="">Pilih Kelas</option>
                @foreach ($kelas as $kls)
                    <option value="{{ $kls->id }}">{{ $kls->nama_kelas }}</option>
                @endforeach
            </select>
        </div>a@extends('layouts.app')

@section('content')
<div class="bg-white p-6 md:p-8 rounded-2xl shadow-lg max-w-lg mx-auto">
    <h1 class="text-3xl font-bold mb-8 text-center text-slate-700">Mahasiswa Baru</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="space-y-6">
            <div>
                <label for="nama" class="block text-slate-600 text-sm font-medium mb-1">Nama</label>
                <input type="text" id="nama" name="nama" class="w-full py-2 px-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 transition" required>
            </div>
            <div>
                <label for="nim" class="block text-slate-600 text-sm font-medium mb-1">NIM</label>
                <input type="text" id="nim" name="nim" class="w-full py-2 px-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 transition" required>
            </div>
            <div>
                <label for="kelas_id" class="block text-slate-600 text-sm font-medium mb-1">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="w-full py-2 px-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 transition" required>
                    <option value="" disabled selected>Pilih kelas Anda</option>
                    @foreach ($kelas as $kls)
                        <option value="{{ $kls->id }}">{{ $kls->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mt-8">
            <button type="submit" class="w-full bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-300">
                Simpan Data
            </button>
        </div>
    </form>
</div>
@endsection
        <div class="flex items-center justify-end">
            <button type="submit" class="bg-slate-800 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline transition duration-300">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection