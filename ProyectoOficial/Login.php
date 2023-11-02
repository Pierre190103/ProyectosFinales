<?php
$RUTA = "localhost";
$USUARIO = "root";
$CLAVE = "";
$DB = "proyecto_html";
$TABLA = "usuarios";

$conn = new mysqli($RUTA, $USUARIO, $CLAVE, $DB);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Validación de inicio de sesión
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE nombre_usuario='$username' AND contraseña='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: PaginaPrincipal.php");
        exit;
    } else {
        $login_message = "Inicio de sesión fallido";
    }
}

// Registro de usuario
if (isset($_POST["register"])) {
    $newUsername = $_POST["newUsername"];
    $newPassword = $_POST["newPassword"];

    $sql = "INSERT INTO usuarios (nombre_usuario, contraseña) VALUES ('$newUsername', '$newPassword')";

    if ($conn->query($sql) === TRUE) {
        $register_message = "Registro exitoso";
    } else {
        $register_message = "Error en el registro: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inicio de Sesión y Registro</title>
        <style>
            body {
                background-color: #3498db;
                font-family: Arial, sans-serif;
            }

            .form-container {
                background-color: #fff;
                max-width: 400px;
                margin: 20px auto;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                transition: all 0.3s; /* Agregar transición de animación */
            }

            .hidden {
                display: none;
                transform: translateY(20px); /* Inicialmente oculto y desplazado hacia abajo */
                opacity: 0;
            }

            h2 {
                color: #3498db;
            }

            label {
                display: block;
                color: #333;
                margin-bottom: 5px;
            }

            input[type="text"],
            input[type="password"] {
                width: 380px;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }

            button {
                background-color: #3498db;
                color: #fff;
                border: none;
                padding: 10px 15px;
                border-radius: 3px;
                cursor: pointer;
            }

            button:hover {
                background-color: #2980b9;
            }
        </style>
    </head>
    <body>
        <div class="form-container" id="login-form">
            <h2>Iniciar Sesión</h2>
            <?php if (isset($login_message)) {
                echo "<p>$login_message</p>";
            } ?>
            <form method="post">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" name="login">Iniciar Sesión</button>
            </form>
            <p>¿No tienes una cuenta? <a href="#" onclick="showRegisterForm()">Registrarse</a></p>
        </div>

        <div class="form-container hidden" id="register-form">
            <h2>Registro</h2>
<?php if (isset($register_message)) {
    echo "<p>$register_message</p>";
} ?>
            <form method="post">
                <label for="newUsername">Nuevo Usuario</label>
                <input type="text" id="newUsername" name="newUsername" required>
                <label for="newPassword">Nueva Contraseña</label>
                <input type="password" id="newPassword" name="newPassword" required>
                <!-- Aquí puedes agregar campos adicionales para el registro -->
                <label for="email">Correo Electrónico</label>
                <input type="text" id="email" name="email" required>
                <!-- Otros campos aquí -->
                <button type="submit" name="register">Registrarse</button>
            </form>
            <p>¿Ya tienes una cuenta? <a href="#" onclick="showLoginForm()">Iniciar Sesión</a></p>
        </div>

        <script>
            function showRegisterForm() {
                const loginForm = document.getElementById("login-form");
                const registerForm = document.getElementById("register-form");

                loginForm.classList.add("hidden");
                loginForm.style.transform = "translateY(20px)";
                loginForm.style.opacity = 0;

                registerForm.classList.remove("hidden");
                setTimeout(() => {
                    registerForm.style.transform = "translateY(0)";
                    registerForm.style.opacity = 1;
                }, 10);
            }

            function showLoginForm() {
                const loginForm = document.getElementById("login-form");
                const registerForm = document.getElementById("register-form");

                registerForm.classList.add("hidden");
                registerForm.style.transform = "translateY(20px)";
                registerForm.style.opacity = 0;

                loginForm.classList.remove("hidden");
                setTimeout(() => {
                    loginForm.style.transform = "translateY(0)";
                    loginForm.style.opacity = 1;
                }, 10);
            }
        </script>
    </body>
</html>
