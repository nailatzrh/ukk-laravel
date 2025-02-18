<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List App</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900 flex items-center justify-center p-6 font-montserrat">
    <div class="landing-container backdrop-blur-lg bg-gray-800/30 rounded-3xl shadow-2xl border border-gray-700/50 p-12 max-w-2xl mx-auto text-center">
        <h1 class="text-4xl font-bold text-gray-100 mb-6 drop-shadow-lg">
            Selamat Datang di To-Do List App
        </h1>
        
        <p class="text-lg text-gray-300 mb-12 drop-shadow">
            Kelola tugas harian Anda dengan mudah dan efisien.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('register') }}" 
               class="bloom-button w-full sm:w-auto px-8 py-3 bg-indigo-600/60 hover:bg-indigo-700/60 backdrop-blur-sm text-gray-100 font-semibold 
                      rounded-2xl transition-all duration-300 hover:shadow-[0_0_15px_rgba(99,102,241,0.5)] border border-indigo-500/40">
                Daftar Sekarang
            </a>
            
            <a href="{{ route('login') }}" 
               class="bloom-button w-full sm:w-auto px-8 py-3 bg-purple-600/60 hover:bg-purple-700/60 backdrop-blur-sm text-gray-100 font-semibold 
                      rounded-2xl transition-all duration-300 hover:shadow-[0_0_15px_rgba(147,51,234,0.5)] border border-purple-500/40">
                Login
            </a>
        </div>

        <!-- Dark theme decorative elements -->
        <div class="absolute -z-10 w-72 h-72 bg-indigo-600/20 rounded-full blur-3xl top-1/4 -left-24 animate-pulse-slow"></div>
        <div class="absolute -z-10 w-72 h-72 bg-purple-600/20 rounded-full blur-3xl bottom-1/4 -right-24 animate-pulse-slow"></div>
    </div>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .landing-container {
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .landing-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 1.5rem;
            background: linear-gradient(45deg, rgba(99,102,241,0.1), rgba(147,51,234,0.1));
            pointer-events: none;
        }

        .bloom-button {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .bloom-button:hover {
            transform: translateY(-3px) scale(1.02);
        }

        .bloom-button::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .bloom-button:hover::after {
            opacity: 1;
            transform: scale(1.1);
        }

        @keyframes pulse-slow {
            0%, 100% { opacity: 0.2; transform: scale(1); }
            50% { opacity: 0.3; transform: scale(1.05); }
        }

        .animate-pulse-slow {
            animation: pulse-slow 4s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(1deg); }
        }

        .landing-container {
            animation: floating 6s ease-in-out infinite;
        }
    </style>
</body>
</html>