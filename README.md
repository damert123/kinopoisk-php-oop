

# Kinopoisk Lite (PHP-OOP)

**Kinopoisk Lite** — это легковесная версия популярного сервиса для поиска фильмов, созданная на чистом PHP с использованием современных технологий и стандартов. Проект включает базовый функционал по управлению фильмами и жанрами, с возможностью оставлять отзывы и подсчитывать среднюю оценку.

## 📋 Основные функции

- **CRUD** для фильмов и жанров: добавление, редактирование, удаление и просмотр.
- **Система отзывов**: пользователи могут оставлять отзывы и ставить оценки фильмам.
- **Подсчет средней оценки** для каждого фильма.
- **Авторизация и регистрация** для пользователей.

## 🛠️ Технологии и подходы

Проект построен на PHP версии **8.3**, с акцентом на **объектно-ориентированное программирование (ООП)**. Принципы ООП помогают организовать код, улучшить его читаемость и поддержку, а также обеспечивают гибкость при масштабировании приложения. Благодаря ООП, каждая сущность (фильм, жанр, пользователь) представлена отдельным классом, что упрощает управление данными и бизнес-логикой.

Также используется автозагрузка по стандарту **PSR-4**, что облегчает управление пространствами имен и улучшает организацию кода. Основные технологии и инструменты:

- **PHP 8.3** — современная версия языка для быстрого и безопасного выполнения.
- **Symfony Var-Dumper** — для удобного дебага и вывода данных.
- **Laravel Pint** — инструмент для форматирования и статического анализа кода.

## 🚀 Деплой и окружение

Проект разворачивается с помощью **Lando**, который эмулирует серверное окружение на базе LAMP. Основные параметры конфигурации:

```yaml
name: kinopoisk-php
recipe: lamp
config:
  php: 8.3
  webroot: public
services:
  phpmyadmin:
    type: phpmyadmin

```
- **PHP**: 8.3
- **Webroot**: public
- **phpMyAdmin** для управления базой данных.

## 📦 Установка

1. Клонируйте репозиторий:

   ```bash
   git clone https://github.com/ваш-аккаунт/kinopoisk-lite-php.git
```





### Создание ссылки на Storage (Linux)

```shell
ln -s $PWD/storage $PWD/public/storage

```

### Создание ссылки на Storage (Windows)

```shell
mklink /D storage public/storage

```
