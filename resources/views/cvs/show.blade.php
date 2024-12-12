<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cv->title }}</title>
    <style>
        /* Estilo general de la página */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9; /* Fondo claro */
            color: #333;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        /* Contenedor principal del currículum */
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff; /* Fondo blanco para el currículum */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Título del currículum */
        h1 {
            text-align: center;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        /* Títulos de las secciones */
        p strong {
            font-size: 1.2rem;
            color: #2d3748; /* Gris oscuro */
        }

        /* Estilo para los párrafos */
        p {
            font-size: 1.1rem;
            margin: 10px 0;
            padding: 10px;
            background-color: #f9f9f9; /* Fondo gris claro */
            border-radius: 5px;
        }

        /* Estilo para el botón de volver */
        .btn {
            display: inline-block;
            padding: 12px 20px;
            background-color: #38bdf8; /* Azul claro para el botón */
            color: white;
            border: none;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        /* Estilo del botón al pasar el cursor */
        .btn:hover {
            background-color: #0ea5e9; /* Azul más oscuro al pasar el cursor */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $cv->title }}</h1>

        <p><strong>Información Personal:</strong> {{ $cv->personal_info }}</p>
        <p><strong>Experiencia Laboral:</strong> {{ $cv->work_experience }}</p>
        <p><strong>Educación:</strong> {{ $cv->education }}</p>
        <p><strong>Habilidades:</strong> {{ $cv->skills }}</p>
        <p><strong>Idiomas:</strong> {{ $cv->languages }}</p>
        <p><strong>Certificaciones:</strong> {{ $cv->certifications }}</p>

        <a href="{{ route('cvs.index') }}" class="btn">Volver a Mis Currículums</a>
    </div>
</body>
</html>
