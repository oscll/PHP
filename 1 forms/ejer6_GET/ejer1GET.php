<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<p>Introduzca sus datos personales:</p>
<form name="formulario" method="GET" action="ejer2GET.php">
  <table width="50%"  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="24%">Nombre</td>
      <td width="76%"><input name="nombre" type="text" id="nombre"></td>
    </tr>
    <tr>
      <td>Apellidos</td>
      <td><input name="apellidos" type="text" id="apellidos2"></td>
    </tr>
    <tr>
      <td>Correo</td>
      <td><input name="correo" type="text" id="correo"></td>
    </tr>
    <tr>
      <td>Estado civil </td>
      <td><select name="estado" id="estado">
        <option value="Soltero">Soltero</option>
        <option value="Casado">Casado</option>
        <option value="Divorciado">Divorciado</option>
        <option value="Viudo">Viudo</option>
      </select></td>
    </tr>
    <tr>
      <td>N&uacute;mero hijos </td>
      <td>0 <input name="hijos" type="radio" value="0" checked>
       	1 <input name="hijos" type="radio" value="1">
        	2 <input name="hijos" type="radio" value="2">
        	3 <input name="hijos" type="radio" value="3"></td>
    </tr>
    <tr>
      <td>Gustos</td>
      <td>Inform&aacute;tica <input type="checkbox" name="gustos[]" value="Informatica">
        	Buceo  <input type="checkbox" name="gustos[]" value="Buceo">
        	Magia <input type="checkbox" name="gustos[]" value="Magia">
        	Jazz   <input type="checkbox" name="gustos[]" value="Jazz"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Enviar"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</body>
</html>