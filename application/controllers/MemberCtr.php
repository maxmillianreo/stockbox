<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberCtr extends CI_Controller {

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
		$this->load->view('memberlogin');
	}

	public function doLogin(){
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$this->load->model('member');
		$res = $this->member->getUserdata($email);

		if($res){
			if(md5($pass) == $res->Member_Password){
				$_SESSION['logged_in'] = array(
					'fullname' => $res->Member_Fullname,
					'email' => $res->Member_Email,
					'level' => $res->Member_Level
				);
				redirect('index.php/HomeCtr');
			}
			else{
				$_SESSION['error'] = "Invalid Password. If you forget your password, please contact our customer service administrator to reset your password.";
				redirect('index.php/MemberCtr');
			}
		}
		else{
			$_SESSION['error'] = "Email not registered. Please contact our customer service administrator to register.";
			redirect('index.php/MemberCtr');
		}
	}

	public function doLogout(){
		$_SESSION['error'] = "Logout successfully from member area.";
		redirect('index.php/MemberCtr');
		session_destroy();
	}

}
