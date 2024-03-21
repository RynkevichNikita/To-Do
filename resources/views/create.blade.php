<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/create.scss', 'resources/sass/nav.scss'])
    <title>Create</title>
</head>
<body>
    <x-Nav/>
    <section class="create">
        <h2>Create a new thing To-Do</h2>
        <form action="create" method="POST">
            @csrf
            <label for="todo">Description</label>
            <input type="text" name="todo" id="todo">
            <label for="priority">Choose a priority</label>
            <select name="priority" id="priority">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <label for="deadline">Choose deadline (optional)</label>
            <input type="date" name="deadline" id="deadline">
            <button type="submit">Submit</button>
        </form>
    </section>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>