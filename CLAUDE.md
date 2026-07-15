# CLAUDE.md

Guidance for Claude Code (claude.ai/code) when working in this project.

## What this is

A [Batframe](https://github.com/michaelyousrie/batframe) application. Batframe is a Flask-like
PHP microframework: you extend the `Batframe` base class, and **every public method whose name
starts with an HTTP verb becomes an endpoint, with its route inferred from the method name**.

`src/App.php` is the app. `batbelt` is the CLI. Both are yours to edit.

## How the framework behaves

@vendor/michaelyousrie/batframe/src/AI/CLAUDE.md

The line above imports the framework's own contract (the naming convention, what a handler may
return, the pages fallback, the helpers, validation) straight out of the installed package, so
it always describes the version this project actually depends on rather than a copy that drifts.

It needs `composer install` to have run. If it has not, the import is silently skipped and you
are working without the framework's guidance; the fix is to install dependencies. To read it
directly: `vendor/michaelyousrie/batframe/src/AI/CLAUDE.md`.

## Commands

```bash
php batbelt                      # list every command
php batbelt <command> --help     # what a command takes

php batbelt serve                # http://localhost:1939 (alias: server)
php batbelt serve --port=4000
php batbelt routes               # every url the app answers, pages included
php batbelt makeRoute Product    # scaffold src/Routes/ProductRoutes.php and wire it into App
php batbelt makePage pricing     # scaffold pages/pricing.blade.php, live at /pricing
php batbelt clearCache           # empty storage/cache
```

**Run `php batbelt routes` after changing any handler.** Routes are inferred from method names,
so a typo in a name silently moves the url rather than failing. It is the fastest way to see
what you actually built, and it lists static pages too, flagging any that a route has made
unreachable.

## Where things go

```
batbelt              # the CLI (add commands here)
CLAUDE.md            # this file
public/index.php     # front controller, document root
src/App.php          # your app class, extends Batframe
src/Routes/          # route traits, grouped by feature
views/               # Blade templates, rendered with view()
pages/               # auto-served static pages, no handler needed
storage/cache/       # compiled Blade + cached data (writable)
.env                 # environment, copied from .env.example
```

Group endpoints into traits under `src/Routes/` as they multiply, rather than growing `App`.
`php batbelt makeRoute <Name>` creates the trait and wires it in.

## Adding a command to batbelt

`batbelt` mirrors the framework: **every public method on the `Batbelt` class is a command**,
named exactly as the method is named. Private methods are helpers. Parameters without a default
are positional; those with a default become optional `--flags` cast by their declared type. The
docblock becomes the help text.

```php
/** Say hello. */
public function greet(string $name, bool $shout = false): int
{
    $this->line($shout ? strtoupper("hi $name") : "hi $name");

    return 0;
}
```

```bash
php batbelt greet Ada --shout
```
