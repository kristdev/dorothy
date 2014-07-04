<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller {

   public function __construct()
   {
        parent::__construct();
        // Your own constructor code
        $this->load->model('mdl_register');
   }

    public function index(){
   		if($this->ion_auth->logged_in()){
			redirect(base_url());
		}
		else{
			$data['module']='dashboard';
			$data['view']='dashboardpage';
			$data['description']='Moteur de recherche destiné aux universités du Cameroun';
			$data['title']='Dorothy - Dashboard';
			echo Modules::run('template/myapp',$data);
		}
	}
}
?>