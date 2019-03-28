<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller{

	function index()
	{
		 
		$data = array('title' => 'Home' , 'mensaje' => 'Pagina de Bienvenida' , 'texto' => 'ro sunt similique atque eum eveniet, incidunt iure.'); //se declara la variable que llevra los valores al html
		
		$this->load->view('pruebaview', $data); //carga el html y la variable declarada de los valores
	} 

}

