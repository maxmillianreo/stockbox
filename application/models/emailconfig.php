<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	Class Emailconfig extends CI_Model
	{
		//  function config()
		//  {
		//     $email_config = array(
	 //          'protocol' => 'smtp',
		// 	  'smtp_host' => 'ssl://smtp.googlemail.com',
		// 	  'smtp_port' => 465,
		// 	  'smtp_user' => 'stockboxcapital@gmail.com',
		// 	  'smtp_pass' => 'RahasiaBos1234!',
		// 	  'mailtype' => 'html',
		// 	  'charset' => 'iso-8859-1',
		// 	  'wordwrap' => TRUE
	 //        );

	 //        return $email_config;
		// }
		function config()
		{
		    $email_config = array(
	          'protocol' => 'smtp',
			  'smtp_host' => 'ssl://mail.stockboxcapital.com',
			  'smtp_port' => 465,
			  'smtp_user' => 'info@stockboxcapital.com',
			  'smtp_pass' => 'RahasiaGan1234!',
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
	        );

	        return $email_config;
		}
	}
?>