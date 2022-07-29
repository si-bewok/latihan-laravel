<?php

namespace App\Models;

// belom perlu
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    // use HasFactory; belom perlu
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Muhammad Zhafari',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quod esse dolorem excepturi rem, magnam aspernatur eveniet velit cum adipisci eius repellendus temporibus perferendis! Itaque, voluptas officia? Eveniet est adipisci unde totam iure quisquam distinctio corporis, aut eaque, quod earum voluptate id cum qui! Suscipit, non sunt molestiae a culpa voluptatum fugiat labore fuga, porro quae distinctio deserunt exercitationem quod vitae! Deserunt, nostrum at aliquid debitis odio sunt mollitia, provident reiciendis esse exercitationem incidunt, voluptas cupiditate vel sed voluptates tempore.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Hamzah Aji Pratama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos fuga eius optio natus, hic voluptates iste. Repellat nemo aliquam labore architecto, natus non, eaque tempora vel, libero ipsam odio laboriosam! Quo ut sapiente amet, et error, magnam fuga vero recusandae quas quasi optio nostrum. Ducimus, labore ipsum sequi natus, obcaecati, nobis eum atque optio velit voluptas ex quas sed voluptatum dolor maxime quae maiores. Quisquam quae nulla blanditiis voluptatum tempore, qui, veniam laborum vitae velit, reiciendis reprehenderit expedita rem doloribus illo corrupti voluptatibus magni laudantium unde consequuntur iusto vel. Quasi natus ratione voluptatibus dolores at? Consectetur provident fuga quam ea?'
        ]
    ];

    public static function all()
    {
        // karena static jadinya pake self bukan this
        // penggunaan collection 
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
