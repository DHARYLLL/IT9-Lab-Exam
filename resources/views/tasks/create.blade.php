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

    <h1>Create Task</h1>
    <form action="{{ route('task.store') }}" method="POST">
        @csrf

        <input type="text" id="title" name="title" placeholder="Title"><br><br>
        <input type="text" id="description" name="description" placeholder="Description"><br><br>

        <input type="submit" value="Create Task">
    </form>
</body>
</html>