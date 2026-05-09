<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Shairi | Shafqat.Dev</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-[#0a0a0a] text-[#EDEDEC]">
    <div class="max-w-3xl mx-auto p-6 pt-12">
        
        <!-- Header -->
        <div class="flex items-center justify-between gap-4 mb-8">
            <h1 class="text-3xl font-bold italic text-yellow-500">Create Shairi</h1>
            <a href="{{ route('admin.poetry.index') }}" class="px-6 py-2 rounded-full border border-[#3E3E3A] hover:bg-white hover:text-black transition text-sm font-bold">
                ← Back
            </a>
        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('admin.poetry.store') }}" class="rounded-3xl border border-[#161615] bg-[#111110] p-8 shadow-2xl">
            @csrf

            <!-- Title -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-400 mb-2">Title / Context</label>
                <input type="text" name="title" value="{{ old('title') }}" required 
                    class="w-full rounded-xl border border-[#3E3E3A] bg-[#0a0a0a] px-4 py-3 text-white focus:border-yellow-500 outline-none transition" 
                    placeholder="e.g. Deep Poetry" />
                @error('title')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            <!-- Category -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-400 mb-2">Category</label>
                <input type="text" name="category" value="{{ old('category') }}" 
                    class="w-full rounded-xl border border-[#3E3E3A] bg-[#0a0a0a] px-4 py-3 text-white focus:border-yellow-500 outline-none transition" 
                    placeholder="e.g. Aesthetic, Sad, Life" />
                @error('category')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            <!-- Urdu Content -->
            <div class="mb-8">
                <label class="block text-sm font-medium text-gray-400 mb-2">Urdu Poetry Content</label>
                <textarea name="content" required rows="6" dir="rtl"
                    class="w-full rounded-xl border border-[#3E3E3A] bg-[#0a0a0a] px-4 py-4 text-2xl text-right text-white focus:border-yellow-500 outline-none transition font-serif"
                    placeholder="یہاں اپنی شاعری لکھیں...">{{ old('content') }}</textarea>
                @error('content')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full rounded-xl bg-yellow-500 hover:bg-yellow-400 text-black font-extrabold py-4 transition shadow-lg shadow-yellow-500/10 transform hover:scale-[1.02]">
                Save Shairi ✨
            </button>
        </form>
    </div>
</body>
</html>