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
		<?php echo $row->id;?> </li>
		
		<li><label for="titulo">Titulo:</label> 
		<?php echo $row->titulo;?> </li>
		
		<li> <label for="descripcion">Descripcion:</label> 
		<?php echo $row->descripcion;?> </li>
		
		<li> <label for="fecha">Fecha: </label>
		<?php echo $row->fecha;?> </li>
		
		<li> <label for="boleano">Activo:</label>
		<?php echo $row->boleano;?> </li>
	</ul>	
 <?php }?>
 
</div>
</div>
</body>
</html>