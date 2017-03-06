<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
 <html>
     <head>
         <title>Información Alimentos</title>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" type="text/css" href="<?php echo 'css/'.Config::$mvc_vis_css ?>" />

     </head>
     <body>
         <div id="cabecera">
             <h1>Información de alimentos</h1>
         </div>

         <div id="menu">
             <hr/>
             <a href="index.php?ctl=inicio">Inicio</a> |
             <a href="index.php?ctl=listar">Ver alimentos</a> |
             <a href="index.php?ctl=insertar">Insertar alimento</a> |
             <a href="index.php?ctl=buscar">Buscar por nombre</a> |
             <a href="index.php?ctl=buscarAlimentosPorEnergia">Buscar por energia</a> |
             <a href="index.php?ctl=buscarAlimentosCombinada">Búsqueda combinada</a> |
             <a href="index.php?ctl=buscarPorGrasa"> Buscar por grasa</a> |
             <a href="index.php?ctl=eliminarAlimento">Eliminar un alimento</a>|
             <a href="index.php?ctl=wikipedia"> Wikipedia</a> |
             <hr/>
         </div>

         <div id="contenido">
             <?php echo $contenido ?>
         </div>

         <div id="pie">
             <hr/>
             <div align="center">- pie de página -</div>
         </div>
     </body>
 </html>