<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MX_Controller {

       public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }

       public function index(){
			if($this->session->userdata('id')){
			redirect(base_url().'myapp');
		}
		else{
			$data['module']='register';
			$data['view']='registerpage';
			$data['description']='Moteur de recherche destiné aux universités du Cameroun';
			$data['title']='Dorothy - Créez un compte';
			echo Modules::run('template/myapp',$data);
		}
	}

	//create a new user
	public function create_user(){
		$this->data['title'] = "Create User";

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			redirect('./register');
		}

		$tables = $this->config->item('tables','ion_auth');
		
		//validate form input
		$this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'required|xss_clean');
		$this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'required|xss_clean');
		$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique['.$tables['users'].'.email]');
		$this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'required|xss_clean');
		$this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'required|xss_clean');
		$this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
		$this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

		if ($this->form_validation->run() == true)
		{
			$username = strtolower($this->input->post('first_name')) . ' ' . strtolower($this->input->post('last_name'));
			$email    = strtolower($this->input->post('email'));
			$password = $this->input->post('password');

			$additional_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name'  => $this->input->post('last_name'),
				'company'    => $this->input->post('company'),
				'phone'      => $this->input->post('phone'),
			);
		}
		if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $email, $additional_data))
		{
			//check to see if we are creating the user
			//redirect them back to the admin page
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			redirect("auth", 'refresh');
		}
		else
		{
			//display the create user form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

			$this->data['first_name'] = array(
				'name'  => 'first_name',
				'id'    => 'first_name',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('first_name'),
			);
			$this->data['last_name'] = array(
				'name'  => 'last_name',
				'id'    => 'last_name',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('last_name'),
			);
			$this->data['email'] = array(
				'name'  => 'email',
				'id'    => 'email',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('email'),
			);
			$this->data['company'] = array(
				'name'  => 'company',
				'id'    => 'company',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('company'),
			);
			$this->data['phone'] = array(
				'name'  => 'phone',
				'id'    => 'phone',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('phone'),
			);
			$this->data['password'] = array(
				'name'  => 'password',
				'id'    => 'password',
				'type'  => 'password',
				'value' => $this->form_validation->set_value('password'),
			);
			$this->data['password_confirm'] = array(
				'name'  => 'password_confirm',
				'id'    => 'password_confirm',
				'type'  => 'password',
				'value' => $this->form_validation->set_value('password_confirm'),
			);

			$this->_render_page('auth/create_user', $this->data);
		}
	}
}
?>