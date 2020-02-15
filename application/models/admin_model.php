<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function save_student_info(){

        $student_name=$this->input->post('student_name');
        $student_phone=$this->input->post('student_phone');
        $student_roll=$this->input->post('student_roll');

        $data = array(
            'student_name'=>$student_name,
            'student_phone'=>$student_phone,
            'student_roll'=>$student_roll
        );
    
        $this->db->insert('student',$data);

        redirect('add-student');

    }

}