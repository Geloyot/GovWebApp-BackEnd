<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'category',
        'content',
    ];

    public function posts() {
        return $this->HasMany(Comment::class);
    }

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
