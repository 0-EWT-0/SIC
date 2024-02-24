<h1>Lista de Reprobados</h1>
<table>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->id_student }}</td>
            <td>{{ $student->name_student }}</td>
            <td>{{ $student->lastname_student }}</td>
        </tr>
</table>
@endforeach
