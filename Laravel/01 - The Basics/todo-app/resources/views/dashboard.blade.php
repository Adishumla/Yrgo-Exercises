<?php

$user = Auth::user();

echo "Welcome, " . $user->name . "!";
?>

<a href="/logout">Logout</a>
<br>
@include('errors')

<form action="/task" method="POST">
    @csrf
    <input type="text" name="description" placeholder="Task description">
    <button type="submit">Add Task</button>
</form>

<?php $tasks = Auth::user()->tasks; ?>
<ul>
@foreach ($tasks as $task)
    <div>
        <?php if ($task->completed) { ?>
            <s>{{ $task->description }}</s>
        <?php } else { ?>
            <form action="tasks/{{ $task->id }}/complete" method="POST">
                @csrf
                @method('PATCH')
                <input type="hidden" name="completed" value="1">
                {{ $task->description }}
                <button type="submit">complete</button>
            </form>
        <?php } ?>
    </div>
@endforeach
</ul>
