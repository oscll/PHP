<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>LISTA DE FILMS</h3>
    	</div>
    	<div class="row">
    		<table>
                <tr>
                    <th><b>Titulo</b></th>
                    <th><b>imdbID</b></th>
                    <th><b>Type</b></th>
                    <th><b>Accion</b>
                      <?php
                      if ($rdo->num_rows !== 0){
                        echo '<a href="index.php?page=controller_user&op=removeall" class="removeall">Remove all</a>';
                      }
                      ?>
                      <a href="index.php?page=controller_user&op=create" class="add">Add new</a></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center"  colspan="4">NO HAY NINGUN USUARIO</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td class="data">'. $row['titulo'] . '</td>';
                    	   	echo '<td class="data">'. $row['imdbID'] . '</td>';
                    	   	echo '<td class="data">'. $row['type'] . '</td>';
                    	   	echo '<td class="data">';
                    	   	echo '<a class="Button_blue" href="index.php?page=controller_user&op=read&id='.$row['imdbID'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_user&op=update&id='.$row['imdbID'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_user&op=delete&id='.$row['imdbID'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>
