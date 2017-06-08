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
		$this->load->view('main');
	}

	public function changeLanguage(){
		$currlang = 'in';
		if(isset($_GET['lang'])){
			$currlang = $_GET['lang'];
		}
		if($currlang == 'en'){
			$this->load->view('main_in');
		}
		else{
			$this->load->view('main');
		}
	}

	public function tes($apa,$apu){

		echo $apa;
		echo "<br/>";
		echo $apu;

		echo "<br><br>";
		$this->load->model('Member');
		$result = $this->Member->getMemberInfo($apa);
		echo md5('admin111');
		echo "<br><br>";
		print_r($result->Mem_Password);
		echo "<br><br>";
		print_r($result);
	}

	public function sendContactEmail(){
		$lang = $this->input->post('lang');
		$fullname = $this->input->post('txtFullname');
		$email = $this->input->post('txtEmail');
		$msg = $this->input->post('txtMessage');

		if($fullname == "" or $email == "" or $msg == ""){
			$this->load->library('session');
			if($lang == "in"){
				$_SESSION['error'] = 'Pengisian Form tidak Lengkap ! Harap seluruh isian dilengkapi.';
	     		redirect('welcome/changeLanguage?lang=en#contact');
			}
			else{
				$_SESSION['error'] = 'Some Form Fields are Empty ! Please fill all the form fields.';
		     	redirect('welcome#contact');
			}
		}
		else{
			$this->load->model('emailconfig');
			$this->load->library('email', $this->emailconfig->config());
			$this->email->set_newline("\r\n");
			$message = "Email Sender : ".$email."<br/>";
			$message .= "Sender Fullname : ".$fullname."<br/>";
			$message .= "Message : ".$msg;
			print_r($this->emailconfig->config());
			$this->email->from('info@stockboxcapital.com');
		    $this->email->to('reonaldusm@gmail.com, adit.codex@gmail.com');
		    $this->email->subject('Someone Fills the Contact Form');
		    $this->email->message($message);
		    if($this->email->send()){
		    	if($lang == "in"){
					$_SESSION['info'] = 'Terima kasih sudah menghubungi kami. Kami akan membalas pesan anda lewat email yang anda informasikan.';
		     		redirect('welcome/changeLanguage?lang=en#contact');
				}
				else{
					$_SESSION['info'] = 'Thanks for your message. We shall reply your message to your email address.';
			     	redirect('welcome#contact');
				}
		    }
		    else{
		     show_error($this->email->print_debugger());
		    }
		}
	}
}
