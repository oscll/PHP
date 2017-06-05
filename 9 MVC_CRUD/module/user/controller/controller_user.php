<?php
    include ("module/user/model/DAOUser.php");
    session_start();

    switch($_GET['op']){
        case 'list':
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_all_films();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			          die('<script>window.location.href="'.$callback .'";</script>');
            }

            if(!$rdo){
    			      $callback = 'index.php?page=503';
			          die('<script>window.location.href="'.$callback .'";</script>');
    		    }else{
                include("module/user/view/list_user.php");
    		    }
            break;

        case 'create':
            include("module/user/model/validate.php");

            $check = true;
            $error = false;
            $errores = false;
            $error_imdbID = false;
            $error_titulo = false;
            $error_director = false;
            $error_actors = false;
            $error_fecha_lanzamiento = false;
            $error_plot = false;
            $error_email = false;
            $error_website = false;
            $error_aficion = false;
            $error_idioma = false;
            $error_type = false;

            if (isset($_POST['create'])){
              $error = validate_user();
        			if(!empty($error['error'])){
        				$errores=$error['error'];
        				$error_imdbID = $errores['imdbID'];
        				$error_titulo = $errores['titulo'];
        				$error_director = $errores['director'];
        				$error_actors = $errores['actors'];
        				$error_fecha_lanzamiento = $errores['fecha_lanzamiento'];
        				$error_plot = $errores['plot'];
        				$error_email = $errores['email'];
        				$error_website = $errores['website'];
        				$error_aficion = $errores['aficion'];
        				$error_idioma = $errores['idioma'];
        				$error_type = $errores['type'];
        			}
              $check=(!$error['resultado']);

                if ($check){
                    $_SESSION['user']=$_POST;
                    try{
                        $daouser = new DAOUser();
    		                $rdo = $daouser->insert_film($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }

		            if($rdo){
            			echo '<script language="javascript">alert("Registrado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_user&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
                  echo "false sfsd f";
                  die();
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
            include("module/user/view/create_user.php");
            break;

        case 'update':

            include("module/user/model/validate.php");
            $check = true;

            if (isset($_POST['update'])){
                //$check=validate();
                $error = validate_user();
          			if(!empty($error['error'])){
          				$errores=$error['error'];
          				$error_imdbID = $errores['imdbID'];
          				$error_titulo = $errores['titulo'];
          				$error_director = $errores['director'];
          				$error_actors = $errores['actors'];
          				$error_fecha_lanzamiento = $errores['fecha_lanzamiento'];
          				$error_plot = $errores['plot'];
          				$error_email = $errores['email'];
          				$error_website = $errores['website'];
          				$error_aficion = $errores['aficion'];
          				$error_idioma = $errores['idioma'];
          				$error_type = $errores['type'];
          			}
                $check=(!$error['resultado']);
                if ($check){
                    $_SESSION['user']=$_POST;
                    try{
                        $daouser = new DAOUser();
    		                $rdo = $daouser->update_film($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }

		            if($rdo){
            			echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_user&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }

            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_film($_GET['id']);
            	$user=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }

            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
        	    include("module/user/view/update_user.php");
    		}
            break;

        case 'read':
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_film($_GET['id']);
            	$user=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/user/view/read_user.php");
    		}
            break;

        case 'delete':
            if (isset($_POST['delete'])){
                try{
                    $daouser = new DAOUser();
                	$rdo = $daouser->delete_film($_GET['id']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }

            	if($rdo){
        			echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
        			$callback = 'index.php?page=controller_user&op=list';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }

            include("module/user/view/delete_user.php");
            break;
        default;
            include("view/inc/error404.php");
            break;
    }
