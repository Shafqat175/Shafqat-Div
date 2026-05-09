<x-app-layout>
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex justify-between mb-6">
                    <h2 class="text-2xl font-bold">My Projects</h2>
                    <a href="{{ route('projects.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Add Project</a>
                </div>
                
                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b">
                            <th class="py-2">Title</th>
                            <th class="py-2">Tech Stack</th>
                            <th class="py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                        <tr class="border-b">
                            <td class="py-2">{{ $project->title }}</td>
                            <td class="py-2">{{ $project->tech_stack }}</td>
                            <td class="py-2">
                                <form action="{{ route('projects.destroy', $project) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button class="text-red-500">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>