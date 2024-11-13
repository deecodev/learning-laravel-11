<?php

namespace App\models;

use Illuminate\Support\Arr;

class Post
{
  public static function all(): array
  {
    return [
      [
        "id" => 1,
        "slug" => "post-1",
        "title" => "Post 1",
        "author" => "Joko Santoso",
        "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis velit quaerat rem, rerum laboriosam accusantium? Dolorem, placeat! Sint ab sed eius impedit nihil, ad placeat dolores adipisci, aspernatur beatae similique assumenda maiores nostrum. Perspiciatis sint iste dolore velit quia voluptates reprehenderit excepturi aliquam recusandae porro officiis, qui esse odit nihil animi dignissimos eius? Atque eum necessitatibus voluptate dolorum alias autem. Corporis officia minima quos vitae provident neque eius consequatur laborum."
      ],
      [
        "id" => 2,
        "slug" => "post-2",
        "title" => "Post 2",
        "author" => "Samsul Hadi",
        "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis velit quaerat rem, rerum laboriosam accusantium? Dolorem, placeat! Sint ab sed eius impedit nihil, ad placeat dolores adipisci, aspernatur beatae similique assumenda maiores nostrum. Perspiciatis sint iste dolore velit quia voluptates reprehenderit excepturi aliquam recusandae porro officiis."
      ],
    ];
  }

  public static function find($slug): ?array
  {
    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

    if (!$post) {
      abort(404);
    }

    return $post;
  }
}
