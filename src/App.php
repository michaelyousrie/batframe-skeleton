<?php

declare(strict_types=1);

namespace App;

use App\Routes\PageRoutes;
use App\Routes\UserRoutes;
use Batframe\Batframe;

/**
 * Your application.
 *
 * Every verb-prefixed public method, whether declared here or composed in from
 * a trait under src/Routes/, becomes an HTTP endpoint. The route is inferred
 * from the method name (getUsers -> GET /users, getUser(int $id) -> GET /user/{id}).
 */
class App extends Batframe
{
    use PageRoutes;
    use UserRoutes;
}
