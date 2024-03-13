<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <title>LOGIN</title>
</head>
    <body>
        
    <div class="wrapper">
        

        <form action="usuario.php" method="post">
                <h1>Login</h1>
               <div class="input-box">
                        <input type="text" name='correo' placeholder="Ingrese Correo" required>
                    <i class='bx bxs-user'></i>
                    </div>

                    <div class="input-box">
                        <input type="password" name='clave' placeholder="Password" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>

                <button  type="submit" href="usuario.php" class="btn">Login</button>

                <div class="register-link">
                    <p>Don't have an account? <a href="registrar.php">Registrarse</a></p>
                </div>
        </form>

    </div>

    </body>
    


<script src="js/script.js"></script>
    </body>
</html>