<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body']; yaitu field yg boleh diisi yg mana aja, sisanya gaboleh
    protected $guarded = ['id']; // kebalikan dari fillable, yaitu field yg harus dijaga itu mana, sisanya boleh diisi
    protected $with = ['category', 'author']; // fitur eager loading eloquent

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
