<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Poetry</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#0a0a0a] text-[#EDEDEC]">
    <div class="max-w-6xl mx-auto p-6">
        <div class="flex items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-semibold">Urdu Poetry (Shairi)</h1>
                <p class="text-sm text-gray-400 mt-1">Create, edit and delete shairi.</p>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 rounded-md border border-[#3E3E3A] hover:border-emerald-400 text-sm">Dashboard</a>
                <a href="{{ route('admin.poetry.create') }}" class="px-4 py-2 rounded-md bg-emerald-500 text-[#0a0a0a] font-semibold hover:bg-emerald-400 text-sm">+ New Shairi</a>
            </div>
        </div>

        @if (session('success'))
            <div class="mt-4 rounded-md border border-emerald-500/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-200">
                {{ session('success') }}
            </div>
        @endif

        <div class="mt-6 overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="text-gray-400">
                    <tr class="text-left">
                        <th class="pb-3">Title</th>
                        <th class="pb-3 w-48">Category</th>
                        <th class="pb-3 w-44">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($shairi as $item)
                    <tr class="border-t border-[#3E3E3A]">
                        <td class="py-4">{{ $item->title }}</td>
                        <td class="py-4">{{ $item->category ?? '—' }}</td>
                        <td class="py-4">
                            <div class="flex items-center gap-2">
                                <a href="{{ route('admin.poetry.edit', $item) }}" class="px-3 py-1.5 rounded-md border border-[#3E3E3A] hover:border-emerald-400">Edit</a>
                                <form method="POST" action="{{ route('admin.poetry.destroy', $item) }}" onsubmit="return confirm('Delete this shairi?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-3 py-1.5 rounded-md border border-red-500/40 hover:border-red-400 text-red-200">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="py-8 text-center text-gray-500">No shairi found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-5">{{ $shairi->links() }}</div>
    </div>
</body>
</html>

