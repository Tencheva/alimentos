<?php ob_start() ?>

 <table>
     <tr>
         <th>Alimento (por 100g)</th>
         <th>Energía (Kcal)</th>
         <th>Grasa (g)</th>
         <th>Documento XML</th>
     </tr>
     <?php foreach ($params['alimentos'] as $alimento) :?>
     <tr>
         <td><a href="index.php?ctl=ver&id=<?php echo $alimento['id']?>">
                 <?php echo $alimento['nombre'] ?></a></td>
         <td><?php echo $alimento['energia']?></td>
         <td><?php echo $alimento['grasatotal']?></td>
         <td><a href="index.php?ctl=xml&id=<?php echo $alimento['id']?>">Generar XML</a></td>
     </tr>
     <?php endforeach; ?>

 </table>


 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>