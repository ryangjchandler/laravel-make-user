# Quickly create `User` models with Artisan.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ryangjchandler/laravel-make-user.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/laravel-make-user)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/laravel-make-user/run-tests?label=tests)](https://github.com/ryangjchandler/laravel-make-user/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/laravel-make-user/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ryangjchandler/laravel-make-user/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ryangjchandler/laravel-make-user.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/laravel-make-user)

## Installation

You can install the package via composer:

```bash
composer require ryangjchandler/laravel-make-user
```

## Usage

You can create a `User` by running the `artisan make:user` command:

```bash
php artisan make:user
```

By default, it will ask for the `name`, `email` and `password` for the `User`.

### Changing the model

This command will use the `App\Models\User` model. If this model doesn't exist, you can change it using the `MakeUser::model` method:

```php
public function boot()
{
    MakeUser::model(\App\User::class);
}
```

### Asking extra questions

If you wish to ask for more information from the user, you can register an extension using the `MakeUser::extend` method:

```php
public function boot()
{
    MakeUser::extend(function (MakeUserCommand $command, array $fields) {
        $username = $command->ask('Username');

        return array_merge([
            'username' => $username,
        ], $fields);
    });
}
```

This will ask the command runner for a `username` and then add it to the `$fields` that are passed to the model's `create` method.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ryan Chandler](https://github.com/ryangjchandler)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
