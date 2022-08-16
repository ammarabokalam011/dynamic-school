<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 6/28/2019
 * Time: 1:36 PM
 */

class Requests extends CI_Controller
{

    public function index(){



        $user_name=$this->session->userdata('user_name');
        $this->load->model('login_model');
        $user=$this->login_model->get_user($user_name);
        if($user!=null) {
            $user_id = $user->id;

        }



        /////////////////////////////////

        $this->load->model('Requests_model');
        $all_req=$this->Requests_model->get_all_request($user_id);
        $data['all_req']=$all_req;



            $this->load->view('Requests_view',$data);

    }


    public function set_requast(){

        $query = $_POST['query'];

        $user_name=$this->session->userdata('user_name');
        $this->load->model('login_model');
        $user=$this->login_model->get_user($user_name);
        if($user!=null) {
            $user_id = $user->id;

        }

        $this->load->model('Requests_model');
        $this->Requests_model->set_request($query,$user_id);

        redirect(base_url('Requests'));
    }

}