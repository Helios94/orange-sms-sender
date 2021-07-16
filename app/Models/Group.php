<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function sms()
    {
        return $this->belongsTo(Sms::class);
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class);
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}
