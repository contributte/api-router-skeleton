# ApiRouter Example Project

This repository is meant as a starter project for [ublaboo/api-router](https://github.com/ublaboo/api-router).

## Requirements

PHP 7.1 or higher.


## ublaboo/api-router-project usage

	composer create-project ublaboo/api-router-project


## Long Story Short

- Using `ublaboo/api-router` for routing
- Implementing `IPresneter` in endpoints (`App\Controllers\LoginController`) instead of extending `UI\Presenter`
- Extending `ApiResponse` from Nette `JsonResponse`, just to make it more simple to add more custom headers and so on
- `LoginController` and `ErrorController` is using `ApiResponseFormatter` for formatting succes message, payload data or and exception
