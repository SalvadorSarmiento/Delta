<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenidos a Delta</title>
        <link rel="stylesheet" href="{{ asset('css/Bienvenidos.css') }}">
    </head>
<body>
    <div class="container">
    <h1>¡Bienvenidos a Delta!</h1>
        <p>Delta es lo que se define como accidente geografico por su formación, 
            pero si se toma de otra manera, puede llegar a ser incluso el 
            origen y sustento de muchas formas de vida o ideas.</p>
        <a href="{{ url('/informacion') }}" class="btn">Presiona si quieres saber sobre Delta</a>
    </div>
    <div class="fondo">
        @for ($x = 0; $x < 15; $x++) 
            @for ($y = 0; $y < 20; $y++) 
                <div class="rectangulo {{ ['blanco', 'rosado', 'beige'][rand(0, 2)] }}" 
                     style="left: {{ $x * 6.66 }}vw; top: {{ $y * -150 }}px; animation-delay: -{{ rand(0, 5) }}s;">
                </div>
            @endfor
        @endfor
    </div>
    
    <div class="firma">Hecho por:Eduardo Salvador Araujo Sarmiento</div>
</body>
</html>