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

    <div class="container-fluid vh-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col col-sm-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="text-center">Edit Task</h1>


                        <form action="{{ route('task.update', ['task' => $task]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row mb-2">
                                <div class="col">
                                    <input type="text" id="title" name="title" placeholder="Title" value="{{ $task->title }}" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col">
                                    <input type="text" id="description" name="description" value="{{ $task->description }}" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col">
                                    <input type="checkbox" class="form-checkbox" name="is_completed" value="1" {{ $task->is_completed ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_completed">Completed</label>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-dark w-100" value="Update Task">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>