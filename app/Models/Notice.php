<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'message', 'image'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'notice_users');
    }
}
