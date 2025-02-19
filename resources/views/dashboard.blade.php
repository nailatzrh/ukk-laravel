@extends('layouts.app')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
<div class="relative backdrop-blur-lg bg-gray-800/30 rounded-xl shadow-2xl border border-gray-700/50 p-8">
    <div class="flex justify-between items-center mb-8">
        <h3 class="relative text-2xl font-bold text-gray-100 font-montserrat">To-Do List Hari ini:</h3>
        <div class="text-xl text-gray-200 font-montserrat" id="current-time"></div>
    </div>
    
    <form action="{{ route('todolist.store') }}" method="POST" class="relative space-y-6">
        @csrf
        <div class="flex gap-4">
            <input type="text" name="nama_tugas" 
                   class="flex-1 px-6 py-3 rounded-lg bg-gray-800/50 border border-gray-600/50 text-gray-100 placeholder-gray-400 font-montserrat shadow-sm 
                          focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50 transition-all" 
                   placeholder="Tambahkan tugas baru" required>
            <button type="submit" 
                    class="px-8 py-3 bg-indigo-600/40 hover:bg-indigo-700/60 text-white rounded-lg font-medium font-montserrat 
                           transition-all duration-200 hover:shadow-[0_0_15px_rgba(99,102,241,0.5)] border border-indigo-500/40">
                Tambah
            </button>
        </div>
        <a href="{{ route('todolist.history') }}" 
           class="inline-block px-8 py-3 bg-gray-700/40 hover:bg-gray-700/60 text-white rounded-lg font-medium font-montserrat 
                  transition-all duration-200 hover:shadow-lg border border-gray-600/40">
            Lihat Riwayat To-Do List
        </a>
    </form>

    <div class="relative mt-10 bg-gray-800/30 rounded-xl shadow-sm border border-gray-700/50">
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-gray-800/50 border-b border-gray-700/50">
                    <th class="px-6 py-4 text-left text-gray-200 font-montserrat font-semibold">No</th>
                    <th class="px-6 py-4 text-left text-gray-200 font-montserrat font-semibold">Nama Tugas</th>
                    <th class="px-6 py-4 text-left text-gray-200 font-montserrat font-semibold">Status</th>
                    <th class="px-6 py-4 text-left text-gray-200 font-montserrat font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700/50">
                @foreach ($todolists as $index => $todolist)
                    <tr class="hover:bg-gray-700/30 transition-colors duration-150">
                        <td class="px-6 py-4 text-gray-300 font-montserrat">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 text-gray-300 font-montserrat">{{ $todolist->nama_tugas }}</td>
                        <td class="px-6 py-4">
                            <form action="{{ route('todolist.update', $todolist->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <select name="status_tugas" 
                                        class="w-full px-4 py-2 rounded-lg bg-gray-800/50 border border-gray-600/50 text-gray-300 font-montserrat 
                                               focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500/50" 
                                        onchange="this.form.submit()">
                                    <option value="pending" {{ $todolist->status_tugas == 'pending' ? 'selected' : '' }} 
                                            class="font-montserrat bg-gray-800">Pending</option>
                                    <option value="completed" {{ $todolist->status_tugas == 'completed' ? 'selected' : '' }} 
                                            class="font-montserrat bg-gray-800">Completed</option>
                                </select>
                            </form>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-3">
                                <a href="{{ route('todolist.edit', $todolist->id) }}" 
                                   class="px-6 py-2 bg-gray-600/40 hover:bg-gray-600/60 text-white rounded-lg font-medium font-montserrat 
                                          transition-all duration-200 border border-gray-500/40">Edit</a>
                                <form action="{{ route('todolist.destroy', $todolist->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="px-6 py-2 bg-red-500/40 hover:bg-red-600/60 text-white rounded-lg font-medium font-montserrat 
                                                   transition-all duration-200 border border-red-500/40">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <form action="{{ route('logout') }}" method="POST" class="relative mt-10">
        @csrf
        <button type="submit" 
                class="px-8 py-3 bg-gray-700/40 hover:bg-gray-700/60 text-white rounded-lg font-medium font-montserrat 
                       transition-all duration-200 hover:shadow-lg border border-gray-600/40">Logout</button>
    </form>
</div>

<style>
    body {
        font-family: 'Montserrat', sans-serif;
    }
    
    #current-time {
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; }
    }
</style>

<script>
    function updateTime() {
        const timeElement = document.getElementById('current-time');
        const now = new Date();
        const options = {
            timeZone: 'Asia/Jakarta',
            hour12: false,
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        };
        timeElement.textContent = now.toLocaleTimeString('id-ID', options) + ' WIB';
    }

    // Update time immediately and then every second
    updateTime();
    setInterval(updateTime, 1000);
</script>
@endsection