<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body']; yaitu field yg boleh diisi yg mana aja, sisanya gaboleh
    protected $guarded = ['id']; // kebalikan dari fillable, yaitu field yg harus dijaga itu mana, sisanya boleh diisi

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
