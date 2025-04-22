<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{url('CSS/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <h1>Task list</h1>

    <form action="{{ route('task.create') }}" method="POST">
        @csrf
        @method('GET')
        <input type="submit" value="Create task"><br><br>
    </form>

    <div class="row border border-dark text-center"><br>
        <div class="col">Titile</div>
        <div class="col">Description</div>
        <div class="col">Status</div>
        <div class="col">Action</div>
    </div>
    @foreach ($tasks as $task)
        <div class="row border text-center"><br>
            <div class="col">{{ $task->title }}</div>
            <div class="col">{{ $task->description }}</div>
            <div class="col">
                <input type="checkbox" name="is_completed" value="1" {{ $task->is_completed ? 'checked' : '' }}>
            </div>
            <div class="col d-flex gap-5 align-items-center justify-content-center">
                <form action="{{ route('task.edit', ['task' => $task]) }}" method="POST">
                    @csrf
                    @method('get')
                    <div>
                        <input type="submit" value="EDIT">
                    </div>
                </form>

                <form action="{{ route('task.destroy', ['task' => $task]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <div>
                        <input type="submit" value="DELETE">
                    </div>
                </form>
            </div>
        </div>
    @endforeach
</body>
</html>