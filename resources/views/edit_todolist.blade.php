@extends('layouts.app')

@section('title', 'Edit To-Do List')

@section('header', 'Edit To-Do List')

@section('content')
    <div class="backdrop-blur-lg bg-gray-800/30 rounded-2xl shadow-2xl border border-gray-700/50 p-8">
        <!-- Dark theme decorative elements -->
        <div class="absolute -z-10 w-64 h-64 bg-indigo-600/10 rounded-full blur-3xl -top-32 -left-32"></div>
        <div class="absolute -z-10 w-64 h-64 bg-purple-600/10 rounded-full blur-3xl -bottom-32 -right-32"></div>

        <h2 class="text-2xl font-bold text-gray-100 mb-6 text-center">Edit Tugas</h2>
        
        <form action="{{ route('todolist.updateNama', $todolist->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PATCH')

            <div class="space-y-2">
                <label for="nama_tugas" class="block text-gray-200 font-medium">Nama Tugas</label>
                <input type="text" 
                       name="nama_tugas" 
                       value="{{ $todolist->nama_tugas }}"
                       class="w-full px-4 py-3 rounded-lg bg-gray-800/50 border border-gray-600/50 backdrop-blur-sm 
                              focus:outline-none focus:ring-2 focus:ring-indigo-500/50 text-gray-100 placeholder-gray-400
                              hover:border-gray-500/50 transition-all duration-200"
                       required>
            </div>

            <div class="flex gap-4 mt-6">
                <button type="submit" 
                        class="flex-1 py-3 px-6 bg-indigo-600/40 hover:bg-indigo-700/60 backdrop-blur-sm text-gray-100 
                               font-semibold rounded-lg transition-all duration-300 hover:shadow-[0_0_15px_rgba(99,102,241,0.5)] 
                               border border-indigo-500/40">
                    Simpan Perubahan
                </button>
                
                <a href="{{ route('dashboard') }}" 
                   class="flex-1 py-3 px-6 bg-gray-700/40 hover:bg-gray-700/60 backdrop-blur-sm text-gray-100 
                          font-semibold rounded-lg transition-all duration-300 hover:shadow-lg border border-gray-600/40 text-center">
                    Batal
                </a>
            </div>
        </form>
    </div>

    <style>
        input::placeholder {
            color: rgba(209, 213, 219, 0.4);
        }
        
        /* Autofill style override */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus {
            -webkit-text-fill-color: #f3f4f6;
            -webkit-box-shadow: 0 0 0px 1000px rgba(31, 41, 55, 0.5) inset;
            transition: background-color 5000s ease-in-out 0s;
        }

        /* Dark theme background pattern */
        body {
            
        }
    </style>
@endsection