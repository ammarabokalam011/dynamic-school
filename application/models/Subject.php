<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 6/26/2019
 * Time: 12:43 PM
 */

class Subject extends CI_Model {
    public function get_all(){
        $data=$this->db->get('subject')->result();
        return $data;
    }

    public function get_level($subject_id,$user_id){
        $this->db->where('subject_id', $subject_id);
        $this->db->where('student_id', $user_id);
        foreach ($this->db->get('student_level_subject')->result() as $value){
            return $value->level_id;
        }
    }
}
