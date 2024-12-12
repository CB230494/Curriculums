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

/* Contenedor principal de la página de currículums */
.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #2d3748; /* Fondo oscuro para el contenedor */
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

/* Estilo para la lista de currículums */
ul {
    list-style: none;
    padding: 0;
}

li {
    background-color: #2d3748; /* Fondo oscuro para cada ítem */
    padding: 15px;
    margin: 10px 0;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Estilo para el texto de cada currículum */
li p {
    margin: 0;
    font-size: 1rem;
    color: #fff;
}

/* Estilo del botón (para editar, eliminar y descargar) */
button[type="submit"], .btn {
    padding: 10px 20px;
    background-color: #38bdf8; /* Azul claro para el botón */
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
    margin: 5px; /* Asegura que los botones estén espaciados uniformemente */
}

button[type="submit"]:hover, .btn:hover {
    background-color: #0ea5e9; /* Azul más oscuro al pasar el cursor */
}

/* Estilo para el botón de Eliminar */
.btn-danger {
    background-color: #f87171; /* Rojo para el botón de eliminar */
    transition: background-color 0.3s ease;
}

.btn-danger:hover {
    background-color: #ef4444; /* Rojo más oscuro al pasar el cursor */
}

/* Estilo para el texto cuando no hay currículums */
p {
    color: #d1d5db; /* Gris claro para el texto */
    text-align: center;
}

/* Estilo para el enlace de "Crear Nuevo Currículum" */
a.btn {
    display: inline-block;
    padding: 12px 20px;
    background-color: #38bdf8; /* Azul claro para el botón */
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    transition: background-color 0.3s ease;
}

a.btn:hover {
    background-color: #0ea5e9; /* Azul más oscuro al pasar el cursor */
}



    </style>
<div class="container">
    <h1>Mis Currículums</h1>
    <a href="{{ route('cvs.create') }}" class="btn">Crear Nuevo Currículum</a>
    <ul class="mt-4">
        @forelse($cvs as $cv)
            <li>{{ $cv->title }}</li>
            
            <a href="{{ route('cvs.edit', $cv->id) }}" class="btn">Editar</a>
            <form action="{{ route('cvs.show', $cv->id) }}" method="GET" style="display:inline;">
                @csrf
                <button type="submit" class="btn">Mostrar Currículum</button>
            </form>
            <form action="{{ route('cvs.destroy', $cv->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn">Eliminar</button>
            </form>
            <a href="{{ route('cvs.download', $cv->id) }}" class="btn">Descargar PDF</a> <!-- Enlace de descarga -->
        @empty
            <p>No tienes currículums creados.</p>
        @endforelse
    </ul>
</div>
@endsection



