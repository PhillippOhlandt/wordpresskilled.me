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
                'image' => 'http://wordpresskilled.me/img/hp-image.png',
                'og' => [
                    'site_name' => 'Wordpress Killed Me',
                    'title' => 'Wordpress Killed Me - Your place to rant about Wordpress',
                    'description' => 'Trouble with Wordpress? Here you are at the right place to scream it out to the world.',
                    'keywords' => ['wordpress', 'cms', 'only for blogs', 'hate', 'rant', 'fail'],
                    'image' => 'http://wordpresskilled.me/img/hp-image.png',
                ],
                'twitter' => [
                    'card' => 'summary',
                    'site' => '@wpkilledme',
                    'title' => 'Wordpress Killed Me - Your place to rant about Wordpress',
                    'description' => str_limit('Trouble with Wordpress? Here you are at the right place to scream it out to the world.', 180),
                    'image' => 'http://wordpresskilled.me/img/twitter-image.png'
                ]
            ]);

        View::share('meta', $this->meta);
    }
}
