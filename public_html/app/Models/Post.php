<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'like',
        'parent_id',
        'user_id',
    ];

    public function users() {
        return $this->belongsToMany(User::Class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
