<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="{{ route('course_teacher.store') }}" method="POST">
    @csrf
<p>Hola</p>
<p>Cual es tu nombre?</p>
<label for="">nombre</label>
<input type="text">
    <label for="course_id">Curso:</label>
    <input type="number" name="course_id" required>

    <label for="teacher_id">Profesor:</label>
    <input type="number" name="teacher_id" required>

    <button type="submit">Guardar relación</button>
</form>

</body>
</html>