<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/show.scss', 'resources/sass/nav.scss'])
    <title>To-Do List</title>
</head>
<body>
    <x-Nav/>
    <section class="table">
        <table>
            <tr>
                <th class="id">#</th>
                <th class="todo">Thing To-Do</th>
                <th class="priority">Priority</th>
                <th class="deadline">Deadline</th>
            </tr>
            @foreach ($todos as $todo)
                <tr>
                    <td class="id">{{ $todo->id }}</td>
                    <td class="todo">{{ $todo->todo }}</td>
                    <td class="priority">{{ $todo->priority }}</td>
                    <td class="deadline">{{ $todo->deadline }}</td>
                    <td class="edit"><a href="edit?id={{ $todo->id }}">Edit</a></td>
                    <td class="delete">
                        <form action="show" method="POST">
                            @csrf
                            @method('DELETE')
                            <button value={{ $todo->id }} name="id" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
</body>
</html>