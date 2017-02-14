<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function qwer()
	{
		$this->load->view('gg/qwer');
	}
	
	public function about()
	{
		$this->load->view('about');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function register()
	{	
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[20]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[20]|matches[cpassword]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[3]|max_length[20]');
				
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('index');
		}
		else
		{
			$this->load->model('users_model');
			
			if($this->input->post()) {
				$data = $this->input->post();
				$result = $this->users_model->add($data);
				echo '<script>window.alert("You may now log in!");</script>';
				redirect('welcome/index/', 'refresh');
		}
		}
		
	}

public function Login()
	{
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('welcome/index');
			}
		
		
		else
		{
			if ($this->input->post())
			{
				$this->load->model('Users_model');				
				$data = $this->input->post();
				$this->Users_model->login($data['username'], $data ['password']);
		
				$result=$this->Users_model->login($data['username'], $data ['password']);
				
				if(!$result) {
					redirect('welcome/contact');
				}
				
				else {
					echo 'noob';
				}
				
				echo $result;
				exit();
			}
		}
		
	}
}