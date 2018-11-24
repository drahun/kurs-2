# kurs-2
# Laravel-Блог будет создан по курсу Дмитрия Юрьева с некторыми  изменениями кода + админка

> Это учебный пакет для работы c Laravel

## Demo

<p align="center">
<img src="https://github.com/drahun/kurs-2/raw/master/public/kurs-2.jpg">
</p>


### Frontend


### Backend

#### Underlying layer


#### Features included


### Localization & SEO


### Developer Specific


## Install

### Requirements

* PHP 7.1
* MySQL 5.7 


### For Local/Development

```shell
composer install
php artisan key:generate
php artisan storage:link
php artisan migrate [--seed]
```

### For Production

```shell
# Running this on development environment will throw error so run below command only on production
composer install --no-dev --optimize-autoloader
php artisan key:generate
php artisan storage:link
php artisan migrate --force
```



## Install on Windows
Устновим openserver, composer, git
- скачиваем composer
- устанавливаем git
- Добавляем в переменые среды пути к версии php
- 

```
Note....
```

Than you can proceed with `Mac and Linux` install instructions section

### Backend access

The first user to register will be automatically super admin with no restriction and will cannot be deletable.
Both frontend and backend have dedicated login pages.

## Development notes



### Permissions definitions


### Note on Laravel Mix


### Code styling

PHP-CS-Fixer & ESLint are used for strong style guidelines for both server and client side code.


## TODO

* [ ] Inclusion of unit/featured/browser tests (stand by for now)

## License

This project is open-sourced software licensed under the [MIT license](https://adr1enbe4udou1n.mit-license.org).

