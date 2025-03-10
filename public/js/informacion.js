document.addEventListener("DOMContentLoaded", function () {
    const textElement = document.getElementById("typing-text");
    const button = document.getElementById("reveal-button");
    const text = "Delta es lo que se define como accidente geográfico por su formación, pero si se toma de otra manera, puede llegar a ser incluso el origen y sustento de muchas formas de vida";
    const suspense = "...... o ideas";
    let index = 0;

    function type() {
        if (index < text.length) {
            textElement.innerHTML += text[index];
            index++;
            setTimeout(type, 60);
        } else if (index < text.length + suspense.length) {
            textElement.innerHTML += suspense[index - text.length];
            index++;
            setTimeout(type, 150);
        } else {
            // Hacer visible el botón de forma gradual
            setTimeout(() => {
                button.style.opacity = "1";
            }, 1000);
        }
    }

    type();

    // 🌟 Brillo aleatorio en rectángulos 🌟
    const rectangulos = document.querySelectorAll(".rectangulo");

    function activarBrillo() {
        // Quitamos brillo anterior
        rectangulos.forEach(rect => rect.classList.remove("brillante"));

        // Seleccionamos aleatoriamente hasta 6 rectángulos
        let seleccionados = [];
        while (seleccionados.length < 6) {
            let randomIndex = Math.floor(Math.random() * rectangulos.length);
            if (!seleccionados.includes(randomIndex)) {
                seleccionados.push(randomIndex);
            }
        }

        // Aplicamos brillo
        seleccionados.forEach(index => {
            rectangulos[index].classList.add("brillante");
            setTimeout(() => {
                rectangulos[index].classList.remove("brillante");
            }, 4000);
        });
    }

    // Ejecutamos cada 30s
    setInterval(activarBrillo, 30000);
    activarBrillo();
});
