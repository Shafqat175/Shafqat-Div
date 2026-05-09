<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#0a0a0a] text-[#EDEDEC] flex items-center justify-center p-6">
    <div class="w-full max-w-md">
        <div class="mb-6">
            <h1 class="text-2xl font-semibold">Admin Login</h1>
            <p class="text-sm text-gray-400 mt-1">Sign in to manage the portfolio.</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 rounded-md border border-red-500/30 bg-red-500/10 px-4 py-3 text-sm text-red-200">
                {{ $errors->first() }}
            </div>
        @endif

        @if (session('success'))
            <div class="mb-4 rounded-md border border-emerald-500/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-200">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}" class="rounded-xl border border-[#3E3E3A] bg-[#161615] shadow-sm p-6">
            @csrf

            <div class="mb-4">
                <label class="block text-sm text-gray-300 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                       class="w-full rounded-md border border-[#3E3E3A] bg-[#0a0a0a] px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-emerald-400" />
            </div>

            <div class="mb-5">
                <label class="block text-sm text-gray-300 mb-1">Password</label>
                <input type="password" name="password" required
                       class="w-full rounded-md border border-[#3E3E3A] bg-[#0a0a0a] px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-emerald-400" />
            </div>

            <button type="submit"
                    class="w-full rounded-md bg-emerald-500 hover:bg-emerald-400 text-[#0a0a0a] font-semibold py-2.5 transition">
                Login
            </button>
        </form>

        <p class="text-xs text-gray-500 mt-4">Use the credentials of your existing <code>users</code> table.</p>
    </div>
</body>
</html>

