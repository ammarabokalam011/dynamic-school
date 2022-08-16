<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 8/20/2019
 * Time: 1:47 AM
 */
class user_quiz_model extends  CI_Model
{


    public function get_all_quiz (){

//        $this->db->where('email', $email);
        $query = $this->db->get('quiz');

        if($query->num_rows() > 0) {

          return $query;
        }

    }


    public function Participate_competition_db($id_quiz,$id_user){
        $data = array(


            'id_user' => $id_user ,
            'id_quiz' => $id_quiz ,

        );

        $this->db->insert('user_register_quiz', $data);


    }



    public function get_user_quiz($id_user){
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('user_register_quiz');

        if($query->num_rows() > 0) {

            return $query;
        }
    }


    public function get_quiz_by_id_db($id_quiz){
        $this->db->where('id', $id_quiz);
        $query = $this->db->get('quiz');

        if($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $quiz = array(
                    'id' =>$row->id,
                    'title'=>$row->title,
                    'start_date_time'=>$row->start_date_time,
                    'end_date_time'=>$row->end_date_time
                 );
                return $quiz;
            }
        }
    }

    public function chick_quiz_with_user_db($id_quiz,$id_user){
        $this->db->where('id_user', $id_user);
        $this->db->where('id_quiz', $id_quiz);
        $query = $this->db->get('user_register_quiz');

        if($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    public function get_quiz_questions($id_quiz){
        $this->db->where('id_quiz', $id_quiz);
        $query = $this->db->get('questions_in_quiz');

        $questions=array();

        if($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $quiz = array(
                    'id' =>$row->id,
                    'text_questions'=>$row->text_questions,
                    'answer1'=>$row->answer1,
                    'answer2'=>$row->answer2,
                    'answer3'=>$row->answer3,
                    'answer4'=>$row->answer4,
                    'true_answer'=>$row->true_answer,
                );
                array_push($questions,$quiz);
            }

            return $questions;
        }

    }

    public function chick_question_user_in_quiz($id_user,$id_q,$id_quiz){

        $this->db->where('id_user', $id_user);
        $this->db->where('id_question', $id_q);
        $this->db->where('id_quiz', $id_quiz);
        $query = $this->db->get('user_in_quiz');



        if($query->num_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }


    public function get_question_by_id($id_question,$id_quiz){
        $this->db->where('id_quiz', $id_quiz);
        $this->db->where('id', $id_question);
        $query = $this->db->get('questions_in_quiz');

        if($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $question = array(
                    'id' =>$row->id,
                    'text_questions'=>$row->text_questions,
                    'answer1'=>$row->answer1,
                    'answer2'=>$row->answer2,
                    'answer3'=>$row->answer3,
                    'answer4'=>$row->answer4,
                    'true_answer'=>$row->true_answer,
                );
               return $question;
            }


        }
    }



    public function check_question_answer($id_question,$id_quiz,$answer){
        $this->db->where('id_quiz', $id_quiz);
        $this->db->where('id', $id_question);
        $query = $this->db->get('questions_in_quiz');
        if($query!=null){
            if($query->num_rows() > 0) {
                foreach ($query->result() as $row) {


                   if($row->true_answer==$answer){
                       return true;
                   }else{
                       return false;
                   }
                }
            }
        }
    }



    public function add_result($id_question,$id_quiz,$id_user,$time ,$answer){

        $data = array(


            'id_user' => $id_user ,
            'id_quiz' => $id_quiz ,
            'id_question'=>$id_question,
            'time_answer'=>$time,
            'true'=>$answer

        );

        $this->db->insert('user_in_quiz', $data);
    }

    public function get_all_user_in_quiz($id_quiz){
        $this->db->where('id_quiz', $id_quiz);
        $query = $this->db->get('user_register_quiz');

        return $query;
    }

public function get_uresult_user_in_question($id_quiz,$id_user,$id_question){
    $this->db->where('id_user', $id_user);
    $this->db->where('id_question', $id_question);
    $this->db->where('id_quiz', $id_quiz);
    $query = $this->db->get('user_in_quiz');

    if($query->num_rows() > 0) {
       foreach ($query->result() as $row){
           if($row->true==1){
               return '<span   class="m-badge m-badge--brand m-badge--accent">Correct answer in : '.$row->time_answer.'</span>';
           }else{
               return '<span   class="m-badge m-badge--brand m-badge--danger">Wrong answer in : '.$row->time_answer.'</span>';
           }
       }
    }else{
        return '<span class="m-badge m-badge--brand m-badge--wide">No answer</span>';
    }
}


}