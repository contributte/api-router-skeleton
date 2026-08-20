# API Router Skeleton

Example Nette API project using [contributte/api-router](https://github.com/contributte/api-router).

## Requirements

- PHP 8.4 or newer
- [Composer](https://getcomposer.org/)
- `make` for the provided development commands

## Create the API Router project

Create a ready-to-run project and prepare its writable directories:

```bash
composer create-project contributte/api-router-skeleton acme
cd acme
make setup
```

Composer installs the dependencies during project creation, so no second install step is needed.

## Run the development server

```bash
NETTE_DEBUG=1 NETTE_ENV=dev php -S 0.0.0.0:8000 -t www www/index.php
```

Passing `www/index.php` as the router lets the PHP development server handle API paths; the current `make dev` target omits it. The server listens on <http://localhost:8000>.

The example routes are not currently reachable: the controllers declare legacy docblock annotations, while the installed `contributte/api-router` 7.x discovers PHP attributes. A request to `/api/ping` therefore returns 404 until the controllers are migrated.

## Find the example routes

The intended `GET /api/ping` and `POST /api/login` examples are declared with legacy `ApiRoute` annotations on controllers in `app/Controllers`; see the compatibility note above before using them.

## Configure local overrides

Application configuration is in `config/`. The development command sets `NETTE_DEBUG=1` and `NETTE_ENV=dev`.

Local overrides are loaded from `config/config.local.neon`. The tracked `.gitignore` currently ignores `app/config/config.local.neon` instead, so add `config/config.local.neon` to your project-level ignore rules before storing secrets there.

## Development

```bash
make qa       # coding standard and static analysis
make tests    # Nette Tester suite
make cs       # coding standard check
make csf      # fix coding standard issues
make phpstan  # static analysis
make coverage # generate coverage.xml
```
