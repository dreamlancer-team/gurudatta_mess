<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'meal_id', 'type', 'price'];

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getNameAttribute($name)
    {
        return ucfirst($name);
    }
}
