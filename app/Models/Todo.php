<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Tambahkan ini
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Todo extends Model
{
    use HasFactory; // Tambahkan ini

    protected $fillable =  [
        'title', 
        'user_id',
        'description', 
        'is_complete',
        'category_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
