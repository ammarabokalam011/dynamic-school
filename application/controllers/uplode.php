<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 6/17/2019
 * Time: 10:31 AM
 */

class uplode extends CI_Controller{

    public function index(){
        $this->load->view('teacher_view');
    }

    public function artical(){
        $this->load->view('admin_insert_artical');
    }

    public function homework(){
        $this->load->view('admin_insert_homework');
    }

    public function detect_question(){
        $this->load->view('admin_insert_question');
    }

    public function insert_question(){
        $question_body=$this->input->post('question_body');
        $grade=$this->input->post('grade');
        $subject=$this->input->post('subject');
        $level=$this->input->post('level');
        $choices=$this->input->post('choice');
        $marks=$this->input->post('mark');
        $this->load->model('DetectQuiz');
        $this->DetectQuiz->insert_question($question_body,$grade,$subject,$level,$choices,$marks);
        redirect(base_url('/uplode/detect_question/'));
    }

    public function insert_artical(){
        $artical=$this->input->post('artical');
        $level=$this->input->post('level');
        $subject=$this->input->post('subject');
        $grade=$this->input->post('grade');
        $title=$this->input->post('title');
        $teacher=$this->input->post('teacher');
        $this->load->model('artical');
        $this->artical->insert_artical($artical,$level,$subject,$grade,$title,$teacher);
        redirect(base_url('uplode/artical/'));
    }

    public function insert_homework(){
        $question=$this->input->post('question_body');
        $level=$this->input->post('level');
        $subject=$this->input->post('subject');
        $grade=$this->input->post('grade');

        $answer=$this->input->post('answer');
        $this->load->model('homeworks');
        $this->homeworks->insert_homework($question,$level,$subject,$grade,$answer);
        redirect( base_url('uplode/homework'));
    }

}