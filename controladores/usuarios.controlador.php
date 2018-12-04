<?php

class ControladorUsuarios
{ 

	/*=============================================
	INGRESO DE USUARIO
	=============================================*/

    public function ctrIngresoUsuario()
    {

        if (isset($_POST["usuario"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])) {

                $tabla = "usuarios";

                $item = "usuario";
                $valor = $_POST["usuario"];

                $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);



                if ($respuesta["usuario"] == $_POST["usuario"] && $respuesta["password"] == $_POST["password"]) {

                    $_SESSION["iniciarSesion"] = "ok";

                    echo '<script>

						window.location = "inicio";

					</script>';

                } else {

                    echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

                }

            }

        }

    }

}