<?php ob_start() ?>

 <table>
     <tr>
         <th>ALIMENTOS</th>
        
     </tr>
     <?php foreach ($params['alimentos'] as $alimento) :?>
     <tr>
       <td>
       <a class="iframe" href="http://es.wikipedia.org/wiki/<?php echo $alimento['nombre']?>"<?php echo $alimento['id']?>" >
                 <?php echo $alimento['nombre'] ?></a>
         </td>
                 
     </tr>
     <?php endforeach; ?>

 </table>


 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>