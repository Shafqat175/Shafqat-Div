<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded shadow">
            <h2 class="text-2xl font-bold mb-6">Add New Project</h2>
            <form action="{{ route('projects.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block">Title</label>
                    <input type="text" name="title" class="w-full border p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label class="block">Description</label>
                    <textarea name="description" class="w-full border p-2 rounded" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block">Tech Stack (e.g. Laravel, React)</label>
                    <input type="text" name="tech_stack" class="w-full border p-2 rounded">
                </div>
                <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded">Save Project</button>
            </form>
        </div>
    </div>
</x-app-layout>