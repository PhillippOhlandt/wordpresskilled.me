<?php
/**
 * Created by PhpStorm.
 * User: Phillipp
 * Date: 02.08.2015
 * Time: 00:07
 */

namespace App\Queries;


use App\Post;

class PaginatedActivePosts
{
    public function get($count = 10)
    {
        return Post::where('active', 1)->latest()->paginate($count);
    }
}