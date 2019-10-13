<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	public function __construct(){
    parent:: __construct();

  }
	public function index()
	{
		$this->load->view('pages/index');
	}
	public function about_us(){
		$this->load->view('pages/about_us');
	}
	public function contact(){
		$this->load->view('pages/contact');
	}
	public function service(){
		$this->load->view('pages/service');
	}
	public function blog_list(){
		$this->load->model('Admin_Model');
		$data['blog_list'] = $this->Admin_Model->get_blog_list();
		$this->load->view('pages/blog_list',$data);
	}
	public function blog_details(){
		$this->load->model('Admin_Model');
		$blog_id = $this->input->post('blog_id');
		if($blog_id){
			$data['blog_details'] = $this->Admin_Model->blog_details($blog_id);
			$this->load->view('pages/blog_details',$data);
		}
		else{
			header('location:Blogs');
		}
	}

	public function send_contact_mail(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');

			$from_email = $email;
			$formcontent='
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
			 New Email from Website.
			 </p>
			 <hr>
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
			 Sender Name: '.$name.'
			 </p>
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
			 Email: '.$email.'
			 </p>
			 <hr>
			 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
			 Message: '.$message.'
			 </p>
		 ';
			$recipient = "";
			$subject = "Email from Website.";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '.$from_email."\r\n".
									'Reply-To: '.$from_email."\r\n" .
									'X-Mailer: PHP/' . phpversion();

			$send = mail($recipient, $subject, $formcontent, $headers);
			if($send){
				$this->session->set_flashdata('send_email','success');
			}
			else{
				$this->session->set_flashdata('send_email','error');
			}
			header('Location:'.base_url().'');
	}

	public function send_apointment_mail(){
		$full_name = $this->input->post('full_name');
		$ap_email = $this->input->post('ap_email');
		$ap_mobile = $this->input->post('ap_mobile');
		$ap_date = $this->input->post('ap_date');
		$ap_time = $this->input->post('ap_time');

		$from_email = $ap_email;
		$formcontent='
		 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
		 Appointment Request from Website.
		 </p>
		 <hr>
		 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
		 Sender Name: '.$full_name.'
		 </p>
		 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
		 Appointment Date: '.$ap_date.'
		 </p>
		 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
		 Appointment Time: '.$ap_time.'
		 </p>
		 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
		 Mobile Number: '.$ap_mobile.'
		 </p>
		 <p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Times, serif; ">
		 Email: '.$email.'
		 </p>
	 ';
		$recipient = "";
		$subject = "Email from Website.";
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$from_email."\r\n".
								'Reply-To: '.$from_email."\r\n" .
								'X-Mailer: PHP/' . phpversion();

		$send = mail($recipient, $subject, $formcontent, $headers);
		if($send){
			$this->session->set_flashdata('send_ap_email','success');
		}
		else{
			$this->session->set_flashdata('send_ap_email','error');
		}
		header('Location:'.base_url().'');
	}
}
?>
