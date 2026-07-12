<?php

declare(strict_types=1);

namespace App\Routes;

use Batframe\Http\Response;

/**
 * HTML page routes. Group related endpoints into traits like this to keep the
 * App class small.
 */
trait PageRoutes
{
    /** GET / */
    public function index(): Response
    {
        return view('home');
    }
}
