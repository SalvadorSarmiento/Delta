document.addEventListener("DOMContentLoaded", function () {
    const textElement = document.getElementById("typing-text");
    const text = "Delta es lo que se define como accidente geográfico por su formación, pero si se toma de otra manera, puede llegar a ser incluso el origen y sustento de muchas formas de vida"; 
    const suspense = "...... o ideas"; // Suspenso final woosh
    let index = 0;

    function type() {
        if (index < text.length) {
            textElement.innerHTML += text[index];
            index++;
            setTimeout(type, 60); // Velocidad
        } else if (index < text.length + suspense.length) {

            textElement.innerHTML += suspense[index - text.length];
            index++;
            setTimeout(type, 150); // Velocidad
        }
    }

    type(); // Iniciar 
});
