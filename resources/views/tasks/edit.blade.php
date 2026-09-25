@extends('layout')

@section('content')
    <h2>Edit Task</h2>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="task_name">Task Name</label>
        <input type="text" name="task_name" id="task_name" value="{{ old('task_name', $task->task_name) }}" required>

        <label for="description">Description</label>
        <textarea name="description" id="description" rows="4">{{ old('description', $task->description) }}</textarea>

        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
        </select>

        <label for="due_date">Due Date</label>
        <input type="date" name="due_date" id="due_date" value="{{ old('due_date', $task->due_date) }}">

        <button type="submit" class="btn btn-add">Update Task</button>
        <a href="{{ route('tasks.index') }}" class="btn" style="background:#ccc;">Cancel</a>
    </form>

    @if ($errors->any())
        <div style="color:red; margin-top: 16px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection