<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'To-Do List App')</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900 font-montserrat">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <h2 class="text-3xl font-bold text-gray-100 mb-6 drop-shadow-lg">@yield('header')</h2>

        @if(session('success'))
            <div class="bg-gray-800/50 backdrop-blur-sm border border-green-500/30 text-green-400 px-4 py-3 rounded-lg relative mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-gray-800/50 backdrop-blur-sm border border-red-500/30 text-red-400 px-4 py-3 rounded-lg relative mb-4" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <div class="backdrop-blur-lg bg-gray-800/30 rounded-2xl shadow-2xl border border-gray-700/50 p-8 mb-6 relative overflow-hidden">
            <!-- Dark theme decorative elements -->
            <div class="absolute -z-10 w-64 h-64 bg-indigo-600/10 rounded-full blur-3xl -top-32 -left-32"></div>
            <div class="absolute -z-10 w-64 h-64 bg-purple-600/10 rounded-full blur-3xl -bottom-32 -right-32"></div>
            
            @yield('content')
        </div>

        <footer class="border-t border-gray-800/50 pt-4 mt-8">
            <hr class="mb-4 border-gray-800">
            <p class="text-center text-gray-400 text-sm">
                &copy; {{ date('Y') }} To-Do List App - Dibuat dengan Laravel
            </p>
        </footer>
    </div>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        
        }

        /* Custom scrollbar for dark theme */
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(31, 41, 55, 0.5);
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(99, 102, 241, 0.3);
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(99, 102, 241, 0.5);
        }
    </style>
</body>
</html>