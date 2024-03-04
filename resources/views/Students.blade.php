<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Lista de Reprobados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>

    <h1>Lista de Reprobados</h1>
    @if (session()->has('notificacion'))
        <div style="color: green">
            {{ session('notificacion') }}
        </div>
    @endif
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id_student }}</td>
                <td>{{ $student->name_student }}</td>
                <td>{{ $student->last_name }}</td>
            </tr>
            <td>
                <a href="{{ route('estudiantes.show', $student->id) }}">Detalles</a>
                <a href="{{ route('estudiantes.edit', $student->id) }}">Editar</a>
            </td>
        @endforeach
    </table>
    {{ $students->links() }}
</body>

</html>
