<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCtr extends CI_Controller {

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
    $this->load->library('template');
		$data = array(
			'title' => 'HOME'
		);
    $this->template->load('default', 'home', $data);
	}

	public function doLogout(){
		$_SESSION['error'] = "Logout successfully from member area.";
		redirect('index.php/MemberCtr');
		session_destroy();
	}

  public function userPanel(){
    $this->load->library('template');

    $this->load->model('member');
    $data = array(
			'title' => 'USER PANEL',
			'userinfo' => $this->member->getUserdata($_SESSION['logged_in']['email']),
			'userlist' => $this->member->getUserList($_SESSION['logged_in']['level'], $_SESSION['logged_in']['email'])
		);
    // print_r($data);
    $this->template->load('default', 'userPanelVw', $data);
  }
}
