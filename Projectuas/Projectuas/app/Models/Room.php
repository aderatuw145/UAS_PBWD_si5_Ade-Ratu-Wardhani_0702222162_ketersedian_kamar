<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'level', 'capacity'
    ];

    public function availability()
    {
        return $this->hasMany(RoomAvailability::class);
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
