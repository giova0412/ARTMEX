document.addEventListener('DOMContentLoaded', function() {
    const switchLink = document.getElementById('switchLink');
    const switchText = document.getElementById('switchText');
    const loginForm = document.getElementById('loginFormSubmit');
    const registerForm = document.getElementById('registerForm');
    const formTitle = document.getElementById('formTitle');
    const logoutButton = document.getElementById('logoutButton'); // Botón de cierre de sesión

    // Arreglo para almacenar los usuarios (esto sería reemplazado por una base de datos en un entorno real)
    const users = [
        { username: 'usuario1', password: 'contraseña1' },
        { username: 'usuario2', password: 'contraseña2' },
        { username: 'usuario3', password: 'contraseña3' }
    ];

    // Cambiar entre formularios de inicio de sesión y registro
    switchLink.addEventListener('click', function(event) {
        event.preventDefault();
        if (loginForm.style.display === 'none') {
            loginForm.style.display = 'block';
            registerForm.style.display = 'none';
            formTitle.textContent = 'Iniciar Sesión';
            switchText.innerHTML = '¿No tienes cuenta? <a href="#" id="switchLink">Regístrate</a>';
        } else {
            loginForm.style.display = 'none';
            registerForm.style.display = 'block';
            formTitle.textContent = 'Registro';
            switchText.innerHTML = '¿Ya tienes cuenta? <a href="#" id="switchLink">Inicia Sesión</a>';
        }
    });

    // Manejo del formulario de inicio de sesión
    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const username = document.getElementById('loginUsername').value;
        const password = document.getElementById('loginPassword').value;

        // Comprobación de usuario y contraseña
        const user = users.find(user => user.username === username && user.password === password);

        if (user) {
            sessionStorage.setItem('isLoggedIn', 'true');
            localStorage.setItem('currentUser', username); // Guardar usuario en localStorage
            window.location.href = 'inicio.html'; // Redirigir a la página de inicio
        } else {
            alert('Usuario o contraseña incorrectos');
        }
    });

    // Manejo del formulario de registro
    registerForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const newUser = {
            username: document.getElementById('registerUsername').value,
            password: document.getElementById('registerPassword').value
        };

        users.push(newUser);
        alert('Registro completado. Ahora puedes iniciar sesión.');
        
        loginForm.style.display = 'block';
        registerForm.style.display = 'none';
        formTitle.textContent = 'Iniciar Sesión';
        switchText.innerHTML = '¿No tienes cuenta? <a href="#" id="switchLink">Regístrate</a>';
    });

    // Manejo del cierre de sesión
    if (logoutButton) {
        logoutButton.addEventListener('click', function(event) {
            event.preventDefault();
            sessionStorage.removeItem('isLoggedIn');
            localStorage.removeItem('currentUser'); // Eliminar usuario de localStorage
            window.location.href = 'login.html'; // Redirigir a la página de inicio de sesión
        });
    }
});