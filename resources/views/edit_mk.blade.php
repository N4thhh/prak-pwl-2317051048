@extends('layouts.app')

@section('content')
<div class="bg-white p-6 md:p-8 rounded-2xl shadow-lg max-w-lg mx-auto">
    <h1 class="text-3xl font-bold mb-8 text-center text-slate-700">Edit Mata Kuliah</h1>

    <form action="{{ route('mk.update', $mk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="space-y-6">
            <div>
                <label for="nama_mk" class="block text-slate-600 text-sm font-medium mb-1">Nama Mata Kuliah : </label>
                <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" class="w-full py-2 px-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 transition" required>
            </div>
            <div>
                <label for="sks" class="block text-slate-600 text-sm font-medium mb-1">SKS : </label>
                <input type="number" id="sks" name="sks" value="{{ $mk->sks }}" class="w-full py-2 px-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 transition" required>
            </div>
        </div>
        <div class="mt-8">
            <button type="submit" class="w-full bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-300">
                Update
            </button>
        </div>
    </form>
</div>
@endsection