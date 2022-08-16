<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 6/13/2019
 * Time: 1:17 PM
 */

class Login extends CI_Controller{

    public function index()
    {
        $this->load->view('login');
    }

    function validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_name', 'Email Address', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run())
        {
            $this->load->model('login_model');
            $result = $this->login_model->can_login($this->input->post('user_name'), $this->input->post('password'));
            if($result == true)
            {
                $this->session->set_userdata('user_name', $this->input->post('user_name'));
                redirect(base_url());
            }
            else
            {
                redirect('login');
            }
        }
        else
        {
            $this->index();
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}