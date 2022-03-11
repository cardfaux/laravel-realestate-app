<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
        // this is a oneToMany relationship
        // meaning one user can have many listings
    }
}
