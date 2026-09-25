<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Task Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        nav {
            background: #2c3e50;
            padding: 16px 24px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
        }
        .container {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 16px;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            text-align: left;
        }
        th {
            background: #f0f2f5;
        }
        .status-pending {
            color: #e67e22;
            font-weight: bold;
        }
        .status-completed {
            color: #27ae60;
            font-weight: bold;
        }
        .btn {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            margin-right: 4px;
            border: none;
            cursor: pointer;
        }
        .btn-add {
            background: #2980b9;
            color: white;
            padding: 10px 16px;
            margin-bottom: 16px;
        }
        .btn-edit {
            background: #f1c40f;
            color: #333;
        }
        .btn-delete {
            background: #e74c3c;
            color: white;
        }
        .alert {
            background: #d4edda;
            color: #155724;
            padding: 10px 16px;
            border-radius: 4px;
            margin-bottom: 16px;
        }
        form.inline {
            display: inline;
        }
        input[type=text], textarea, input[type=date], select {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('tasks.index') }}">📋 Personal Task Manager</a>
    </nav>

    <div class="container">
        @if (session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>
</body>
</html>