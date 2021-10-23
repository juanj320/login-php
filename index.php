<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    
  </head>
  <body>
    <div class="container">
        <div class="header">
            <img src="img/icono.jpg">
            <h2>Iniciar sesion</h2>
        </div>
        <form id="form" class="form" method="post" name="validar" action="db/verify.php" >
            
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" placeholder="example@email.com" id="email" name="email" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password">Contraseña</label>
                <input type="password" placeholder="Contraseña" id="password" name="password"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            
            <button type="submit">Iniciar Sesion</button>
        </form>
    </div>
    <script src="javascript/main.js"></script>
  </body>
</html>