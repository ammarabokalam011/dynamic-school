<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function index()
    {
        $this->load->view('main');
    }

    public function blog()
    {
        $this->load->view('blog');
    }

    public function contact()
    {
        $this->load->view('contact');
    }

    public function course_details()
    {
        $this->load->view('course_details');
    }

    public function courses()
    {
        $this->load->view('courses');
    }

    public function elements()
    {
        $this->load->view('elements');
    }

    public function single_blog()
    {
        $this->load->view('single_blog');
    }

    public function about_us()
    {
        $this->load->view('single_blog');
    }

    public function upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = "gif|jpg|jpeg|png|iso|dmg|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|avi|mpeg|mp3|mp4|3gp";
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $config['max_size'] = 0;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);
        if($this->upload->do_upload('upload'))
        {
            $data =$this->upload->data();
            echo '
            {
                "uploaded": 1,
                "fileName": "'.$data['file_name'].'",
                "url": "'.base_url().'/uploads/'.$data['file_name'].'"
            }';
//            print_r($data);
//            $this->load->view('upload_success',$data);
        }
        else
        {
            $error = array('error' => $this->upload->display_errors());
//            $this->load->view('custom_view', $error);
            print_r($error);
        }
    }

}
