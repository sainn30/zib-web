<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolios.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'client' => 'nullable|string',
            'project_date' => 'nullable|date',
            'image' => 'nullable|image',
        ]);

        $data['title'] = $data['title'] ?? 'Gallery Item ' . now()->format('d-m-Y H:i');
        $data['description'] = $data['description'] ?? null;

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('uploads', 'public');
        }

        Portfolio::create($data);

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio item created successfully.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $data = $request->validate([
            'client' => 'nullable|string',
            'project_date' => 'nullable|date',
            'image' => 'nullable|image',
        ]);

        $data['title'] = $data['title'] ?? $portfolio->title;
        $data['description'] = $data['description'] ?? $portfolio->description;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($portfolio->image_path) {
                Storage::disk('public')->delete($portfolio->image_path);
            }
            $data['image_path'] = $request->file('image')->store('uploads', 'public');
        }

        $portfolio->update($data);

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio item updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image_path) {
            Storage::disk('public')->delete($portfolio->image_path);
        }
        $portfolio->delete();
        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio item deleted successfully.');
    }
}
