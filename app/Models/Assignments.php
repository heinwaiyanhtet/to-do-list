<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignments extends Model
{
    use HasFactory;

    public function Users()
    {
        return $this->belongsToMany(Users::class);
    }
}
