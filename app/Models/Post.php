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

    public function scopeFilter($query, array $filters)
    {
        // search feature
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        });

        // using callback function
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // using arrow function
        $query->when($filters['author'] ?? false, fn($query, $author) => 
            $query->whereHas('author', fn($query) => 
                $query->where('username', $author)
        ));
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
