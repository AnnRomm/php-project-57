# Task Manager



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
