<div id="contenido">
  <?php
      $action="index.php?page=controller_user&op=update";
      $submit="update";
      if(!empty($_POST))
        $item=$_POST;
      else{
        $user['aficion']=explode(":",$user['aficion']);
        $item=$user;
      }
      $readonly=true;
      include("module/user/view/form.php")
   ?>
</div>
