<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/edit.scss', 'resources/sass/nav.scss'])
    <title>Edit</title>
</head>
<body>
    <x-Nav/>
    <section>
        <form action="edit" method="POST">
            @csrf
            @method('PATCH')
            <table>
                <tr>
                    <th class="id">#</th>
                    <th class="todo">Thing To-Do (original)</th>
                    <th>Priority (original)</th>
                    <th>Deadline (original)</th>
                </tr>
                <tr>
                    <td class="id">{{ $todo->id }}</td>
                    <td class="todo">{{ $todo->todo }}</td>
                    <td class="priorityOrig">{{ $todo->priority }}</td>
                    <td>{{ $todo->deadline }}</td>
                </tr>
                <tr><td colspan="4" class="rowEmpty"></td></tr>
                <tr>
                    <th class="id">id</th>
                    <th class="todo">Thing To-Do (updated)</th>
                    <th>Priority (updated)</th>
                    <th>Deadline (updated)</th>
                </tr>
                <tr>
                    <td class="id" >
                        <input class="idInput" type="number" name="id" id="id" value={{ $todo->id }} readonly>
                    </td>
                    <td class="todo">
                        <input class="todoInput" type="text" name="todo" id="todo">
                    </td>
                    <td>
                        <select name="priority" id="priority">
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </td>
                    <td>
                        <input type="date" name="deadline" id="deadline">
                    </td>                    
                </tr>
            </table>
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