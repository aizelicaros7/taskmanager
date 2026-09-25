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

## How to Run Locally

1. Clone the repository
```bash
   git clone https://github.com/aizelicaros7/taskmanager.git
   cd taskmanager
```

2. Install dependencies
```bash
   composer install
```

3. Set up environment file
```bash
   cp .env.example .env
   php artisan key:generate
```

4. Create the SQLite database file
```bash
   touch database/database.sqlite
```

5. Run migrations
```bash
   php artisan migrate
```

6. Start the server
```bash
   php artisan serve
```

7. Open **http://localhost:8000** in your browser
