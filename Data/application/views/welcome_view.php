<div class="content">
  <h2>Registro de Titulos ?>!</h2>
  
	  <div id="content">
			<?php
				foreach($results as $row){
					$id	= $row->id;
					$titulo = $row->titulo;
					$descripcion = $row->descripcion;
					$fecha = $row->fecha;
					$boleano = $row-> boleano;
				}	
				echo heading($title,1);
				
			?>
			
			<p> <label for="id">ID:</label> 
				<?php echo $id; ?> </p>
			<p> <label for="titulo">Titulo:</label>
			<?php echo $titulo; ?> </p>
			<p> <label for="descripcion">Descripcion:</label>
			<?php echo $descripcion; ?> </p>
			<p> <label for="fecha">Fecha:</label>
			<?php echo $fecha; ?> </p>
			<p> <label for="boleano">Aceptar:</label>
			<?php echo $boleano; ?> </p>
		</div>

  <p> We love cookies <3 </p>
  <h3> </h3>
</div><!--<div class="content">-->