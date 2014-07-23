<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MX_Controller {

   	public function __construct(){
        parent::__construct();
        // Your own constructor code

	    $this->load->model('mdl_register');
   	}

   	public function index(){
   		if($this->ion_auth->logged_in()){
			redirect(base_url());
		}
		else{
			$data['module']='register';
			$data['view']='registerpage';
			$data['description']='Moteur de recherche destiné aux universités du Cameroun';
			$data['title']='Dorothy - Crééez un compte';
			if(isset($check_loginerror) and $check_loginerror==true){
				$data['login_error']='Erreur d\'autentification, veuillez tenter une nouvelle authentification';
			}
			echo Modules::run('template/myapp',$data);
		}
	}

	public function create_user(){
		$config=array(
			array(
					'field'			=>	'first_name',
					'label'			=>	'First name',
					'rules'			=>	'required|xss_clean'					
			),
			array(
					'field'			=>	'last_name',
					'label'			=>	'Last name',
					'rules'			=>	'required|xss_clean'					
			),
			array(
					'field'			=>	'groupe',
					'label'			=>	'Groupe',
					'rules'			=>	'required|xss_clean'					
			),
			array(
					'field'			=>	'email',
					'label'			=>	'Email',
					'rules'			=>	'required|xss_clean|valid_email|is_unique[users.email]'					
			),
			array(
					'field'			=>	'password',
					'label'			=>	'Password',
					'rules'			=>	'required|xss_clean|min_length[6]|max_length[12]'					
			),
			array(
					'field'			=>	'password1',
					'label'			=>	'Password Confirmed',
					'rules'			=>	'required|xss_clean|matches[password]'					
			)
		);

		$this->form_validation->set_rules($config);

		if($this->form_validation->run()==false){
			$this->index();
		}else{
			$first_name=$this->input->post('first_name');
			$last_name=$this->input->post('last_name');
			$email=$this->input->post('email');
			$groupe=$this->input->post('groupe');
			$password=$this->input->post('password');

			$username=$first_name.' '.$last_name;
			$additional_data = array(
				'first_name' 	=> 			$first_name,
				'last_name' 	=> 			$last_name,
			);
			switch($groupe){
				case 'etudiant':
					$val=5;
					$tablecond='vm_universite_etudiant';
					break;
				case 'enseignant':
					$val=4;
					$tablecond='vm_universite_enseignant';
					break;
				case 'bibliothecaire':
					$val=3;
					$tablecond='vm_universite_bibliothecaire';
					break;
			}

			$wherecond=array(
				'nom'				=>		$first_name,
				'prenom'			=>		$last_name
			);
			$querycondresults=$this->mdl_register->get_allwhereresults($tablecond,$wherecond);
			$nbquerycondresults=$querycondresults->num_rows();
			if($nbquerycondresults==0){
				$data['message_warningRegistration']="Your informations have not been previously registered by universities, you can not use this app!";
			}else{
				$group=array($val);
				$this->ion_auth->register($username, $password, $email, $additional_data, $group);

				$table='users';
				$field=array('id','activation_code');
				$where=array(
						'first_name'		=>		$first_name,
						'last_name'			=>		$last_name
					);
				$queryresults=$this->mdl_register->get_somewhereresults($table,$field,$where);
				foreach($queryresults->result() as $row){
					$id=$row->id;
					$activation_code=$row->activation_code;
				}

				$mail = new PHPMailer;
				$mail->From = 'registration@dorothy.com';
				$mail->FromName = 'Dorothy';
				$mail->addAddress('pambeaba@kristdev.com', $username);
				$mail->addReplyTo('info@dorothy.com', 'Dorothy');
				$mail->isHTML(true);                                  // Set email format to HTML

				$mail->Subject = 'Your registration, '.$email;
				$mail->Body    = '
					<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
					<html>
					<head>
					<title></title>
					<meta name="" content="">
					</head>
					<body>
					<table width="800px" bordercolor="#eeeeee" border="1px" align="center" style="margin-top:20px;">
						<tr bgcolor="#c7c8c4">
							<td align="right">&nbsp; <strong>Dorothy Registration Information</strong> &nbsp;</td>
						</tr>
						<tr>
							<td style="padding: 5px;">
								Welcome to Dorothy Search engine <b>'.$username.'</b>, your registration has been accepted.<br/> your account will validated in 24 hours, your temporary username is <strong>'.$username.'.</strong>, your password is <strong>'.$password.'</strong> <br />
								<strong><u>Important</u>:</strong> your registration will be possible only if your informations mentionned heve been previously mentionned by a university or school registered. <br />
								If it is case, you will see the confirm link: <a href="http://www.kristdev.com/mproject/files/dorothy/register/confirm_user/'.$id.'/'.$activation_code.'">http://www.kristdev.com/mproject/files/dorothy/register/confirm_user/'.$id.'/'.$activation_code.'</a>
							</td>
						</tr>
						<tr>
							<td></td>
						</tr>
					</table>
					</body>
					</html>
				';
				if(!$mail->send()) {
				    // echo 'Message could not be sent. ';
				    // echo 'Mailer Error: ' . $mail->ErrorInfo;
				    $data['message_warningRegistration']="Message could not be sent";
				    
				}else {
				    // echo 'Message has been sent';
				    $data['message_confirmRegistration']='Check your mail to confirm your registration '.$username;
				}

			}
			
			$data['module']			=		'register';
			$data['view']			=		'registerpage';
			$data['description']	=		'Moteur de recherche destiné aux universités du Cameroun';
			$data['title']			=		'Dorothy - Crééez un compte';
			// $data['xajax_js'] 		= 		$this->xajax->getJavascript(base_url());
			$data['blek']			=		"Phrase simple";
			echo Modules::run('template/myapp',$data);

		}
	}

	//activate the user
	function confirm_user($id, $code=false){
		if ($code !== false)
		{
			$activation = $this->ion_auth->activate($id, $code);
		}
		else if ($this->ion_auth->is_admin())
		{
			$activation = $this->ion_auth->activate($id);
		}

		if ($activation)
		{
			//redirect them to the auth page
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			redirect('http://kristdev.com/mproject/files/dorothy');
		}
		else
		{
			//redirect them to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect('http://kristdev.com/mproject/files/dorothy');
		}
	}
}
?>