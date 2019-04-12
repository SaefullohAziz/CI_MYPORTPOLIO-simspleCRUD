<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function index()
	{
		$data['siswa'] = $this->db->get('student_table')->result_array();

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('school', 'School', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'valid_email|required|trim');
		$this->form_validation->set_rules('phone', 'Phone', 'numeric|required|trim');
		$this->form_validation->set_rules('grade', 'Grade', 'required|trim');
		$this->form_validation->set_rules('departement', 'Departement', 'required|trim', [
			'required' => 'Please choose the departement!'
		]);

		if($this->form_validation->run() == false){
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('crud/index', $data);
			$this->load->view('templates/footer');
		}else{
			$data = [
				'name' => htmlspecialchars($this->input->post('name')),
				'school' => htmlspecialchars($this->input->post('school')),
				'email' => htmlspecialchars($this->input->post('email')),
				'phone_number' => htmlspecialchars($this->input->post('phone')),
				'grade' => htmlspecialchars($this->input->post('grade')),
				'departement' => htmlspecialchars($this->input->post('departement'))
			];
			$this->db->insert('student_table', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New student has been added!</div>');
            redirect('crud');
		}
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('student_table');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Student id '.$id.' has been deleted!</div>');
        redirect('crud');
	}

	public function getChange()
	{
		echo json_encode($this->db->get_where('student_table', ['id' => $this->input->post('id')])->row_array());
	}

	public function detail($id)
	{
		$data['siswa'] = $this->db->get_where('student_table', ['id' => $id])->row_array();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('crud/detail', $data);
		$this->load->view('templates/footer');
	}

	public function change()
	{
		$data = [
			'name' => htmlspecialchars($this->input->post('name')),
			'school' => htmlspecialchars($this->input->post('school')),
			'email' => htmlspecialchars($this->input->post('email')),
			'phone_number' => htmlspecialchars($this->input->post('phone')),
			'grade' => htmlspecialchars($this->input->post('grade')),
			'departement' => htmlspecialchars($this->input->post('departement'))
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('student_table', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Student id '. $this->input->post('id') .' was updated!</div>');
        redirect('crud');
	}

}