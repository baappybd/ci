<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller {
public function dashboard()
	{
		$data = array();
		$data['main_content'] = $this->load->view('pages/dashboard','',true);
		$this->load->view('dashboard',$data);
	}
	public function add_student()
	{
		$data = array();
		$data['main_content'] = $this->load->view('pages/add_student','',true);
		$this->load->view('dashboard',$data);
    }
    public function manage_student()
	{
		$data = array();
		$data['main_content'] = $this->load->view('pages/manage_student','',true);
		$this->load->view('dashboard',$data);
    }
    public function edit_admin()
	{
		$data = array();
		$data['main_content'] = $this->load->view('pages/edit_admin','',true);
		$this->load->view('dashboard',$data);
    }
    public function save_student(){
        $this->load->model('admin_model');
        $this->admin_model->save_student_info();
    }
}