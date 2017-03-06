<?php ob_start() ?>

      <form name="formBusqueda" action="index.php?ctl=eliminarAlimento" method="POST">

          <table>
              <tr>
                  <td>nombre alimento:</td>
                  <td><input type="text" name="nombre" value="<?php echo $params['nombre']?>"> Asegurase antes de borrar</td>

                  <td><input type="submit" value="eliminar"></td>
              </tr>
          </table>

          </table>

      </form>


      <?php $contenido = ob_get_clean() ?>

      <?php include 'layout.php' ?>