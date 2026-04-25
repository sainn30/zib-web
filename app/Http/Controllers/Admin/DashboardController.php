<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Message;
use App\Models\DailyStatistic; // Tambahkan ini
use Illuminate\Http\Request;
use Carbon\Carbon; // Tambahkan ini
use Illuminate\Support\Facades\DB; // Tambahkan ini

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Data untuk Card Atas
        $serviceCount = Service::count();
        $portfolioCount = Portfolio::count();
        $messageCount = Message::count();

        $today = \Carbon\Carbon::today()->toDateString();
        $totalVisitorCount = \App\Models\DailyStatistic::where('date', $today)->value('hits') ?? 0;

        // 2. DATA UNTUK GRAFIK (7 Hari Terakhir)
        $sevenDaysAgo = \Carbon\Carbon::now()->subDays(6)->startOfDay();
        $now = \Carbon\Carbon::now()->endOfDay();

        $dailyStats = \App\Models\DailyStatistic::select('date', 'hits')
            ->whereBetween('date', [$sevenDaysAgo, $now])
            ->orderBy('date', 'asc')
            ->get();

        $chartData = [
            'labels' => [],
            'data' => [],
        ];

        foreach ($dailyStats as $stat) {
            $chartData['labels'][] = \Carbon\Carbon::parse($stat->date)->format('d M');
            $chartData['data'][] = (int) $stat->hits;
        }

        return view('admin.dashboard', compact(
            'serviceCount',
            'portfolioCount',
            'messageCount',
            'totalVisitorCount',
            'chartData'
        ));
    }
}
