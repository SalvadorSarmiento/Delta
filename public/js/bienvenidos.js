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
            // Hacer que el botón se haga visible poco a poco
            setTimeout(() => {
                button.style.opacity = "1"; // Aumenta la opacidad gradualmente
            }, 1000); // Esperamos un poco antes de iniciar el fade-in
        }
    }

    type();
});


