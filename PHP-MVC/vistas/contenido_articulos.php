
   <div style="padding: 15px;">
      <?php 

      	foreach ($Articulos as $articulo)
		{

			echo '<p>';
   			echo '<a href="' . site_url('/articulos_plantilla2/muestra/' . $articulo['id']) . '">' . $articulo['titulo'] . '</a>';
   			echo '</p>';
		    
		}

      ?>
   </div>
  