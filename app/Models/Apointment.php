<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apointment extends Model
{
    use HasFactory;

    public function propery()
    {
        return $this->belongsTo(Propery::class, 'property_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'date',
        'houre',
        'user_id',
        'message',
        'property_id'
    ];
}
