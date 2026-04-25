<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyStatistic extends Model
{
    protected $table = 'daily_statistics'; // Nama tabel di database
    protected $primaryKey = 'id';
    protected $fillable = [
        'date',
        'hits',
    ];
}
