<?php 
ob_start();

$f1=fopen("alimentos.xml","w+");
# escribimos en el fichero vacío
fwrite($f1,"<?xml version='1.0' encoding='UTF-8'?>"."\n\r");
fwrite($f1,"<alimentos>"."\n\r");
fwrite($f1,"	<alimento>"."\n\r");
fwrite($f1,"		<nombre>".$alimento['nombre']."</nombre>"."\n\r");
fwrite($f1,"		<energia>".$alimento['energia']."</energia>"."\n\r");
fwrite($f1,"		<proteina>".$alimento['proteina']."</proteina>"."\n\r");
fwrite($f1,"		<hidratocarbono>".$alimento['hidratocarbono']."</hidratocarbono>"."\n\r");
fwrite($f1,"		<fibra>".$alimento['fibra']."</fibra>"."\n\r");
fwrite($f1,"		<grasatotal>".$alimento['grasatotal']."</grasatotal>"."\n\r");
fwrite($f1,"	</alimento>"."\n\r");
fwrite($f1,"</alimentos>"."\n\r");

#cerramos el fichero
fclose($f1);
?>       

 <?php ob_start() ?>


<textarea readonly rows="25" cols="50" style="color:blue; background-color: #d8da3d; resize: none ">
    
<?php
$file = fopen("alimentos.xml","r+") or exit("Unable to open file!");
//Salida de una línea del archivo hasta que se alcance el final
while(!feof($file))
{
echo fgets($file);
}
fclose($file);
?>
</textarea>
<a href="index.php?ctl=listar">volver</a>

 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>
