<?php

namespace App\Http\Controllers;

use App\Queries\LatestActivePosts;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use RyanNielson\Meta\Meta;
use View;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    protected $meta;

    function __construct()
    {
        View::share('latestActivePosts', (new LatestActivePosts())->get());

        $this->meta = new Meta;

        $this->meta->set(
            [
                'title' => 'Wordpress Killed Me - Your place to rant about Wordpress',
                'description' => 'Trouble with Wordpress? Here you are at the right place to scream it out to the world.',
                'keywords' => ['wordpress', 'cms', 'only for blogs', 'hate', 'rant', 'fail'],
                'og' => [
                    'title' => 'Wordpress Killed Me - Your place to rant about Wordpress',
                    'description' => 'Trouble with Wordpress? Here you are at the right place to scream it out to the world.',
                    'keywords' => ['wordpress', 'cms', 'only for blogs', 'hate', 'rant', 'fail'],
                ]
            ]);

        View::share('meta', $this->meta);
    }
}
