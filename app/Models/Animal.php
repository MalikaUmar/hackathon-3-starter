<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;  


class Animal extends Model
{
    use HasFactory;
    
    public function image()
    {
        return $this->belongsTo(Image:: class);
    }
}