<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        $profile = CompanyProfile::firstOrCreate([], ['name' => 'My Company']);
        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $profile = CompanyProfile::first();

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'about_us' => 'nullable|string',
            'hero_title' => 'nullable|string',
            'hero_subtitle' => 'nullable|string',
            'logo' => 'nullable|image',
            'hero_image' => 'nullable|image',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo_path'] = $request->file('logo')->store('uploads', 'public');
        }

        if ($request->hasFile('hero_image')) {
            $data['hero_image'] = $request->file('hero_image')->store('uploads', 'public');
        }

        $profile->update($data);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
