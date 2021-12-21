<?php

class Php2 extends CI_Controller {

   function login($idioma=null)
   {
         
      //Configurar en el archivo config/routes.php el default_controller con el valor php/login
      if(!isset($_POST['maillogin'])){   //   Si no recibimos ningún valor proveniente del formulario, significa que el usuario recién ingresa.   
         $this->load->view('login2');      //   Por lo tanto le presentamos la pantalla del formulario de ingreso.
      }
      else{                        //   Si el usuario ya pasó por la pantalla inicial y presionó el botón "Ingresar"
         $this->form_validation->set_rules('maillogin','e-mail','required|valid_email');      //   Configuramos las validaciones ayudandonos con la librería form_validation del Framework Codeigniter
         $this->form_validation->set_rules('passwordlogin','password','required');
         if(($this->form_validation->run()==FALSE)){            //   Verificamos si el usuario superó la validación
            $this->load->view('login2');                     //   En caso que no, volvemos a presentar la pantalla de login
         }
         else{                                       //   Si ambos campos fueron correctamente rellanados por el usuario,
            $this->load->model('usuarios_model');
            $ExisteUsuarioyPassoword=$this->usuarios_model->ValidarUsuario($_POST['maillogin'],$_POST['passwordlogin']);   //   comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
            if($ExisteUsuarioyPassoword){   // La variable $ExisteUsuarioyPassoword recibe valor TRUE si el usuario existe y FALSE en caso que no. Este valor lo determina el modelo.
               $this->load->library('session'); // cargamos la librería para sessiones del framework php CodeIgniter
				$info_usuario=array(
							'habilitado' =>TRUE 
							);
				$this->session->set_userdata($info_usuario); // configuramos la variable de sessión 'habilitado'
				$this->load->helper('url'); // cargamos el helper url del framework php Codeigniter, necesario para la próxima sentencia
				redirect('php2/AccesoRestringidoFrameworkPhpCodeigniter', 'refresh'); // habiendo confirmado que el usuario está habilitado, lo direccionamos hacia la página de contenido restringido.
            }
            else{   //   Si no logró validar
               $data['error']="E-mail o password incorrecta, por favor vuelva a intentar";
               $this->load->view('login2',$data);   //   Lo regresamos a la pantalla de login y pasamos como parámetro el mensaje de error a presentar en pantalla
            }
         }
      }
   }
   
   function AccesoRestringidoFrameworkPhpCodeigniter(){
	   $this->load->library('session'); // cargamos la librería para sessiones del framework php CodeIgniter
	   !isset($this->session->userdata['habilitado'])?   die('Página con acceso restringido. <a href="./login">Click aquí para hacer login</a>')   :   ''; // si el usuario no tiene activada la variable de sessión "habilitado", detenemos la ejecución del programa y presentamos mensaje de error.
	   $this->load->view('escritorio'); // si la ejecución del script llegó hasta aquí, significa que el usuario puede hacer un login válido, por lo tanto cargamos una vista de bienvenida al sistema.
	}
	
	function FrameworkPhpCodeigniterCerrarSession(){   
	   $this->load->library('session');
	   $this->session->unset_userdata('habilitado'); // desactivamos la varialble de session "habilitado". Equivale a dejar sin acceso al usuario.
	   $this->login();
	}
}
