<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        $icons = [];
        $iconPath = public_path('icon');
        if (is_dir($iconPath)) {
            $files = scandir($iconPath);
            foreach ($files as $file) {
                if (pathinfo($file, PATHINFO_EXTENSION) === 'svg') {
                    $icons[] = $file;
                }
            }
        }
        return view('admin.services.create', compact('icons'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string',
        ]);

        Service::create($data);

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        $icons = [];
        $iconPath = public_path('icon');
        if (is_dir($iconPath)) {
            $files = scandir($iconPath);
            foreach ($files as $file) {
                if (pathinfo($file, PATHINFO_EXTENSION) === 'svg') {
                    $icons[] = $file;
                }
            }
        }
        return view('admin.services.edit', compact('service', 'icons'));
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string',
        ]);

        $service->update($data);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
