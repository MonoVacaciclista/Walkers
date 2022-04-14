<div class="container">
    <div class="login col-md-8 offset-md-2 mt-5">
        <div class="row">
            <div class="col-md-6 d-sm-none d-md-block d-none d-sm-block">
                <img src="<?php echo $imgs; ?>imgRegister.svg" alt="">
            </div>
            <div class="col-md-6 mt-4 mb-5 col-sm-12">
                <h3 class="white-text m-2">Registro</h3>
                <form action="" method="POST">
                    <div class="m-2">
                        <div class="form-floating mb-3 mt-4">
                            <input type="text" class="form-control" name="name" id="floatingInput" placeholder="John Doe" required>
                            <label for="floatingInput">Nombre</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Correo</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" requiered>
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" name="tyc" id="flexCheckDefault" required>
                            <label class="form-check-label white-text" for="flexCheckDefault">
                                Estoy de acuerdo con los <a href="">términos y condiciones</a>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary mt-2 m-2">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Registrarse
                    </button>
                </form>
                <p class="mt-1 white-text m-2">
                    ¿Ya tiene cuenta? <a href="<?php echo $url; ?>login.php">Iniciar sesión</a>
                </p>

            </div>
        </div>
    </div>
</div>



<?php 
    if($_POST){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        if(regUser($name, $email, $password, $conn)){
            $_SESSION['message'] = 'The user: ' . $name . ' was registered successful!';
        } else{
            $_SESSION['error'] = 'Email or Username already exist!';
        }
        
    }

?>