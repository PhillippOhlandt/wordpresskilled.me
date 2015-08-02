<?php

namespace App\Http\Controllers;

use App\Queries\PaginatedPosts;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $posts = (new PaginatedPosts())->get(30);

        return view('admin.index', ['posts' => $posts]);
    }

    public function activatePost($post)
    {
        $post->active = 1;
        $post->save();

        return redirect()->back();
    }

    public function deactivatePost($post)
    {
        $post->active = 0;
        $post->save();

        return redirect()->back();
    }
}
