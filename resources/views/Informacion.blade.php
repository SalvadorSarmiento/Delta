<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
    <link rel="stylesheet" href="{{ asset('css/Informacion.css') }}">
</head>
<body>
    <div class="container">
        <!-- Panel Izquierdo (Información Personal) -->
        <div class="panel left-panel">
            <h2>Información Personal</h2>
            <p>Nombre: [Tu Nombre]</p>
            <p>Correo: [Tu Correo]</p>
            <p>Ubicación: [Tu Ciudad]</p>
            <p>Perfil Profesional: [Breve descripción]</p>
        </div>

        <!-- Panel Central (Tecnologías y Resumen) -->
        <div class="panel center-panel">
            <h2>Mis Tecnologías</h2>
            <div class="tech-container">
                <div class="tech-item">
                    <a href="{{ route('js_page') }}" class="tech-btn">JavaScript</a>
                    <p class="tech-desc">Uso JavaScript para desarrollo web dinámico y aplicaciones interactivas.</p>
                </div>
                <div class="tech-item">
                    <a href="{{ route('python_page') }}" class="tech-btn">Python</a>
                    <p class="tech-desc">Utilizo Python para automatización, análisis de datos e inteligencia artificial.</p>
                </div>
                <div class="tech-item">
                    <a href="{{ route('sql_page') }}" class="tech-btn">SQL</a>
                    <p class="tech-desc">Trabajo con bases de datos SQL para almacenamiento y manipulación de datos.</p>
                </div>
                <div class="tech-item">
                    <a href="{{ route('java_page') }}" class="tech-btn">Java</a>
                    <p class="tech-desc">Uso Java para desarrollo backend y sistemas escalables.</p>
                </div>
                <div class="tech-item">
                    <a href="{{ route('tp_page') }}" class="tech-btn">TP</a>
                    <p class="tech-desc">Exploro diversas tecnologías de programación para mejorar mis habilidades.</p>
                </div>
            </div>
        </div>

        <!-- Panel Derecho (Contenido Adicional) -->
        <div class="panel right-panel">
            <h2>Contenido Adicional</h2>
            <p>[Aquí pondrás información adicional en el futuro]</p>
        </div>
    </div>
</body>
</html>
