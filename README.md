# Laravel E-Shop Ajax

A simple Laravel e-commerce project with Ajax cart functionality.

This project demonstrates how to add products to a shopping cart using jQuery and Ajax, while updating the cart quantity without refreshing the page.

## Features

- Laravel e-shop structure
- Product listing
- Shopping cart functionality
- Add to cart with Ajax
- Update cart quantity dynamically
- jQuery-based frontend interactions
- Blade templates

## Tech Stack

- Laravel
- PHP
- MySQL
- Blade
- HTML
- CSS
- JavaScript
- jQuery
- Ajax

## Installation

Clone the repository:

```bash
git clone https://github.com/chrispsk/laravel-eshop-ajax.git
cd laravel-eshop-ajax
```

Install PHP dependencies:

```bash
composer install
```

Install frontend dependencies:

```bash
npm install
```

Create the environment file:

```bash
copy .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure your database in `.env`:

```env
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

Run migrations:

```bash
php artisan migrate
```

Start the development server:

```bash
php artisan serve
```

Open the project in your browser:

```text
http://127.0.0.1:8000
```

## Notes

The Ajax cart functionality is mainly handled in the product listing view.

This project is intended for learning Laravel, Blade, jQuery, Ajax, and basic e-commerce cart behavior.

## License

This project is open source.
