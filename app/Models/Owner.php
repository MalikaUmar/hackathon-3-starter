<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;  


class Owner extends Model
{
    use HasFactory;
    
    public function OwnerName()
    {
        return $this->belongsTo(OwnerName:: class);
    }
}