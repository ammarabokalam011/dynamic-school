<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 6/28/2019
 * Time: 11:26 AM
 */

class Homework extends CI_Controller{

    public function index(){
        if($this->session->has_userdata('user_name')){
            $this->load->model('subject');
            $data['subjects']=$this->subject->get_all();
            $this->load->view('subject_homework',$data);
        }else
            redirect(base_url('login'));
    }

    public function open_homeworks($subject_id){
        $user_name=$this->session->userdata('user_name');
        $this->load->model('login_model');
        $user=$this->login_model->get_user($user_name);
        if($user!=null){
            $user_id=$user->id;
            $this->load->model('subject');
            $this->load->model('homeworks');
            $level_id=$this->subject->get_level($subject_id,$user_id);
            $data['homeworks']=$this->homeworks->get($user_id,$subject_id,$level_id,$user->grade);
//            print_r($data);
            $this->load->view('show_homeworks',$data);
        }else{
            redirect(base_url('login'));
        }
    }

    public function open_by_id($homework_id){
        $this->load->model('homeworks');
        $data['homework']=$this->homeworks->open_by_id($homework_id);
        $this->load->view('show_homework',$data);
    }

    public function insert_answer(){
        $this->load->model('homeworks');
        $user_name=$this->session->userdata('user_name');
        $this->load->model('login_model');
        $user=$this->login_model->get_user($user_name);
        if($user!=null){
            $user_id=$user->id;
            $homework_id=$this->input->post('homework_id');
            $answer=$this->input->post('question_body');
            $this->homeworks->insert_answer($homework_id,$answer,$user_id);
            $data['answer']=$answer;
            $data['homework']=$this->homeworks->open_by_id($homework_id);
            redirect( base_url('homework/show_answer/').$user_id.'/'.$homework_id);
        }else
            redirect(base_url('login'));
    }

    public function show_answer($student_id,$homework_id){
        $this->load->model('homeworks');

        $data['answer']=$this->homeworks->get_answer($student_id,$homework_id);
        $data['homework']=$this->homeworks->open_by_id($homework_id);
        $this->load->view('homework_correction',$data);
    }
}