(function () {
    window.addEventListener('load', function () {
        var preloader = document.querySelector('.page-loading');
        // Remove the 'active' class to start the fade-out effect
        preloader.classList.remove('active');

        // Remove the preloader after the transition duration
        setTimeout(function () {
            preloader.remove();
        }, 2000); // Match this timeout with the fade-out duration
    });
})();

(function () {
    'use strict'
    // Enable Bootstrap validation
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
})();

