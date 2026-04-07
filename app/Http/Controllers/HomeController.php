<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profile = CompanyProfile::first();
        $services = Service::latest()->take(3)->get(); // Limit to 3 for home
        $portfolios = Portfolio::latest()->take(6)->get();

        return view('home', compact('profile', 'services', 'portfolios'));
    }

    public function services()
    {
        $profile = CompanyProfile::first();
        $services = Service::all();

        return view('frontend.services', compact('profile', 'services'));
    }
}
