@extends('layouts.app')

@section('content')
<div class="bg-white p-6 md:p-8 rounded-2xl shadow-lg">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-slate-700">Daftar Mata Kuliah</h1>
        <a href="{{ route('mk.create') }}" class="bg-sky-600 hover:bg-sky-500 text-white font-semibold py-2 px-4 rounded-md transition duration-300">
            Tambah MK
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full">
            <thead class="border-b-2 border-slate-200">
                <tr>
                    <th class="w-2/5 text-left py-3 px-4 uppercase font-bold text-slate-500 text-sm tracking-wider">Nama Mata Kuliah</th>
                    <th class="w-1/5 text-left py-3 px-4 uppercase font-bold text-slate-500 text-sm tracking-wider">SKS</th>
                    <th class="w-2/5 text-left py-3 px-4 uppercase font-bold text-slate-500 text-sm tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mks as $matakuliah)
                    <tr class="hover:bg-slate-50 transition-colors duration-200 border-b border-slate-200">
                        <td class="py-4 px-4 font-medium text-slate-700">{{ $matakuliah->nama_mk }}</td>
                        <td class="py-4 px-4 text-slate-600">{{ $matakuliah->sks }}</td>
                        <td class="py-4 px-4">
                            <a href="#" class="text-yellow-500 hover:text-yellow-700 font-medium">Edit</a>
                            <span class="text-slate-300 mx-2">|</span>
                            <a href="#" class="text-red-500 hover:text-red-700 font-medium">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-10 text-slate-500">
                            <p class="text-lg">Belum ada data mata kuliah.</p>
                            <a href="{{ route('mk.create') }}" class="mt-2 inline-block text-sky-600 hover:underline">Tambah Mata Kuliah Baru</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection