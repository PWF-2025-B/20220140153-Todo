<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Tambahkan ini
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory; // Tambahkan ini

    protected $fillable =  [
        'title', 
        'description', 
        'is_completed'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
