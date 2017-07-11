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

`php artisan migrate`

## 啟動 server

```
php artisan key:generate
php artisan serve
```

## local 環境變數

.env

## default 環境變數

.env.example

## api 測試網址

<http://127.0.0.1:8000/api/user>

## 前台使用者註冊

<http://127.0.0.1:8000/register>

## 前台使用者登入

<http://127.0.0.1:8000/login>

## Vue 使用

```
npm i
npm run dev
```
莉莉
或是 `npm run watch`

vue 檔案位置

`resources/assets`

npm run dev 執行完之後產出檔案

`public/js/app.js`


## JWT support

get token

<http://127.0.0.1:8000/api/authenticate?email=sample@gmail.com&password=pass>
