<?php
  class controllerAutenticarUsuario
    {

      public function validarContraseña($login,$password)





/*      public function validarUsuario($login,$password)
      {
        include_once("../model/usuario.php");
        $objUsuario = new usuario;
        $respuesta = $objUsuario -> verificarUsuario($login,$password);
        ///if($objUsuario -> verificarUsuario($login,$password) == 1)
        if($respuesta == 1)
        {
          session_start();
          include_once("../model/usuarioPrivilegio.php");
          $objprivilegio = new usuarioPrivilegio;
          $listaPrivilegios = $objprivilegio -> obtenerPrivilegios($login);
          $_SESSION['login']= $login;
          include_once("formMenuPrincipal.php");
          $objMenu = new formMenuPrincipal($login);
          $objMenu -> formMenuPrincipalShow($listaPrivilegios);
        }
        else
        {
          include_once("../shared/formMensajeSistema.php");
          $nuevoMensaje = new formMensajeSistema;
          $nuevoMensaje -> formMensajeSistemaShow("El usuario no existe o esta inhabilitado","<a href='../index.php'>ir al inicio</a>");
        }
      }*/
    }


?>