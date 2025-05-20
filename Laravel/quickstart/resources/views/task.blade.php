<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>TASKS</h2>
        @foreach ($tasks as $task)
            <p>name: {{$task->name}}</p>
            <p>action: {{$task->action}}</p>

            <div id="editDiv{{$task->id}}" style="display: none">

                <form action="/update/{{ $task->id }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <label for="name"></label>
                    <input type="text" name="name">
                    <label for="action"></label>
                    <input type="text" name="action">
                    <button type="button" onclick="document.getElementById('editDiv{{$task->id}}').style.display='none'">
                    Cancel</button>
                    <input type="submit" value="Save">
                </form>

            </div>

            <button type="button" onclick="document.getElementById('editDiv{{$task->id}}').style.display='block'">
                edit</button>
            <form action="/delete/{{ $task->id }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        @endforeach
</body>
</html>