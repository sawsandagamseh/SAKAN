<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Property;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        
        'name',
        'image',
    ];

    public function homes()
    {
        return $this->hasMany(Propery::class, 'category_id', 'id');
    }
}
