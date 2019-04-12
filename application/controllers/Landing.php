<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {


	public function index()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'valid_email|required|trim');
		$this->form_validation->set_rules('phonenumber', 'Phone', 'numeric|required|trim');
		$this->form_validation->set_rules('message', 'Message', 'required|trim');
		if($this->form_validation->run() == false){
        	$this->load->view('landing/index');
        }else{

        	$data = [
        		"name" => htmlspecialchars($this->input->post('name')),
        		"email" => htmlspecialchars($this->input->post('email')),
        		"phone_number" => htmlspecialchars($this->input->post('phonenumber')),
        		"message" => htmlspecialchars($this->input->post('message'))
        	];
	        $this->db->set('date', 'NOW()', FALSE);
        	$this->db->insert('message', $data);
        	$this->session->set_flashdata('message', '<div class="alert alert-danger text-center font-weight-bold" role="alert">Your message was send, Thank you!</div>');
            redirect('landing');
        }
	}

}