<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Muhammad Zhafari',
        //     'email' => 'zhafari.16@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Hamzah Aji',
        //     'email' => 'hamzahaji@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Newsletter',
            'slug' => 'newsletter'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis voluptatem sunt voluptates quos atque sit dolor tenetur sed,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis voluptatem sunt voluptates quos atque sit dolor tenetur sed, ratione, non deleniti porro velit, placeat nihil nemo omnis impedit eos. Voluptates expedita eaque iusto officia, iure inventore veritatis quos odio deserunt esse eum.</p><p>Ad error quo id cupiditate! Doloremque laborum delectus eum eos facilis a quam omnis? Non autem nisi, suscipit cumque nam provident excepturi, voluptatibus aliquid fugiat quaerat, animi mollitia facilis iste repudiandae quis adipisci nesciunt corrupti cupiditate fugit sapiente laborum.</p><p>Maiores amet explicabo velit dolorem sequi at eius aperiam in optio nihil quia expedita neque cum adipisci, corrupti dicta qui aspernatur consequatur? Earum temporibus eveniet reiciendis numquam officiis blanditiis vero, minus quod, aliquid illo error unde est iure eos!</p>'
        // ]);
        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis voluptatem sunt voluptates quos atque sit dolor tenetur sed,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis voluptatem sunt voluptates quos atque sit dolor tenetur sed, ratione, non deleniti porro velit, placeat nihil nemo omnis impedit eos. Voluptates expedita eaque iusto officia, iure inventore veritatis quos odio deserunt esse eum.</p><p>Ad error quo id cupiditate! Doloremque laborum delectus eum eos facilis a quam omnis? Non autem nisi, suscipit cumque nam provident excepturi, voluptatibus aliquid fugiat quaerat, animi mollitia facilis iste repudiandae quis adipisci nesciunt corrupti cupiditate fugit sapiente laborum.</p><p>Maiores amet explicabo velit dolorem sequi at eius aperiam in optio nihil quia expedita neque cum adipisci, corrupti dicta qui aspernatur consequatur? Earum temporibus eveniet reiciendis numquam officiis blanditiis vero, minus quod, aliquid illo error unde est iure eos!</p>'
        // ]);
        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis voluptatem sunt voluptates quos atque sit dolor tenetur sed,',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis voluptatem sunt voluptates quos atque sit dolor tenetur sed, ratione, non deleniti porro velit, placeat nihil nemo omnis impedit eos. Voluptates expedita eaque iusto officia, iure inventore veritatis quos odio deserunt esse eum.</p><p>Ad error quo id cupiditate! Doloremque laborum delectus eum eos facilis a quam omnis? Non autem nisi, suscipit cumque nam provident excepturi, voluptatibus aliquid fugiat quaerat, animi mollitia facilis iste repudiandae quis adipisci nesciunt corrupti cupiditate fugit sapiente laborum.</p><p>Maiores amet explicabo velit dolorem sequi at eius aperiam in optio nihil quia expedita neque cum adipisci, corrupti dicta qui aspernatur consequatur? Earum temporibus eveniet reiciendis numquam officiis blanditiis vero, minus quod, aliquid illo error unde est iure eos!</p>'
        // ]);
    }
}
