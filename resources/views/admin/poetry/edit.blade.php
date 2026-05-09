<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Shairi</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#0a0a0a] text-[#EDEDEC]">
    <div class="max-w-3xl mx-auto p-6">
        <div class="flex items-center justify-between gap-4">
            <h1 class="text-2xl font-semibold">Edit Shairi</h1>
            <a href="{{ route('admin.poetry.index') }}" class="px-4 py-2 rounded-md border border-[#3E3E3A] hover:border-emerald-400 text-sm">Back</a>
        </div>

        <form method="POST" action="{{ route('admin.poetry.update', $poetry) }}" class="mt-6 rounded-xl border border-[#3E3E3A] bg-[#161615] p-6">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm text-gray-300 mb-1">Title</label>
                <input name="title" value="{{ old('title', $poetry->title) }}" required class="w-full rounded-md border border-[#3E3E3A] bg-[#0a0a0a] px-3 py-2 text-sm" />
                @error('title')<div class="text-red-200 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm text-gray-300 mb-1">Category</label>
                <input name="category" value="{{ old('category', $poetry->category) }}" class="w-full rounded-md border border-[#3E3E3A] bg-[#0a0a0a] px-3 py-2 text-sm" />
                @error('category')<div class="text-red-200 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="mb-6">
                <label class="block text-sm text-gray-300 mb-1">Urdu Content</label>
                <textarea name="content" required rows="6" class="w-full rounded-md border border-[#3E3E3A] bg-[#0a0a0a] px-3 py-2 text-sm">{{ old('content', $poetry->content) }}</textarea>
                @error('content')<div class="text-red-200 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            <button type="submit" class="w-full rounded-md bg-emerald-500 hover:bg-emerald-400 text-[#0a0a0a] font-semibold py-2.5 transition">Update</button>
        </form>
    </div>
</body>
</html>

