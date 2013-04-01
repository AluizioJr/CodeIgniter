<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MainController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		//echo("Testando");
		//$usuario = "Aluizio Junior";
		//$this->bemvindoUsuario($usuario);
		

		
		
		//$this->load->helper('form');
		$this->load->model('usuario_model');
		$data['usuarios'] = $this->usuario_model->get_all('');

		$this->load->view('main_view', $data);
		

	}

	function create_usuario(){

		$this->load->model('usuario_model');
		$data = array(

			'nome' => $this->input->post('nome'),
			'email' => $this->input->post('email'),
			'senha' => $this->input->post('senha'),


			);

		if($this->usuario_model->add_record($data)){

			$this->session->set_flashdata('msg','Cadastro com sucesso!!');
			redirect('maincontroller');


		}

}
		function apagar_usuario(){

		$this->load->model('usuario_model');
		
		if($this->usuario_model->delete_record())


		{

			$this->session->set_flashdata('msg','Apagado com sucesso!!');
			redirect('maincontroller');


		} else {


			die('testes');
		}

	}


	function editar_usuario($id){

		$this->load->model('usuario_model');
		$data['usuario'] = $this->usuario_model->get_by_id($id);

		$this->form_validation->set_rules('nome', 'nome', 'thimirequired');

		if($this->form_validation->run())

		 {
			$_POST['id'] = $id;
			if($this->usuario_model->update_record($_POST)){

				redirect('maincontroller');

			}

		}

		$this->load->view('update_view', $data);

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */