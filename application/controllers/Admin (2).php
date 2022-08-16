<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        if($this->session->userdata('admin_name')!='ammar'||$this->session->userdata('admin_password')!='0000'){
            $this->session->set_userdata('admin_name', $this->input->post('user_name'));
            $this->session->set_userdata('admin_password', $this->input->post('password'));
            if($this->session->userdata('admin_name')!='ammar'||$this->session->userdata('admin_password')!='0000')
                $this->load->view('admin_login');
        }
		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example',(array)$output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

    public function article ()
    {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('article');
            $crud->set_subject('article');
            $output = $crud->render();
            $this->_example_output($output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    public function article_level_subject  ()
    {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('article_level_subject');
            $crud->set_subject('article level subject');
            $output = $crud->render();
            $this->_example_output($output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    public function choices  ()
    {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('choices');
            $crud->set_subject('choices');
            $output = $crud->render();
            $this->_example_output($output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
	public function location ()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('location');
			$crud->set_subject('location');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function quiz ()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('quiz');
			$crud->set_subject('quiz');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function questions_in_quiz ()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('questions_in_quiz');
			$crud->set_subject('questions_in_quiz');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
    public function homework  ()
    {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('homework');
            $crud->set_subject('homework');
            $output = $crud->render();
            $this->_example_output($output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    public function homework_level_subject ()
    {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('homework_level_subject');
            $crud->set_subject('homework level subject');
            $output = $crud->render();
            $this->_example_output($output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    public function level  ()
    {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('level');
            $crud->set_subject('level');
            $output = $crud->render();
            $this->_example_output($output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    public function question  ()
    {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('question');
            $crud->set_subject('question');
            $output = $crud->render();
            $this->_example_output($output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    public function request  ()
    {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('request');
            $crud->set_subject('request');
            $output = $crud->render();
            $this->_example_output($output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    public function request_student  ()
    {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('request_student');
            $crud->set_subject('request student');
            $output = $crud->render();
            $this->_example_output($output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    public function student  ()
    {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('student');
            $crud->set_subject('student');
            $output = $crud->render();
            $this->_example_output($output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    public function request_teacher  ()
    {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('request_teacher');
            $crud->set_subject('request teacher');
            $output = $crud->render();
            $this->_example_output($output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
	public function user_register_quiz(){
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('user_register_quiz');
			$crud->set_subject('user register quiz');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	public function user_in_quiz(){
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('user_in_quiz');
			$crud->set_subject('user_in_quiz');
			$output = $crud->render();
			$this->_example_output($output);
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

    public function student_homework ()
    {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('student_homework');
            $crud->set_subject('student homework');
            $output = $crud->render();
            $this->_example_output($output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    public function student_level_subject  ()
    {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('student_level_subject');
            $crud->set_subject('student level subject');
            $output = $crud->render();
            $this->_example_output($output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    public function subject  ()
    {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('subject');
            $crud->set_subject('subject');
            $output = $crud->render();
            $this->_example_output($output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    public function teacher   ()
    {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('teacher');
            $crud->set_subject('teacher');
            $output = $crud->render();
            $this->_example_output($output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }

}
