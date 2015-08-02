<?php
/**
 * Created by PhpStorm.
 * User: Phillipp
 * Date: 02.08.2015
 * Time: 12:47
 */

namespace App\Queries;


use App\Post;

class LatestActivePosts
{
    public function get($count = 5)
    {
        return Post::where('active', 1)->latest()->limit($count)->get();
    }
}