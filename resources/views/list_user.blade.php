@extends('layouts.app')

@section('content')
<div class="bg-white p-6 md:p-8 rounded-2xl shadow-lg">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-slate-700">Daftar Mahasiswa</h1>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full">
            <thead class="border-b-2 border-slate-200">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-bold text-slate-500 text-sm tracking-wider">NIM</th>
                    <th class="text-left py-3 px-4 uppercase font-bold text-slate-500 text-sm tracking-wider">Nama</th>
                    <th class="text-left py-3 px-4 uppercase font-bold text-slate-500 text-sm tracking-wider">Kelas</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr class="hover:bg-slate-50 transition-colors duration-200 border-b border-slate-200">
                        <td class="py-4 px-4 font-medium text-slate-700">{{ $user->nim }}</td>
                        <td class="py-4 px-4 text-slate-600">{{ $user->nama }}</td>
                        <td class="py-4 px-4 text-slate-600">{{ $user->nama_kelas }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-10 text-slate-500">
                            <p class="text-lg">Tidak ada data mahasiswa.</p>
                            <a href="{{ route('users.create') }}" class="mt-2 inline-block text-sky-600 hover:underline">Tambah Mahasiswa Baru</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection