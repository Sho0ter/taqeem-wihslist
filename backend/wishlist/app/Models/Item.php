<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ["name", "seller", "price"];

    public function scopeThisMonth($query)
    {
        $query->whereMonth('created_at', Carbon::now()->month);
    }
}
