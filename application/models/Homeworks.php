<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 6/28/2019
 * Time: 11:28 AM
 */

class Homeworks extends CI_Model{

    public function get_answer($student_id,$homework_id){
        $this->db->where('student_id', $student_id);
        $this->db->where('homework_id', $homework_id);
        $homeworks=$this->db->get('student_homework')->result();
        foreach ($homeworks as $homework)
            return $homework->answer;
    }

    public function open_by_id($homework_id){
        $this->db->where('id', $homework_id);
        $homeworks=$this->db->get('homework')->result();
        foreach ($homeworks as $homework)
            return $homework;
    }

    public function get($user_id,$subject_id,$level_id,$grade){
        $res=array();
        $this->db->where('student_id', $user_id);
        $did_homeworks=$this->db->get('student_homework')->result();
        $this->db->where('subject_id', $subject_id);
        $this->db->where('level_id', $level_id);
        $this->db->where('grade', $grade);
        foreach($this->db->get('homework_level_subject')->result() as $value){
            $id=$value->homework_id;
            $this->db->where('id', $id);
            foreach ( $this->db->get('homework')->result() as $artical) {

                array_push($res,$artical);
            }
        }
        foreach ($did_homeworks as $did_homework){
            foreach ($res as $re){
                if($did_homework->homework_id==$re->id){
                    foreach (array_keys($res, $re) as $key) {
                        unset($res[$key]);
                    }
                }
            }
        }
        return $res;

    }

    public function insert_homework($question,$level,$subject,$grade,$answer){
        $data = array(
            'content' => $question,
            'answer' =>$answer
        );
        $this->db->insert('homework', $data);
        $homework_id=$this->db->insert_id();
        $data = array(
            'homework_id' => $homework_id,
            'level_id'=>$level,
            'subject_id'=>$subject,
            'grade'=>$grade
        );
        $this->db->insert('homework_level_subject', $data);
    }


    public function insert_answer($homework_id,$answer,$student_id){
        $data = array(
            'homework_id' => $homework_id,
            'answer'=>$answer,
            'student_id'=>$student_id
        );
        $this->db->insert('student_homework', $data);
    }

}