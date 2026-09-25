@extends('layout')

@section('content')
    <a href="{{ route('tasks.create') }}" class="btn btn-add">+ Add New Task</a>

    <table>
        <thead>
            <tr>
                <th>Task Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->task_name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <span class="status-{{ strtolower($task->status) }}">
                            {{ $task->status }}
                        </span>
                    </td>
                    <td>{{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('M d, Y') : '—' }}</td>
                    <td>
                        @if ($task->status == 'Pending')
                            <form action="{{ route('tasks.complete', $task->id) }}" method="POST" class="inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn" style="background:#27ae60; color:white;">Mark Completed</button>
                            </form>
                        @endif

                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-edit">Edit</a>

                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this task?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align:center; padding: 20px; color: #888;">
                        No tasks yet. Add your first task!
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection