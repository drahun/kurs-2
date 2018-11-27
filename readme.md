# kurs-2
# Laravel-Блог будет создан по курсу Дмитрия Юрьева с некторыми  изменениями кода + админка

> Это учебный пакет для работы c Laravel


<p align="center">
<img src="https://github.com/drahun/kurs-2/raw/dz-0/public/kurs-2.jpg">
</p>

### Localization & SEO

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


```
Note: Добавляем в переменые среды пути к версии php
```



## TODO

* [ ] Я не против доработки SEO или функционала...

## License

This project is open-sourced software licensed under the [MIT license](https://adr1enbe4udou1n.mit-license.org).

