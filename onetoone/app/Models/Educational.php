<?php

namespace App\Models;

use App\Models\Scholar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Educational extends Model
{
    protected $fillable = ["course", "year"];
    use HasFactory;

    public function scholar() {
        return $this->belongsTo(Scholar::class);
    }
}
