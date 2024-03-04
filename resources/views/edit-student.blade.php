
<form action="{{ route('estudiantes.update', $student->id) }}" method="POST">
    @csrf
    @method('put')
    <input type="text" name="name_student" class="campo" value="{{ $student->name_student }}">
    @error('name_students')

        <div class="error">{{ $message }}</div>
    @enderror
    <button type="submit">Editar</button>
</form>
