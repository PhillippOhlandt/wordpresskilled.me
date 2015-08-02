<?php

namespace App\Http\Controllers;

use App\Queries\LatestActivePosts;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use View;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    function __construct()
    {
        View::share('latestActivePosts', (new LatestActivePosts())->get());
    }
}
