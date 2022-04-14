<div class="container">
    <div class="login col-md-8 offset-md-2 mt-5">
        <div class="row">
            <div class="col-md-6 d-sm-none d-md-block d-none d-sm-block">
                <img src="<?php echo $imgs; ?>imgLogin.svg" alt="">
            </div>
            <div class="col-md-6 mt-4 mb-5 col-sm-12">
                <h3 class="white-text m-2">Iniciar sesión</h3>
                <form action="" method="POST">
                    <div class="m-2">
                        <div class="form-floating mb-3 mt-4">
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Correo</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary mt-3 m-2">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Entrar
                    </button>
                    <p class="mt-1 white-text m-2">
                        ¿No tiene cuenta? <a href="<?php echo $url; ?>register.php">Registrarse</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
if ($_POST) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    if (logUser($email, $password, $conn)) {
        if (isset($_SESSION['ss-name'])) {
            $_SESSION['message'] = 'Se inició sesión correctamente';
            echo "<script>
            setTimeout(function() {
                window.location.replace('dashboard.php');
            }, 3000);
        </script>";
        }
    } else {
        $_SESSION['error'] = 'Correo o contraseña incorrecta';
    }
}

?>