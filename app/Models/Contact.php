<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
