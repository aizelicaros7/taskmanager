# Personal Task Manager

**Project Code:** WST21-PM-2026-SF

**Student Name:** Mery Aize C. Licaros

**Course & Year:** BSIT - 2nd Year

**Database Used:** SQLite

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

## How to Run (GitHub Codespaces)

1. Open this repository on GitHub
2. Click the green **Code** button → **Codespaces** tab → **Create codespace on main**
3. Wait for the Codespace to finish setting up
4. In the terminal, run:
```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   touch database/database.sqlite
   php artisan migrate
   php artisan serve --host=0.0.0.0
```
5. Click the **Ports** tab (next to Terminal), find port **8000**, and click the globe icon to open it in your browser

