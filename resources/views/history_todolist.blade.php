@extends('layouts.app')

@section('title', 'Riwayat To-Do List')

@section('header', 'Riwayat To-Do List')

@section('content')
<div class="backdrop-blur-lg bg-gray-800/30 rounded-2xl shadow-2xl border border-gray-700/50 p-8">
    <!-- Dark theme decorative elements -->
    <div class="absolute -z-10 w-64 h-64 bg-indigo-600/10 rounded-full blur-3xl -top-32 -left-32"></div>
    <div class="absolute -z-10 w-64 h-64 bg-purple-600/10 rounded-full blur-3xl -bottom-32 -right-32"></div>

    <h2 class="text-2xl font-bold text-gray-100 mb-4">Riwayat To-Do List</h2>
    
    <p class="text-gray-300 mb-6">Berikut adalah semua tugas yang pernah Anda buat.</p>

    <div class="overflow-x-auto rounded-xl backdrop-blur-md bg-gray-800/20">
        <table class="w-full min-w-full divide-y divide-gray-700/50">
            <thead>
                <tr class="bg-gray-800/50">
                    <th class="px-6 py-4 text-left text-gray-200 font-semibold">No</th>
                    <th class="px-6 py-4 text-left text-gray-200 font-semibold">Nama Tugas</th>
                    <th class="px-6 py-4 text-left text-gray-200 font-semibold">Status</th>
                    <th class="px-6 py-4 text-left text-gray-200 font-semibold">Tanggal & Waktu Tugas</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700/50">
                @foreach ($todolists as $index => $todolist)
                    <tr class="hover:bg-gray-700/30 transition-colors duration-200">
                        <td class="px-6 py-4 text-gray-300">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 text-gray-300">{{ $todolist->nama_tugas }}</td>
                        <td class="px-6 py-4">
                            @if ($todolist->status_tugas == 'pending')
                                <span class="px-3 py-1 rounded-full text-sm font-medium bg-yellow-500/30 text-yellow-200 backdrop-blur-sm border border-yellow-500/30">
                                    Pending
                                </span>
                            @else
                                <span class="px-3 py-1 rounded-full text-sm font-medium bg-green-500/30 text-green-200 backdrop-blur-sm border border-green-500/30">
                                    Completed
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-gray-300">
                            {{ \Carbon\Carbon::parse($todolist->created_at)->translatedFormat('l, d F Y H:i:s') }} WIB
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-8">
        <a href="{{ route('dashboard') }}" 
           class="inline-block px-6 py-3 bg-gray-700/40 hover:bg-gray-700/60 backdrop-blur-sm text-gray-200 font-semibold 
                  rounded-lg transition duration-300 ease-in-out hover:shadow-[0_0_15px_rgba(99,102,241,0.5)] border border-gray-600/40">
            Kembali ke Dashboard
        </a>
    </div>
</div>

<style>
    /* Dark theme scrollbar */
    .overflow-x-auto::-webkit-scrollbar {
        height: 8px;
    }
    
    .overflow-x-auto::-webkit-scrollbar-track {
        background: rgba(31, 41, 55, 0.5);
        border-radius: 4px;
    }
    
    .overflow-x-auto::-webkit-scrollbar-thumb {
        background: rgba(99, 102, 241, 0.3);
        border-radius: 4px;
    }
    
    .overflow-x-auto::-webkit-scrollbar-thumb:hover {
        background: rgba(99, 102, 241, 0.5);
    }

    /* Dark theme background pattern */
    body {
        
    }
</style>
@endsection