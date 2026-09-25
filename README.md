Project Code: WST21-PM-2026-SF
Student Name: Mery Aize C. Licaros
Course & Year: BSIT - 2nd Year
Database Used: SQLite

## Features
- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Status (dropdown on Edit page + quick "Mark Completed" button)

## Tech Stack
- Laravel 13
- Blade Templates
- SQLite Database

## How to Run Locally
1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env` and run `php artisan key:generate`
4. Create the SQLite file: `touch database/database.sqlite`
5. Run `php artisan migrate`
6. Run `php artisan serve`