<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>Examen </title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/style/style.css" />
</head>
<body>
<div id="wrapper">
<div id="content">

 <?php $this->load->helper('dob'); ?> 
 <h2>Titulos</h2>
 
 <?php foreach($query as $row){?>
  <ul>

		<li><label for="id">ID:</label>
		<a href="<?php echo $row->id;?> </li>
		
		<li><label for="titulo">Titulo:</label> 
		<a href="<?php echo $row->titulo;?> </li>
		
		<li> <label for="descripcion">Descripcion:</label> 
		<a href="<?php echo $row->descripcion;?> </li>
		
		<li> <label for="fecha">Fecha: </label>
		<a href="<?php echo $row->fecha;?> </li>
		
		<li> <label for="boleano">Activo:</label>
		<a href="<?php echo $row->boleano;?> </li>
	</ul>	
 <?php }?>
 
</div>
</div>
</body>
</html>