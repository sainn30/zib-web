<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\DailyStatistic;
use Carbon\Carbon;

class TrackVisitor
{
    public function handle(Request $request, Closure $next)
{
    $today = \Carbon\Carbon::today()->toDateString();
    
    // Gunakan session agar satu orang tidak nambah hits berkali-kali saat refresh
    if (!$request->session()->has('tracked_today_' . $today)) {
        
        // Gunakan updateOrCreate dengan benar
        \App\Models\DailyStatistic::updateOrCreate(
            ['date' => $today], // Cari berdasarkan tanggal ini
            []                  // Tidak ada kolom lain yang diupdate manual
        )->increment('hits');   // Tambahkan +1 pada kolom hits

        $request->session()->put('tracked_today_' . $today, true);
    }

    return $next($request);
}
}
