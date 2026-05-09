<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Admin')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#0a0a0a] text-[#EDEDEC]">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <header class="flex items-center justify-between gap-4">
            <div>
                <div class="text-2xl font-semibold">Admin</div>
                <div class="text-xs text-emerald-200/70 mt-1">Creative Portfolio Management</div>
            </div>

            <nav class="flex items-center gap-3 text-sm">
                <a href="{{ route('admin.dashboard') }}" class="px-3 py-2 rounded-md border border-[#3E3E3A] hover:border-emerald-400">Dashboard</a>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="px-3 py-2 rounded-md border border-[#3E3E3A] hover:border-emerald-400">Logout</button>
                </form>
            </nav>
        </header>

        <main class="mt-8">
            @yield('content')
        </main>

        <footer class="mt-12 text-xs text-emerald-200/40 text-center">
            © {{ date('Y') }} Shafqat Ullah • Built with Laravel & Tailwind
        </footer>
    </div>
</body>
</html>

