<form method="post" name="formusers" id="formusers" onsubmit="return validate();" action="<?php echo $action ?>"> <!-- return validate_user();-->
  <p>
    <label for="imdbID">imdbID</label>
    <input name="imdbID" id="imdbID" type="text" placeholder="imdbID" size="30%" value="<?php echo $item?$item['imdbID']:""; ?>" <?php echo $readonly?"readonly":"" ?>/>
    <span id="e_imdbID" class="styerror"></span>
    <?php
      if ($error_imdbID != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_imdbID . "</SPAN>");
    ?>
  </p>
  <p>
    <label for="titulo">titulo</label>
    <input name="titulo" id="titulo" type="text" placeholder="titulo" size="30%" value="<?php echo $item?$item['titulo']:""; ?>" />
    <span id="e_titulo" class="styerror"></span>
    <?php
      if ($error_titulo != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_titulo . "</SPAN>");
    ?>
  </p>
      <p>
    <label for="director">director</label>
    <input name="director" id="director" type="text" placeholder="director" size="30%" value="<?php echo $item?$item['director']:""; ?>" />
    <span id="e_director" class="styerror"></span>
    <?php
      if ($error_director != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_director . "</SPAN>");
    ?>
  </p>
      <p>
    <label for="actors">actors</label>
    <input name="actors" id="actors" type="text" placeholder="actors" size="30%" value="<?php echo $item?$item['actors']:""; ?>" />
    <span id="e_actors" class="styerror"></span>
    <?php
      if ($error_actors != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_actors . "</SPAN>");
    ?>
  </p>
  <p>
    <label for="fecha_lanzamiento">Fecha de lanzamiento</label>
    <input name="fecha_lanzamiento" id="fecha_lanzamiento" type="text" size="30%" placeholder="fecha de lanzamiento" value="<?php echo $item?$item['fecha_lanzamiento']:""; ?>" readonly="readonly"/>
    <span id="e_fecha_lanzamiento" class="styerror"></span>
    <?php
      if ($error_fecha_lanzamiento != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_fecha_lanzamiento . "</SPAN>");
    ?>
  </p>
  <p>
    <label for="plot">plot</label>
    <textarea cols="35" rows="5" id="plot" name="plot" placeholder="plot" ><?php echo $item?$item['plot']:""; ?></textarea>
    <span id="e_plot" class="styerror"></span>
    <?php
      if ($error_plot != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_plot . "</SPAN>");
    ?>
  </p>
      <p>
    <label for="email">Email</label>
    <input name="email" id="email" type="text" placeholder="email" size="30%" value="<?php echo $item?$item['email']:""; ?>" />
    <span id="e_email" class="styerror"></span>
    <?php
      if ($error_email != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_email . "</SPAN>");
    ?>
  </p>
  <p>
    <label for="website">website</label>
    <input name="website" id="website" type="text" placeholder="website" size="30%" value="<?php echo $item?$item['website']:""; ?>" />
    <span id="e_website" class="styerror"></span>
    <?php
      if ($error_website != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_website . "</SPAN>");
    ?>
  </p>
      <p>
    <label for="aficion[]">Tematica</label>
    <input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "Comedia" value="Comedia"<?php $key=array_search("Comedia",$item['aficion'],true);
    if($key===0||$key===1||$key===2||$key===3){echo checked;}?> />Comedia
    <input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "Ciencia Ficcion" value="Ciencia Ficcio"
    <?php $key=array_search("Ciencia Ficcio",$item['aficion'],true);
    if($key===0||$key===1||$key===2||$key===3){echo checked;}?>/>Ciencia Ficcion
    <input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "Drama" value="Drama" <?php $key=array_search("Drama",$item['aficion'],true);
    if($key===0||$key===1||$key===2||$key===3){echo checked;}?>/>Drama
    <input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "Documental" value="Documental"<?php $key=array_search("Documental",$item['aficion'],true);
    if($key===0||$key===1||$key===2||$key===3){echo checked;}?>/>Documental
    <span id="e_aficion[]" class="styerror"></span>
    <?php
      if ($error_aficion != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_aficion . "</SPAN>");
    ?>
  </p>
      <p>
    <label for="idioma">Idioma</label>
    <select size="1" cols="35" id="idioma" name="idioma" placeholder="idioma" >
        <option value="Spain" <?php if($item['idioma']==="Spain"){echo "selected";} ?> >Spain</option>
        <option value="Ingles" <?php if($item['idioma']==="Ingles"){echo "selected";} ?> >Ingles</option>
        <option value="Portugues" <?php if($item['idioma']==="Portugues"){echo "selected";} ?> >Portugues</option>
        <option value="Frances" <?php if($item['idioma']==="Frances"){echo "selected";} ?> >Frances</option>
        <option value="Aleman" <?php if($item['idioma']==="Aleman"){echo "selected";} ?> >Aleman</option>
    </select>
    <span id="e_idioma" class="styerror"></span>
  </p>
  <p>
    <label for="type">Type</label>
    <input type="radio" id="type" checked name="type" value="serie" <?php if($item['type']==="serie"){echo "checked";}?> > Serie
    <input type="radio" id="type" name="type" value="movie" <?php if($item['type']==="movie"){echo "checked";}?> > Movie<br>
    <span id="e_type" class="styerror">
      <?php
        if ($error_type != "")
              print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_type . "</SPAN>");
      ?>
    </span>
  </p>
  <input name="<?php echo $submit ?>" type="submit" value="<?php echo $submit ?>"/>
</form>
