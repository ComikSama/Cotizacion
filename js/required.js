// Código creado por Christian Tapia (ComikSama)
// Correo electrónico: comiksamadesing@gmail.com
// Fecha de creación: Octubre 2023

document.querySelector('#contactForm').addEventListener('submit', function (e) {
    var formulario = this;
    var requiredFields = formulario.querySelectorAll('[required]');
    var hasError = false;

    requiredFields.forEach(function (field) {
        if (!field.value) {
            hasError = true;
            field.classList.add('is-invalid');
        } else {
            field.classList.remove('is-invalid');
        }
    });

    if (hasError) {
        e.preventDefault();

        // Muestra el mensaje de error y desplázate al principio de la página completa
        var errorMessage = document.querySelector('#error-message');
        errorMessage.style.display = 'block';

        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Puedes ajustar la velocidad de desplazamiento aquí
        });
    }
});
