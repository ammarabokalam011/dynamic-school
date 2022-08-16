<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 8/20/2019
 * Time: 1:40 AM
 */


class user_quiz extends CI_Controller
{

    public function index()
    {

        $data['all_quiz']=$this->get_all_quiz();
        $data['user_id']=$_SESSION['id_user'];
        $data['user_quiz']=$this->get_user_quiz($_SESSION['id_user']);
        $this->load->view('user_quiz',$data);

    }


    public function login_quiz(){
        $id_quiz = $this->input->post('id_quiz');
        $id_user = $this->input->post('id_user');


        $quiz_questions = $this->get_quiz_questions($id_quiz);
        $user_questions_in_quiz = $this->get_user_questions_in_quiz($id_user,$quiz_questions,$id_quiz);

        $result = $this->get_result($id_quiz);

        $data['id_quiz']=$id_quiz;
        $data['id_user']=$id_user;
        $data['user_q']=$user_questions_in_quiz;
        $data['result']=$result;
        $data['quiz_question']=$quiz_questions;


        $this->load->view('quiz_page',$data);

    }

    public function answer_question(){
        $id_question = $this->input->post('id_question');
          $id_quiz = $this->input->post('id_quiz');

        $this->load->model('user_quiz_model');
        $question =$this->user_quiz_model->get_question_by_id($id_question,$id_quiz);

       $data['question']=$question;
       $data['id_quiz']=$id_quiz;
       $data['id_user']=$_SESSION['id_user'];

        $this->load->view('question_page',$data);

    }

    public function answer_answer(){
        $id_question = $this->input->post('id_question');
        $id_quiz = $this->input->post('id_quiz');
        $id_user = $this->input->post('id_user');
        $answer = $this->input->post('answer');

        $this->load->model('user_quiz_model');
        $check =$this->user_quiz_model->check_question_answer($id_question,$id_quiz,$answer);


        $this->load->model('user_quiz_model');
        $quiz =$this->user_quiz_model->get_quiz_by_id_db($id_quiz);

        $datetime2 = strtotime($quiz['start_date_time']);
        $datetime1 = strtotime(date('Y-m-d H:i:s'));

        $secs = $datetime1 - $datetime2;// == <seconds between the two times>
        $minut = $secs / 60;
//        $all_minut =explode('.',$hour);
//        $final_hour = $all_minut[0];
//        $minut = '0.'.$all_minut[1];
//        $final_minut = $minut*60;
//        $final_minut= explode('.',$final_minut);
//        $final_minut = $final_minut[0];


        if($check){
            $this->load->model('user_quiz_model');
            $check =$this->user_quiz_model->add_result($id_question,$id_quiz,$id_user,$minut ,1);
            $this->login_quiz();
        }else{
            $this->load->model('user_quiz_model');
            $check =$this->user_quiz_model->add_result($id_question,$id_quiz,$id_user,$minut ,0);
            $this->login_quiz();
        }



    }



    public function get_user_quiz ($user_id){

        $this->load->model('user_quiz_model');
        $user_quiz =$this->user_quiz_model->get_user_quiz($user_id);

        $all_user_quiz = array();


        if($user_quiz!=null) {
            foreach ($user_quiz->result() as $row) {
                $quiz = $this->get_quiz_by_id($row->id_quiz);

                array_push($all_user_quiz, $quiz);
            }

        }

        return $all_user_quiz;

    }

    public function get_all_quiz (){

        $this->load->model('user_quiz_model');
        $all_quiz =$this->user_quiz_model->get_all_quiz();

        $all_final_quiz =array();

        foreach ($all_quiz->result() as $row) {
            $quiz = array(
                'id' =>$row->id,
                'title'=>$row->title,
                'start_date_time'=>$row->start_date_time,
                'end_date_time'=>$row->end_date_time
            );
            $check= $this->chick_quiz_with_user($quiz['id'],$_SESSION['id_user']);
            if(!$check){
                array_push($all_final_quiz,$quiz);
            }
        }


        return $all_final_quiz;

    }


    public function Participate_competition(){

        $id_quiz = $this->input->post('id_quiz');
        $id_user = $this->input->post('id_user');

        $this->load->model('user_quiz_model');
        $set_quiz =$this->user_quiz_model->Participate_competition_db($id_quiz,$id_user);



        header('Location: ' . $_SERVER['HTTP_REFERER']);


    }

    public function get_quiz_by_id($id_quiz){

        $this->load->model('user_quiz_model');
        $quiz =$this->user_quiz_model->get_quiz_by_id_db($id_quiz);



        return $quiz;

    }

    public function chick_quiz_with_user($id_quiz,$id_user){
        $this->load->model('user_quiz_model');
        $check =$this->user_quiz_model->chick_quiz_with_user_db($id_quiz,$id_user);



        return $check;
    }


    public function get_quiz_questions($id_quiz){
        $this->load->model('user_quiz_model');
        $questions =$this->user_quiz_model->get_quiz_questions($id_quiz);



        return $questions;
    }


    public function get_user_questions_in_quiz($id_user,$quiz_questions,$id_quiz){
        $endq=array();
        foreach ($quiz_questions as $row){
            $chick=$this->chick_question_user_in_quiz($id_user,$row['id'],$id_quiz);
            if(!$chick){
                array_push($endq,$row);
            }
        }
        return $endq;
    }



    public function chick_question_user_in_quiz ($id_user,$id_q,$id_quiz){
        $this->load->model('user_quiz_model');
        $questions =$this->user_quiz_model->chick_question_user_in_quiz($id_user,$id_q,$id_quiz);



        return $questions;
    }


 public function get_result($id_quiz){
      $quiz_question = $this->get_quiz_questions($id_quiz);
     $this->load->model('user_quiz_model');
     $user_in_quiz =$this->user_quiz_model->get_all_user_in_quiz($id_quiz);

     $result=array();


     foreach ($user_in_quiz->result() as $row1) {
         $user = array();
         array_push($user,$row1->id_user);
         foreach ($quiz_question as $row2){
             $this->load->model('user_quiz_model');
             $uresult_user_in_question =$this->user_quiz_model->get_uresult_user_in_question($id_quiz,$row1->id_user,$row2['id']);
             array_push($user,$uresult_user_in_question);
         }

         array_push($result,$user);


     }

     return $result;

 }

}
