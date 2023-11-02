<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Afriyanto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eius nulla ducimus eaque deleniti a qui laboriosam temporibus dolores cumque corporis quis asperiores nostrum, modi et dolorem quidem? Totam pariatur sit possimus veniam odit consectetur quidem animi iusto ducimus, dignissimos tempora quia ab, obcaecati vitae aut quo fugit illum asperiores."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ipsum, placeat excepturi, harum soluta consectetur quisquam ut necessitatibus, fugiat vel a est veritatis rerum vitae. In sapiente omnis debitis beatae?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
