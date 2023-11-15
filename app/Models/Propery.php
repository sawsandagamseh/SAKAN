<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propery extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category-id', 'id');
    }

    public function apointments()
{
    return $this->hasMany(Apointment::class, 'property_id', 'id');
}
}
