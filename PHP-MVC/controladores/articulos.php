<?php
class Articulos extends CI_Controller {
   function index(){
      //cargo el helper de url, con funciones para trabajo con URL del sitio
      $this->load->helper('url');
      
      //cargo el modelo de artículos
      $this->load->model('Articulo_model');
      
      //pido los ultimos artículos al modelo
      $datos['Articulos'] = $this->Articulo_model->dame_ultimos_articulos();
      
      //cargo la vista pasando los datos del modelo
      $this->load->view('home',$datos);
      
   }
   
   function muestra($id){
      //cargo el helper de url, con funciones para trabajo con URL del sitio
      $this->load->helper('url');
      
      //cargo el modelo de artículos
      $this->load->model('Articulo_model');
      
      //pido al modelo el artículo que se desea ver
      $datos['detalleArticulo'] = $this->Articulo_model->dame_articulo($id);
      
      //compruebo si he recibido un artículo
      if (!$datos['detalleArticulo']){
         //no he recibido ningún artículo
         //voy a lanzar un error 404 de página no encontrada
         show_404();
      }else{
         //he encontrado el artículo
         //muestro la vista de la página de mostrar un artículo pasando los datos del array del artículo
         $this->load->view('muestra_articulo',$datos);
      }
   }

}
?> 