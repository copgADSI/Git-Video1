<!DOCTYPE html>
<html lang="en">
<head>
 <title>Registrar Usuario</title>
 <meta charset = "utf-8">
</head>
<body>
 <header>
 <h1>Registrate en nuestro fabuloso website</h1>
 </header>
 <form action="registro.php" method="post">
 <hr />
 <h3>Crea una cuenta</h3>
 <!--Nombre Usuario-->
 <label for="nombre">Nombre de Usuario:</label><br>
 <input type="text" name="username">
 <br/><br/>
 <!--Password-->
 <label for="pass">Password:</label><br>
 <input type="password" name="password" >
 <br/><br/>
 <input type="submit" name="submit" value="Registrarme">
 <input type="reset" name="clear" value="Borrar">
 </form>
<footer>
 ©2016 <a href="http://www.VelozityWeb.com">www.VelozityWeb.com</a>
</footer>
 </body>
</html>
