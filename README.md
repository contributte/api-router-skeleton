![](https://heatbadger.now.sh/github/readme/contributte/api-router-skeleton/)

<p align=center>
  <a href="https://github.com/ublaboo/api-router-project/actions"><img src="https://badgen.net/github/checks/ublaboo/api-router-project/master"></a>
  <a href="https://coveralls.io/r/ublaboo/api-router-project"><img src="https://badgen.net/coveralls/c/github/ublaboo/api-router-project"></a>
  <a href="https://packagist.org/packages/ublaboo/api-router-project"><img src="https://badgen.net/packagist/dm/ublaboo/api-router-project"></a>
  <a href="https://packagist.org/packages/ublaboo/api-router-project"><img src="https://badgen.net/packagist/v/ublaboo/api-router-project"></a>
</p>
<p align=center>
  <a href="https://packagist.org/packages/ublaboo/api-router-project"><img src="https://badgen.net/packagist/php/ublaboo/api-router-project"></a>
  <a href="https://github.com/ublaboo/api-router-project"><img src="https://badgen.net/github/license/ublaboo/api-router-project"></a>
  <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
  <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
  <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

## Documentation

### ublaboo/api-router-project usage

```bash
composer create-project ublaboo/api-router-project
```

### Long Story Short

- Using `ublaboo/api-router` for routing
- Implementing `IPresenter` in endpoints (`App\Controllers\LoginController`) instead of extending `UI\Presenter`
- Extending `ApiResponse` from Nette `JsonResponse`, just to make it more simple to add more custom headers and so on
- `LoginController` and `ErrorController` is using `ApiResponseFormatter` for formatting succes message, payload data or and exception


## Versions

| State       | Version      | Branch   | Nette  | PHP     |
|-------------|--------------|----------|--------|---------|
| dev         | `dev-master` | `master` | `2.4 ` | `^7.1`  |
| stable      | `^1.1.0`     | `master` | `2.4 ` | `^7.1`  | 

## Development

See [how to contribute](https://contributte.org/contributing.html) to this package.

This package is currently maintaining by these authors.

<a href="https://github.com/f3l1x">
  <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

<a href="https://github.com/paveljanda">
  <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/1488874?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team.
Also thank you for using this package.
