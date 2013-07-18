<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title>Examen </title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/style/style.css"/>
</head>
<body>
<div id="wrapper">
<div id="content">

 <?php $this->load->helper('dob'); ?>
  <h2>Titulos</h2>
  
 <?php echo form_open("home/title2"); ?> 
 
 <?php foreach($query as $row){
		$id		= $row->id;
		$titulo = $row->titulo; 
		?>
		
		<ul
			<li> <a href="title2"><?php echo $titulo; ?> </a> </li>
			
		</ul>
		
 <?php }?>
 
 <?php echo form_close(); ?>
 
</div>
</div>
</body>
</html>