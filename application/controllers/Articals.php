<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 6/26/2019
 * Time: 12:38 PM
 */

class Articals extends CI_Controller {

    public function index(){
        if($this->session->has_userdata('user_name')){
            $this->load->model('subject');
            $data['subjects']=$this->subject->get_all();
            $this->load->view('include/artical_search',$data);
        }else
            redirect(base_url('login'));
    }

    public function open_articals($subject_id){
        $user_name=$this->session->userdata('user_name');
        $this->load->model('login_model');
        $user=$this->login_model->get_user($user_name);
        if($user!=null){
            $user_id=$user->id;
            $this->load->model('subject');
            $this->load->model('artical');
            $level_id=$this->subject->get_level($subject_id,$user_id);
            $data['articals']=$this->artical->get($subject_id,$level_id,$user->grade);
            $this->load->view('show_articals',$data);
        }else{
            redirect(base_url('login'));
        }
    }

    public function open($id){
        $this->load->model('Artical');
        $data['id']=$id;
        $data['article']=$this->Artical->getbyid($id);
        $this->load->view('single_article',$data);
    }

    public function get_subjects(){
        $this->load->model('subject');
        $data=$this->subject->get_all();
        $newData=array();
        foreach ($data as $item){
            array_push($newData,array('id'=>$item->id, 'parent'=>$item->parent_id==null?'#':$item->parent_id, 'text'=>$item->name));
        }
        echo json_encode($newData);
    }
}