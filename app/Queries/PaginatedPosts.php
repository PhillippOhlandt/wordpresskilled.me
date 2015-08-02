<?php
/**
 * Created by PhpStorm.
 * User: Phillipp
 * Date: 02.08.2015
 * Time: 16:56
 */

namespace App\Queries;


use App\Post;

class PaginatedPosts
{
    public function get($count = 10)
    {
        return Post::latest()->paginate($count);
    }
}