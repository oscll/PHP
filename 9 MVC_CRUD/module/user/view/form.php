<div class="content-w3ls">
	<h1 class="header-agileits"><?php echo $submit; ?></h1>
	<div class="form-w3layouts">
<form method="post" name="formusers" id="formusers" onsubmit="return true;" action="<?php echo $action ?>"> <!-- return validate();-->
  <div class="form-control">
    <label class="header">imdbID</label>
    <input name="imdbID" id="imdbID" type="text" placeholder="imdbID" size="30%" value="<?php echo $item?$item['imdbID']:""; ?>" <?php echo $readonly?"readonly":"" ?>/>
    <span id="e_imdbID" class="styerror"></span>
    <?php
      if ($error_imdbID != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_imdbID . "</SPAN>");
    ?>
    <div class="clear"></div>
  </div>
  <div class="form-control">
    <label class="header">titulo</label>
    <input name="titulo" id="titulo" type="text" placeholder="titulo" size="30%" value="<?php echo $item?$item['titulo']:""; ?>" />
    <span id="e_titulo" class="styerror"></span>
    <?php
      if ($error_titulo != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_titulo . "</SPAN>");
    ?>
    <div class="clear"></div>
  </div>
      <div class="form-control">
    <label class="header">director</label>
    <input name="director" id="director" type="text" placeholder="director" size="30%" value="<?php echo $item?$item['director']:""; ?>" />
    <span id="e_director" class="styerror"></span>
    <?php
      if ($error_director != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_director . "</SPAN>");
    ?>
    <div class="clear"></div>
  </div>
      <div class="form-control">
    <label class="header">actors</label>
    <input name="actors" id="actors" type="text" placeholder="actors" size="30%" value="<?php echo $item?$item['actors']:""; ?>" />
    <span id="e_actors" class="styerror"></span>
    <?php
      if ($error_actors != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_actors . "</SPAN>");
    ?>
    <div class="clear"></div>
  </div>
  <div class="form-control">
    <label class="header">Lanzamiento</label>
    <input name="fecha_lanzamiento" id="fecha_lanzamiento" type="text" size="30%" placeholder="fecha de lanzamiento" value="<?php echo $item?$item['fecha_lanzamiento']:""; ?>" readonly="readonly"/>
    <span id="e_fecha_lanzamiento" class="styerror"></span>
    <?php
      if ($error_fecha_lanzamiento != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_fecha_lanzamiento . "</SPAN>");
    ?>
    <div class="clear"></div>
  </div>
  <div class="form-control">
    <label class="header">plot</label>
    <textarea cols="35" rows="5" id="plot" name="plot" placeholder="plot" ><?php echo $item?$item['plot']:""; ?></textarea>
    <span id="e_plot" class="styerror"></span>
    <?php
      if ($error_plot != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_plot . "</SPAN>");
    ?>
    <div class="clear"></div>
  </div>
      <div class="form-control">
    <label class="header">Email</label>
    <input name="email" id="email" type="text" placeholder="email" size="30%" value="<?php echo $item?$item['email']:""; ?>" />
    <span id="e_email" class="styerror"></span>
    <?php
      if ($error_email != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_email . "</SPAN>");
    ?>
    <div class="clear"></div>
  </div>
  <div class="form-control">
    <label class="header">website</label>
    <input name="website" id="website" type="text" placeholder="website" size="30%" value="<?php echo $item?$item['website']:""; ?>" />
    <span id="e_website" class="styerror"></span>
    <?php
      if ($error_website != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_website . "</SPAN>");
    ?>
    <div class="clear"></div>
  </div>
      <div class="form-control">
    <label class="header">Tematica</label>
		<ul type="none">
			<div class="aficiones">
    	<li><input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "Comedia" value="Comedia"<?php $key=array_search("Comedia",$item['aficion'],true);
	    if($key===0||$key===1||$key===2||$key===3){echo checked;}?> />Comedia</li>
			<li>    <input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "Ciencia Ficcion" value="Ciencia Ficcio"
			    <?php $key=array_search("Ciencia Ficcio",$item['aficion'],true);
			    if($key===0||$key===1||$key===2||$key===3){echo checked;}?>/>Ciencia Ficcion</li>
					<li><input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "Drama" value="Drama" <?php $key=array_search("Drama",$item['aficion'],true);
			    if($key===0||$key===1||$key===2||$key===3){echo checked;}?>/>Drama</li>
					<li>  <input type="checkbox" id= "aficion[]" name="aficion[]" placeholder= "Documental" value="Documental"<?php $key=array_search("Documental",$item['aficion'],true);
				    if($key===0||$key===1||$key===2||$key===3){echo checked;}?>/>Documental</li>
						</div>
		</ul>

    <span id="e_aficion[]" class="styerror"></span>
    <?php
      if ($error_aficion != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_aficion . "</SPAN>");
    ?>
    <div class="clear"></div>
  </div>
      <div class="form-control">
    <label class="header">Idioma</label>
    <select size="1" cols="35" id="idioma" name="idioma" placeholder="idioma" >
        <option value="Spain" <?php if($item['idioma']==="Spain"){echo "selected";} ?> >Spain</option>
        <option value="Ingles" <?php if($item['idioma']==="Ingles"){echo "selected";} ?> >Ingles</option>
        <option value="Portugues" <?php if($item['idioma']==="Portugues"){echo "selected";} ?> >Portugues</option>
        <option value="Frances" <?php if($item['idioma']==="Frances"){echo "selected";} ?> >Frances</option>
        <option value="Aleman" <?php if($item['idioma']==="Aleman"){echo "selected";} ?> >Aleman</option>
    </select>
    <span id="e_idioma" class="styerror"></span>
		<?php
      if ($error_idioma != "")
            print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_idioma . "</SPAN>");
    ?>
    <div class="clear"></div>
  </div>
  <div class="form-control">
    <label class="header">Type</label>
    <input type="radio" id="type"  name="type" value="serie"<?php if($item['type']==="serie"){echo "checked";}?> > Serie
    <input type="radio" id="type" name="type" value="movie" <?php if($item['type']==="movie"){echo "checked";}?> > Movie<br>
    <span id="e_type" class="styerror">
      <?php
        if ($error_type != "")
              print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_type . "</SPAN>");
      ?>
      <div class="clear"></div>
    </span>
  </div>
  <input name="<?php echo $submit; ?>" type="submit" value="<?php echo $submit; ?>"/>
</form>
</div>
</div>
