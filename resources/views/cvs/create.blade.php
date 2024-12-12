@extends('layouts.app')

@section('content')
<style>
/* Estilo general de la página */
body {
    font-family: 'Arial', sans-serif;
    background-color: #1e293b; /* Fondo oscuro */
    color: #fff;
    margin: 0;
    padding: 0;
}

/* Contenedor principal del formulario */
.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #2d3748; /* Fondo oscuro para el formulario */
    border-radius: 10px; /* Bordes redondeados */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Sombra suave */
}

/* Título de la página */
h1 {
    text-align: center;
    font-size: 2rem;
    color: #fff;
    margin-bottom: 20px;
}

/* Estilo para las etiquetas de los campos */
label {
    font-size: 1rem;
    color: #d1d5db; /* Gris claro */
}

/* Estilo para los campos de entrada (input y textarea) */
input[type="text"], textarea {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border-radius: 8px;
    border: 1px solid #4b5563; /* Borde gris claro */
    background-color: #2d3748; /* Fondo oscuro */
    color: #fff;
    font-size: 1rem;
}

input[type="text"]:focus, textarea:focus {
    outline: none;
    border-color: #38bdf8; /* Azul claro al hacer foco */
    box-shadow: 0 0 5px rgba(56, 189, 248, 0.5); /* Resplandor azul */
}

/* Estilo del botón */
button[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #38bdf8; /* Azul claro para el botón */
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0ea5e9; /* Azul más oscuro al pasar el cursor */
}

/* Espaciado entre los campos */
.form-group {
    margin-bottom: 20px;
}
</style>

<div class="container">
    <h1>Crear Nuevo Currículum</h1>

    <form action="{{ route('cvs.store') }}" method="POST">
        @csrf

        <!-- Título -->
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <!-- Información Personal -->
        <div class="form-group">
            <label for="personal_info">Información Personal</label>
            <textarea name="personal_info" id="personal_info" class="form-control" required></textarea>
        </div>

        <!-- Experiencia Laboral -->
        <div class="form-group">
            <label for="work_experience">Experiencia Laboral</label>
            <textarea name="work_experience" id="work_experience" class="form-control" required></textarea>
        </div>

        <!-- Educación -->
        <div class="form-group">
            <label for="education">Educación</label>
            <textarea name="education" id="education" class="form-control" required></textarea>
        </div>

        <!-- Habilidades -->
        <div class="form-group">
            <label for="skills">Habilidades</label>
            <textarea name="skills" id="skills" class="form-control" required></textarea>
        </div>

        <!-- Idiomas -->
        <div class="form-group">
            <label for="languages">Idiomas</label>
            <textarea name="languages" id="languages" class="form-control" required></textarea>
        </div>

        <!-- Certificaciones -->
        <div class="form-group">
            <label for="certifications">Certificaciones</label>
            <textarea name="certifications" id="certifications" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
