# Batframe Skeleton

A starting point for a new [Batframe](https://github.com/michaelyousrie/batframe)
application. It gives you the same layout as the framework's example app, ready
to run.

## Create a project

```bash
composer create-project michaelyousrie/batframe-skeleton my-app
cd my-app
php batbelt serve
```

Then open http://localhost:1939. `composer create-project` installs the
dependencies and copies `.env.example` to `.env` for you.

## Layout

```
batbelt              # your project's CLI (see below)
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

## Batbelt

`batbelt` is your project's command line tool. It is a single file with no
dependencies, and it is yours: open it and edit it.

```bash
php batbelt                      # list every command
php batbelt <command> --help     # what a command takes

php batbelt serve                # http://localhost:1939 (alias: server)
php batbelt serve --port=4000    # somewhere else
php batbelt routes               # every route your app resolves
php batbelt makeRoute Product    # scaffold src/Routes/ProductRoutes.php and wire it in
php batbelt makePage pricing     # scaffold pages/pricing.blade.php, live at /pricing
php batbelt clearCache           # empty storage/cache
```

`composer serve` still works and runs `php batbelt serve`.

### Add a command

Batbelt works the way Batframe works. Batframe turns the public methods of your
`App` class into routes; Batbelt turns the public methods of its `Batbelt` class
into commands. So a new command is a new public method, named exactly as you want
to type it:

```php
// batbelt
final class Batbelt extends Belt
{
    /**
     * Say hello.
     *
     * @param string $name  Who to greet.
     * @param bool   $shout Use your outside voice.
     */
    public function greet(string $name, bool $shout = false): int
    {
        $this->line($shout ? strtoupper("hi $name") : "hi $name");

        return 0;
    }
}
```

```bash
php batbelt greet Ada --shout
```

That is the whole thing. The parameters became arguments: one without a default
is positional, one with a default becomes an optional `--flag` starting from that
default, and the declared type does the casting, so `--port=abc` on an `int` is a
clean error instead of a crash. The docblock became the help text. Private methods
are helpers rather than commands, which is where `--help` and the exit code came
from without you writing either.
