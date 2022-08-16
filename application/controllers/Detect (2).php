<?php

class Detect extends CI_Controller{

    public function index(){

        $user_name=$this->session->userdata('user_name');
        $this->load->model('login_model');
        $user=$this->login_model->get_user($user_name);
        if($user!=null){
            $user_id=$user->id;

            $this->load->model('detectquiz');
            $data=$this->detectquiz->get_all($user_id);
            $this->load->view('all_detect_quiz',$data);
        }else{
            redirect(base_url('login'));
        }
    }

    public function start($subject_id){
        $user_name=$this->session->userdata('user_name');
        $this->load->model('login_model');
        $user=$this->login_model->get_user($user_name);
        if($user!=null){
            $this->load->model('detectquiz');
            $data['quastions']=$this->detectquiz->get_all_things($subject_id);
            $data['subject_id']=$subject_id;
            $this->load->view('start_detect_quiz',$data);
        }else{
            redirect(base_url('login'));
        }
    }

    public function end(){
    	print_r($_POST);
        $answers=$this->input->post('choice');
        $subject_id=$this->input->post('subject_id');
        $this->load->model('detectquiz');
        $user_name=$this->session->userdata('user_name');
        $this->load->model('login_model');
        $user=$this->login_model->get_user($user_name);

        $this->detectquiz->solve($answers,$subject_id,$user->id);
        redirect(base_url('detect'));
    }
}
