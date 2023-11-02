<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Afriyanto',
            'username' => 'afriyanto',
            'email' => 'afrianto001@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Rian',
        //     'email' => 'rian@example.com',
        //     'password' => bcrypt('123')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum vero corporis dicta blanditiis quidem, alias architecto, in unde, ipsum possimus recusandae quia totam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum vero corporis dicta blanditiis quidem, alias architecto, in unde, ipsum possimus recusandae quia totam. Magni velit ad minus architecto provident doloribus molestias. Tenetur sequi minima distinctio labore, repellat, ex ducimus similique, velit a porro maiores sint quas consequatur ab ratione dolores error doloribus adipisci saepe consectetur nesciunt id! Nostrum, at? Placeat adipisci provident laboriosam exercitationem illum alias consequuntur modi voluptas fuga repellendus consequatur inventore illoexcepturi soluta veniam minus eveniet, repudiandae tempora possimus incidunt assumenda saepe, ea culpa! Maxime labore officiis nesciunt dignissimos aperiam sit laborum repudiandae modi neque ratione quae, impedit nostrum explicabo totam est reprehenderit quia deserunt officia doloremque commodi reiciendis obcaecati alias, iusto assumenda. Debitis commodi, minima fugit necessitatibus in at rem autem voluptates iure ex a optio possimus quidem facere nisi.Dolores obcaecati impedit illum praesentium, voluptate nam recusandae ad assumenda quibusdam deserunt, quasi fugiat saepe odit amet omnis facilis molestias sunt? Quae adipisci voluptates fugit rem. Accusantium at quasi magnam voluptate labore repellat, modi cum amet in eos eveniet officia nihil excepturi alias eum nesciunt voluptatum mollitia assumenda omnis cupiditate quam. Ut quis qui eum provident! Magnam suscipit voluptatum modi ratione est aperiam adipisci animi temporibus.'
        // ]);

        // Post::create([
        //     'user_id' => 1,
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum vero corporis dicta blanditiis quidem, alias architecto, in unde, ipsum possimus recusandae quia totam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum vero corporis dicta blanditiis quidem, alias architecto, in unde, ipsum possimus recusandae quia totam. Magni velit ad minus architecto provident doloribus molestias. Tenetur sequi minima distinctio labore, repellat, ex ducimus similique, velit a porro maiores sint quas consequatur ab ratione dolores error doloribus adipisci saepe consectetur nesciunt id! Nostrum, at? Placeat adipisci provident laboriosam exercitationem illum alias consequuntur modi voluptas fuga repellendus consequatur inventore illoexcepturi soluta veniam minus eveniet, repudiandae tempora possimus incidunt assumenda saepe, ea culpa! Maxime labore officiis nesciunt dignissimos aperiam sit laborum repudiandae modi neque ratione quae, impedit nostrum explicabo totam est reprehenderit quia deserunt officia doloremque commodi reiciendis obcaecati alias, iusto assumenda. Debitis commodi, minima fugit necessitatibus in at rem autem voluptates iure ex a optio possimus quidem facere nisi.Dolores obcaecati impedit illum praesentium, voluptate nam recusandae ad assumenda quibusdam deserunt, quasi fugiat saepe odit amet omnis facilis molestias sunt? Quae adipisci voluptates fugit rem. Accusantium at quasi magnam voluptate labore repellat, modi cum amet in eos eveniet officia nihil excepturi alias eum nesciunt voluptatum mollitia assumenda omnis cupiditate quam. Ut quis qui eum provident! Magnam suscipit voluptatum modi ratione est aperiam adipisci animi temporibus.'
        // ]);

        // Post::create([
        //     'user_id' => 2,
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum vero corporis dicta blanditiis quidem, alias architecto, in unde, ipsum possimus recusandae quia totam.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum vero corporis dicta blanditiis quidem, alias architecto, in unde, ipsum possimus recusandae quia totam. Magni velit ad minus architecto provident doloribus molestias. Tenetur sequi minima distinctio labore, repellat, ex ducimus similique, velit a porro maiores sint quas consequatur ab ratione dolores error doloribus adipisci saepe consectetur nesciunt id! Nostrum, at? Placeat adipisci provident laboriosam exercitationem illum alias consequuntur modi voluptas fuga repellendus consequatur inventore illoexcepturi soluta veniam minus eveniet, repudiandae tempora possimus incidunt assumenda saepe, ea culpa! Maxime labore officiis nesciunt dignissimos aperiam sit laborum repudiandae modi neque ratione quae, impedit nostrum explicabo totam est reprehenderit quia deserunt officia doloremque commodi reiciendis obcaecati alias, iusto assumenda. Debitis commodi, minima fugit necessitatibus in at rem autem voluptates iure ex a optio possimus quidem facere nisi.Dolores obcaecati impedit illum praesentium, voluptate nam recusandae ad assumenda quibusdam deserunt, quasi fugiat saepe odit amet omnis facilis molestias sunt? Quae adipisci voluptates fugit rem. Accusantium at quasi magnam voluptate labore repellat, modi cum amet in eos eveniet officia nihil excepturi alias eum nesciunt voluptatum mollitia assumenda omnis cupiditate quam. Ut quis qui eum provident! Magnam suscipit voluptatum modi ratione est aperiam adipisci animi temporibus.'
        // ]);
    }
}
