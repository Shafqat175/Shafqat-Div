<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Project</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#0a0a0a] text-[#EDEDEC]">
    <div class="max-w-3xl mx-auto p-6">
        <div class="flex items-center justify-between gap-4">
            <h1 class="text-2xl font-semibold">Edit Project</h1>
            <a href="{{ route('admin.projects.index') }}" class="px-4 py-2 rounded-md border border-[#3E3E3A] hover:border-emerald-400 text-sm">Back</a>
        </div>

        <form method="POST" action="{{ route('admin.projects.update', $project) }}" class="mt-6 rounded-xl border border-[#3E3E3A] bg-[#161615] p-6">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm text-gray-300 mb-1">Title</label>
                <input name="title" value="{{ old('title', $project->title) }}" required class="w-full rounded-md border border-[#3E3E3A] bg-[#0a0a0a] px-3 py-2 text-sm" />
                @error('title')<div class="text-red-200 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm text-gray-300 mb-1">Description</label>
                <textarea name="description" required rows="4" class="w-full rounded-md border border-[#3E3E3A] bg-[#0a0a0a] px-3 py-2 text-sm">{{ old('description', $project->description) }}</textarea>
                @error('description')<div class="text-red-200 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm text-gray-300 mb-1">Image (URL or path)</label>
                <input name="image" value="{{ old('image', $project->image) }}" class="w-full rounded-md border border-[#3E3E3A] bg-[#0a0a0a] px-3 py-2 text-sm" />
            </div>

            <div class="mb-4">
                <label class="block text-sm text-gray-300 mb-1">Tech Stack</label>
                <input name="tech_stack" value="{{ old('tech_stack', $project->tech_stack) }}" class="w-full rounded-md border border-[#3E3E3A] bg-[#0a0a0a] px-3 py-2 text-sm" />
            </div>

            <div class="mb-6">
                <label class="block text-sm text-gray-300 mb-1">Live URL</label>
                <input type="url" name="live_url" value="{{ old('live_url', $project->live_url) }}" class="w-full rounded-md border border-[#3E3E3A] bg-[#0a0a0a] px-3 py-2 text-sm" />
            </div>

            <button type="submit" class="w-full rounded-md bg-emerald-500 hover:bg-emerald-400 text-[#0a0a0a] font-semibold py-2.5 transition">Update</button>
        </form>
    </div>
</body>
</html>

