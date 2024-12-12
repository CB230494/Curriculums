<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cv->title }}</title>

    <style>
        /* General styles for the entire PDF */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            font-size: 28px;
            margin-top: 30px;
        }

        h2 {
            color: #34495e;
            font-size: 20px;
            margin-top: 20px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 5px;
        }

        p {
            font-size: 14px;
            line-height: 1.6;
            color: #555;
            margin: 10px 0;
        }

        .section {
            margin-bottom: 20px;
        }

        .section-title {
            font-weight: bold;
            margin-top: 20px;
        }

        .content {
            padding-left: 20px;
        }

        /* Styling for the entire PDF layout */
        .container {
            padding: 20px;
            background-color: white;
            margin: 0 10%;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .header .title {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .header .contact-info {
            font-size: 14px;
            color: #777;
        }

        .content-section {
            margin-bottom: 25px;
        }

        .content-section p {
            margin-left: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #bbb;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="title">
                <h1>{{ $cv->title }}</h1>
            </div>
            <div class="contact-info">
                <p><strong>Correo electrónico:</strong> {{ $cv->personal_info }}</p>
                <p><strong>Teléfono:</strong> (123) 456-7890</p>
            </div>
        </div>

        <div class="content-section">
            <h2>Objetivo Profesional</h2>
            <p>{{ $cv->personal_info }}</p>
        </div>

        <div class="content-section">
            <h2>Experiencia Laboral</h2>
            <p>{{ $cv->work_experience }}</p>
        </div>

        <div class="content-section">
            <h2>Educación</h2>
            <p>{{ $cv->education }}</p>
        </div>

        <div class="content-section">
            <h2>Habilidades</h2>
            <p>{{ $cv->skills }}</p>
        </div>

        <div class="content-section">
            <h2>Idiomas</h2>
            <p>{{ $cv->languages }}</p>
        </div>

        <div class="content-section">
            <h2>Certificaciones</h2>
            <p>{{ $cv->certifications }}</p>
        </div>

        <div class="footer">
            <p>Currículum generado por el sistema De Carlos Castro</p>
        </div>
    </div>
</body>

</html>
