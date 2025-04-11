# 🏛️ Public Facility Management System
A Laravel web application that helps government organizations manage and respond to complaints about public facilities and spaces.
On the other side, the public can also submit a ticket about complaints they have regarding public facilities in their city.

## 🔍 Overview
This system allows citizens to register, log in, and create complaint tickets regarding issues in public facilities — such as parks, roads, street lights, or other city-managed facilities.
Administrators from the relevant government departments can access the system to view, track, and respond to these complaints efficiently.

## 👤 User Features
- Register and log in
- Browse available public facilities in their city
- Submit complaint tickets
- View status of submitted tickets

## 🛠️ Admin Features
- Login
- View and manage all incoming complaints
- Filter tickets by city or facility
- Update complaint status (e.g. pending, in progress, resolved)
- Monitor user activity and submission trends

## 🧰 Techs in use
- **Framework**: Laravel 10
- **Database**: MySQL (local setup)
- **Frontend**: Blade templates, Bootstrap
- **Progamming Language**: PHP, HTML, JavaScript
- **Other**: Eloquent ORM, Validation, RESTful routing

## 📦 Setup Instructions

# 1. Clone the repository

# 2. Install PHP dependencies
composer install

# 3. Install Node dependencies
npm install

# 4. Copy .env and generate app key
cp .env.example .env
php artisan key:generate

# 5. Set up database
- Create a database in MySQL
- Update DB settings in `.env`:
DB_DATABASE=jogofasum_db
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password

# 6. Run migrations and seeders
php artisan migrate --seed

# 7. Compile assets
npm run dev

# 8. Serve the app
php artisan serve

Note: There are dummy users available in User Table Seeder!

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
