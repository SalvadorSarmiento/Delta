<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
    <link rel="stylesheet" href="css/informacion.css"> <!-- Enlace al archivo CSS -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Librería de iconos -->
</head>
<body>
    <div class="container">
        <!-- Panel Izquierdo (Información Personal) -->
        <div class="panel left-panel">
            <img src="/imagenes/ss_png.png" alt="Foto de perfil" class="perfil-img">
            <h2>Información Personal</h2>
            <p class="nombre"><i class="fas fa-user"></i> <strong>Eduardo Salvador Araujo Sarmiento</strong></p>
            <p class="email"><i class="fas fa-envelope"></i> eduardoaraujo6660@gmail.com</p>
            <p class="ubicacion"><i class="fas fa-map-marker-alt"></i> Bellavista, Callao.</p>
        </div>

        <!-- Panel Central (Tecnologías y Resumen) -->
        <div class="panel center-panel">
            <h2>Mis Tecnologías</h2>
            <div class="tech-container">
                <div class="tech-item" data-tech="JavaScript">
                    <a href="#" class="tech-btn">
                        <i class="fab fa-js-square"></i> <span>JavaScript</span>
                    </a>
                    <p class="tech-desc">Uso JavaScript para desarrollo web dinámico y aplicaciones interactivas.</p>
                </div>
                
                <div class="tech-item" data-tech="Python">
                    <a href="#" class="tech-btn">
                        <i class="fab fa-python"></i> <span>Python</span>
                    </a>
                    <p class="tech-desc">Utilizo Python para automatización, análisis de datos e inteligencia artificial.</p>
                </div>
                
                <div class="tech-item" data-tech="SQL">
                    <a href="#" class="tech-btn">
                        <i class="fas fa-database"></i> <span>SQL</span>
                    </a>
                    <p class="tech-desc">Trabajo con bases de datos SQL para almacenamiento y manipulación de datos.</p>
                </div>
                
                <div class="tech-item" data-tech="Java">
                    <a href="#" class="tech-btn">
                        <i class="fab fa-java"></i> <span>Java</span>
                    </a>
                    <p class="tech-desc">Uso Java para desarrollo backend y sistemas escalables.</p>
                </div>
                
                <div class="tech-item" data-tech="PHP">
                    <a href="#" class="tech-btn">
                        <i class="fab fa-php"></i> <span>PHP</span>
                    </a>
                    <p class="tech-desc">Desarrollo aplicaciones web con PHP y frameworks como Laravel.</p>
                </div>
            </div>            
        </div>
    </div>
</body>
</html>
