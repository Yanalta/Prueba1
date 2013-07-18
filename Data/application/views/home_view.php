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
 
 <?php $this->load->helper('dob'); 
		$this->load->view("site_nav");?>
 <div class="reg_form">
 <?php echo validation_errors('<p class="error">'); ?>
 
 <?php echo form_open("home/add_data"); ?>
  <p>
   <label for="titulo">Titulo:</label>
   <input type="text" id="titulo" name="titulo" value="" />
  </p>
	<p>
   <label for="descipcion">Descripcion:</label>
   <input type="text" id="descripcion" name="descripcion" value="" />
  </p>
  <p>
   <label>Fecha:</label>
   <select name="month"><option value="0">Month:</option><?php echo generate_options(1,12,'callback_month')?></select>
   <select name="day"><option value="0">Day:</option><?php echo generate_options(1,31)?></select>
   <select name="year"><option value="0">Year:</option><?php echo generate_options(2011,1900)?></select>
  </p>
	<label for="boleano">Datos Confirmados: </label>
	<p><input type="checkbox" name="boleano" value="accept" checked="checked" /> </p>
  <p>
   <input type="submit" class="ThaButton" value="Submit" />
  </p>
 <?php echo form_close(); ?>
</div>
</div>
<div id="footer">
Este es un examen.
</div>
</div>
</body>
</html>