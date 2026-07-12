<?php

declare(strict_types=1);

namespace App\Routes;

use Batframe\Http\Request;
use Batframe\Http\Response;

/**
 * Sample API routes to show the conventions. Delete this trait (and its `use`
 * in App) or replace it with your own resources.
 */
trait UserRoutes
{
    /** GET /users */
    public function getUsers(): array
    {
        return ['users' => ['ada', 'linus']];
    }

    /** GET /user/{id} */
    public function getUser(int $id): array
    {
        return ['id' => $id];
    }

    /** POST /users */
    public function postUsers(Request $request): Response
    {
        return Response::json(['created' => $request->input('name')], 201);
    }
}
