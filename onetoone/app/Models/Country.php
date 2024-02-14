<?php

namespace App\Models;

use App\Models\Scholar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    protected $fillable = ["continent", "name", "capital"];
    use HasFactory;

    public function scholar() {
        return $this->belongsTo(Scholar::class);
    }
}
