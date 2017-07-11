## 初始專案

```
brew update
brew tap homebrew/dupes
brew tap homebrew/php
brew install php56
brew install composer

composer global require "laravel/installer=~1.1"

add path to your rc file: `~/.composer/vendor/bin`
```

套件安裝

```
composer update
composer install
```

## 建立 model

`php artisan make:model User --migration`

## 建立資料庫

```
php artisan migrate
php artisan migrate:refresh
php artisan db:seed
```


## 啟動 server

```
php artisan key:generate
php artisan serve
```

## local 環境變數

.env

## default 環境變數

.env.example


## 前台使用者登入

<http://127.0.0.1:8000/login>

