# Batframe Skeleton

A starting point for a new [Batframe](https://github.com/michaelyousrie/batframe)
application. It gives you the same layout as the framework's example app, ready
to run.

## Create a project

```bash
composer create-project michaelyousrie/batframe-skeleton my-app
cd my-app
composer serve
```

Then open http://localhost:8000. `composer create-project` installs the
dependencies and copies `.env.example` to `.env` for you.

## Layout

```
public/index.php     # front controller (document root)
src/App.php          # your app class, extends Batframe
src/Routes/          # route traits, grouped by feature
views/               # Blade templates
pages/               # auto-routed static pages
storage/cache/       # compiled Blade cache (writable)
.env                 # environment (copied from .env.example)
```

## Add a route

Every verb-prefixed public method becomes an endpoint, with the route inferred
from the method name. Add methods to a trait in `src/Routes/`:

```php
// src/Routes/UserRoutes.php
public function getProducts(): array        // GET /products
{
    return ['products' => []];
}

public function getProduct(int $id): array  // GET /product/{id}
{
    return ['id' => $id];
}
```

See the [Batframe documentation](https://github.com/michaelyousrie/batframe) for
the full routing convention, request and response helpers, views, and config.

## Run

```bash
composer serve                       # http://localhost:8000
# or
php -S localhost:8000 -t public
```
