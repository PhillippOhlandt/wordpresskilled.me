<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;
use App\Queries\PaginatedActivePosts;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts =  (new PaginatedActivePosts())->get(10);

        return view('index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('submit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatePostRequest  $request
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        $filename = str_random(20) . '.' . $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path() . '/uploads', $filename);

        $data = [
            "title" => $request->get('title'),
            "slug" => str_slug($request->get('title'), '-') . '-' . mt_rand(10000, 99999),
            "text" => $request->get('text'),
            "image" => $filename
        ];

        Post::create($data);

        return redirect()->back()->with('message', '<strong>Success!</strong> Your post needs to be activated. It will take ~24h.');
    }

    /**
     * Display the specified resource.
     *
     * @param $post
     * @return Response
     */
    public function show($post = null)
    {
        if(!$post){
            abort(404);
        }

        return view('post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
