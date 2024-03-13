<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Registrarse</title>
</head>
<body>
    <div class="wrapper">
        

        <form action="guardar.php" method="POST">
            <h1>Registrarse</h1>
                    <div class="input-box">
                        <input type="text" name='nombre' placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                    </div>

                    <div class="input-box">
                        <input type="#" name='telefono' placeholder="Telefono" required>
                    <i class='bx bxs-user'></i>
                    </div>

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

                    <button  type="submit" href="usuario" name="enviar" class="btn"> Registrarse</button>


        </form>
    </div>
</body>
</html>