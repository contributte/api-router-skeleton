# API Router Skeleton

Example Nette API project using [contributte/api-router](https://github.com/contributte/api-router).

## Requirements

- PHP 8.4 or newer
- [Composer](https://getcomposer.org/)
- `make` for the provided development commands

## Create a project

```bash
composer create-project contributte/api-router-skeleton acme
cd acme
make init
make dev
```

The development server listens on `http://localhost:8000`.

## API endpoints

- `GET http://localhost:8000/api/ping`
- `POST http://localhost:8000/api/login`

Routes are declared with `ApiRoute` annotations on controllers in `app/Controllers`.

## Configuration

Application configuration is in `config/`. The development command sets `NETTE_DEBUG=1` and `NETTE_ENV=dev`.

## Development

```bash
make qa       # coding standard and static analysis
make tests    # Nette Tester suite
make cs       # coding standard check
make csf      # fix coding standard issues
make phpstan  # static analysis
make coverage # generate coverage.xml
```
