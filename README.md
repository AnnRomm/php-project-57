# Task Manager

[![hexlet-check](https://github.com/AnnRomm/php-project-57/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/AnnRomm/php-project-57/actions/workflows/hexlet-check.yml)
[![project-check](https://github.com/AnnRomm/php-project-57/actions/workflows/project-check.yml/badge.svg)](https://github.com/AnnRomm/php-project-57/actions/workflows/project-check.yml)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=AnnRomm_php-project-57&metric=sqale_rating)](https://sonarcloud.io/summary/new_code?id=AnnRomm_php-project-57)
[![Coverage](https://sonarcloud.io/api/project_badges/measure?project=AnnRomm_php-project-57&metric=coverage)](https://sonarcloud.io/summary/new_code?id=AnnRomm_php-project-57)

Task Manager is a task management system. It allows you to create tasks, assign performers, change their statuses and put labels. Registration and authentication are required to work with the system.

Demo: https://php-project-57-02f6.onrender.com

### Requirements
* PHP >= 8.2
* Composer >= 2.5.5
* PostgreSQL >= 16.1

## Setup

For Docker setup update `.env.example`

```txt
DB_CONNECTION=pgsql
DB_HOST=db
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=password
```

```bash
make setup
```

## Run

```bash
make start
```
