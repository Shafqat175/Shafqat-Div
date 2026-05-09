<?php

namespace App\Http\Controllers;

use App\Models\PoetryShairi;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PoetryShairiController extends Controller
{
    public function index(): View
    {
        $shairi = PoetryShairi::latest()->paginate(12);
        return view('admin.poetry.index', compact('shairi'));
    }

    public function create(): View
    {
        return view('admin.poetry.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'category' => ['nullable', 'string', 'max:255'],
        ]);

        PoetryShairi::create($validated);

        return redirect()->route('admin.poetry.index')->with('success', 'Poetry created successfully.');
    }

    public function edit(PoetryShairi $poetry): View
    {
        return view('admin.poetry.edit', ['poetry' => $poetry]);
    }

    public function update(Request $request, PoetryShairi $poetry)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'category' => ['nullable', 'string', 'max:255'],
        ]);

        $poetry->update($validated);

        return redirect()->route('admin.poetry.index')->with('success', 'Poetry updated successfully.');
    }

    public function destroy(PoetryShairi $poetry)
    {
        $poetry->delete();

        return redirect()->route('admin.poetry.index')->with('success', 'Poetry deleted successfully.');
    }
}

