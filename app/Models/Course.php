<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Episode;
use App\Models\User;

class Course extends Model
{
    use HasFactory;

    public function episodes()
    {

   
    return $this->hasMany(Episode::class);
    }     
                    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
