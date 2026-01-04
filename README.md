# api-proxy-php

A PHP API proxy (headless) project built using the Lumen framework.

This is a lightweight API proxy built with Lumen (Laravel micro-framework). It provides a simple REST API structure without database or view management.

## Installation 

```bash
composer require luk-z/api-proxy-php
```

## Requirements

- PHP 7.3 or higher
- Composer

## Development

### Setup local machine

To install dependencies php 7.3+ and composer are needed. Instead installing them in the local machine use a dockerized composer (requires Docker Desktop).

Create `php` and `composer` aliases following [this guide](https://github.com/Luk-z/dockerized-composer).

1. Clone the repository:
```bash
git clone https://github.com/Luk-z/api-proxy-php.git project_name && rm -rf ./project_name/.git
cd project_name
```

2. Install dependencies:
```bash
composer install
```

3. Copy the environment file:
```bash
cp .env.example .env
```

### Running the Application

Start the development server:
```bash
php -S localhost:8000 -t public
```

The application will be available at `http://localhost:8000`.

## API Endpoints

### Root Endpoint
```
GET /
```
Returns the Lumen version information.

### Hello World Endpoint
```
GET /hello
```
Returns a simple JSON response:
```json
{
  "message": "Hello World!"
}
```

## Project Structure

```
.
├── app/
│   ├── Console/           # Console commands
│   ├── Exceptions/        # Exception handlers
│   └── Http/
│       └── Controllers/   # API controllers
├── bootstrap/             # Framework bootstrap
├── public/                # Public web root
├── routes/                # Route definitions
└── storage/               # Logs and cache
```

## License

This project is open-sourced software licensed under the MIT license.

