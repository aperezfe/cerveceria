

<?php

   $user = $_GET['user'];

   $password = $_GET['password'];


   if (($user == "usuario") AND ($password == "12345")){

      echo "Bienvenido ".$user;

   }

   Else{

      echo "�Usuario o contrase�a incorrectos!";

      echo '<a href="'.$_SERVER['HTTP_REFERER'].'"><br>Volver</a>';

   }

?>


