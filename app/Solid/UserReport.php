<?php

namespace App\Solid;

use Illuminate\Support\Facades\DB;

class UserReport
{
    public function between($startDate, $endDate): \Illuminate\Support\Collection
    {
        return DB::table('users')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->latest()
            ->get();
    }
}
