<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class idea extends Model
{
    /** @use HasFactory<\Database\Factories\IdeaFactory> */
    use HasFactory;
    protected $casts = [
       'links'=>AsArrayObjecct::class,
       'status'=>IdeaStatus::class,
    ]
}
