<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900 flex items-center justify-center py-8 font-montserrat">
    <div class="container max-w-md mx-auto px-6">
        <div class="backdrop-blur-lg bg-gray-800/30 rounded-2xl shadow-2xl border border-gray-700/50 p-8 relative overflow-hidden">
            <!-- Dark theme decorative elements -->
            <div class="absolute -z-10 w-64 h-64 bg-indigo-600/10 rounded-full blur-3xl -top-32 -left-32"></div>
            <div class="absolute -z-10 w-64 h-64 bg-purple-600/10 rounded-full blur-3xl -bottom-32 -right-32"></div>

            <h2 class="text-3xl font-bold text-gray-100 text-center mb-8">Form Login</h2>

            @if (session('success'))
                <div class="bg-gray-700/30 backdrop-blur-md text-gray-100 px-4 py-3 rounded-lg mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-gray-700/30 backdrop-blur-md text-gray-100 px-4 py-3 rounded-lg mb-4">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                <div class="space-y-2">
                    <label for="email" class="block text-gray-200 font-medium">Email</label>
                    <input type="email" name="email" 
                           class="w-full px-4 py-3 rounded-lg bg-gray-800/50 border border-gray-600/50 backdrop-blur-sm 
                                  focus:outline-none focus:ring-2 focus:ring-indigo-500/50 text-gray-100 placeholder-gray-400"
                           required>
                </div>

                <div class="space-y-2">
                    <label for="password" class="block text-gray-200 font-medium">Password</label>
                    <input type="password" name="password" 
                           class="w-full px-4 py-3 rounded-lg bg-gray-800/50 border border-gray-600/50 backdrop-blur-sm 
                                  focus:outline-none focus:ring-2 focus:ring-indigo-500/50 text-gray-100 placeholder-gray-400"
                           required>
                </div>

                <button type="submit" 
                        class="w-full py-3 px-6 bg-indigo-600/40 hover:bg-indigo-700/60 backdrop-blur-sm text-gray-100 font-semibold 
                               rounded-lg transition duration-300 ease-in-out hover:shadow-[0_0_15px_rgba(99,102,241,0.5)] border border-indigo-500/40">
                    Login
                </button>

                <div class="text-center text-gray-400 mt-4">
                    Belum punya akun? 
                    <a href="/register" class="text-gray-200 font-medium hover:text-indigo-400 underline transition duration-300">
                        Register
                    </a>
                </div>
            </form>
        </div>
    </div>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            /* background-image: 
                radial-gradient(circle at center, rgba(99,102,241,0.05) 2px, transparent 2px),
                radial-gradient(circle at center, rgba(147,51,234,0.05) 1px, transparent 1px);
            background-size: 40px 40px;
            background-position: 0 0, 20px 20px; */
        }

        input::placeholder {
            color: rgba(209, 213, 219, 0.4);
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus {
            -webkit-text-fill-color: #f3f4f6;
            -webkit-box-shadow: 0 0 0px 1000px rgba(31, 41, 55, 0.5) inset;
            transition: background-color 5000s ease-in-out 0s;
        }
    </style>
</body>
</html>