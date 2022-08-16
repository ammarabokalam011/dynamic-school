<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 6/28/2019
 * Time: 3:48 PM
 */

class teacher extends  CI_Controller
{

    public function index(){
        if($this->session->has_userdata('teacher_name'))
            $this->load->view('teacher_view');
        else
            $this->load->view('login_teacher');

    }

    public function login (){
        $user_name = $_POST['user_name'];
        $pass = $_POST['password'];

        $this->load->model('teacher_model');
        $user_chicked =$this->teacher_model->chick_teacher($user_name,$pass);

        if($user_chicked==true) {

            //sessine
            $this->session->set_userdata('teacher_name', $user_name);
        }
        redirect(base_url('teacher'));

    }

    function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('login_teacher');
    }

    public function requests(){
        $this->load->model('requests_model');
        $data['requests']=$this->requests_model->get_all_unanswered();
        $this->load->view('teacher_all_request',$data);
    }

    public function answer_request($req_id){
        $this->load->model('requests_model');
        $data['request']=$this->requests_model->getby_id($req_id);
        $this->load->view('teacher_request',$data);
    }

    public function send_answer(){
        $req_id=$this->input->post('req_id');
        $answer=$this->input->post('answer');
        $this->load->model('requests_model');
        $this->requests_model->insert_answer($req_id,$answer);
        redirect(base_url('teacher/requests'));
    }
}