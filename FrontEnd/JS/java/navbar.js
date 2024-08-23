document.addEventListener('DOMContentLoaded', function() {
    const loginLink = document.getElementById('loginLink');
    const forumLink = document.getElementById('forumLink');

    // Verifica si el usuario ha iniciado sesión
    let isLoggedIn = sessionStorage.getItem('isLoggedIn') === 'true';

    // Cambia el texto del enlace de inicio/cierre de sesión y la visibilidad del enlace del foro
    if (isLoggedIn) {
        loginLink.textContent = 'Cerrar Sesión';
        loginLink.href = '#'; // Evita que redirija a otra página
        forumLink.style.display = 'block';
    } else {
        loginLink.textContent = 'Iniciar Sesión';
        loginLink.href = 'login.html';
        forumLink.style.display = 'none';
    }

    // Evento de click para iniciar o cerrar sesión
    loginLink.addEventListener('click', function(event) {
        event.preventDefault();
        if (isLoggedIn) {
            // Lógica de cierre de sesión
            sessionStorage.setItem('isLoggedIn', 'false');
            window.location.href = 'inicio.html'; // Redirige a la página de inicio después de cerrar sesión
        } else {
            // Redirige a la página de inicio de sesión
            window.location.href = 'login.html';
        }
    });

    // Manejo del formulario de inicio de sesión en la página login.html
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (username === 'usuario' && password === 'contraseña') {
                sessionStorage.setItem('isLoggedIn', 'true');
                window.location.href = 'inicio.html'; // Redirige a la página de inicio después de iniciar sesión
            } else {
                alert('Usuario o contraseña incorrectos');
            }
        });
    }
});
