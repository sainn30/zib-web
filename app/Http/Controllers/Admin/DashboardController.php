<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Message;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $serviceCount = Service::count();
        $portfolioCount = Portfolio::count();
        $messageCount = Message::count();

        return view('admin.dashboard', compact('serviceCount', 'portfolioCount', 'messageCount'));
    }
}
