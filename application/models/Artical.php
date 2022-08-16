<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 6/17/2019
 * Time: 10:48 AM
 */

class Artical extends CI_Model{

    public function insert_artical($artical,$level,$subject,$grade,$title,$teacher){
        $data = array(
            'content' => $artical,
            'date' => date("Y/m/d"),
            'title' => $title,
            'teacher_name' =>$teacher
        );
        $this->db->insert('article', $data);
        $artical_id=$this->db->insert_id();
        $data = array(
            'article_id' => $artical_id,
            'level_id'=>$level,
            'subject_id'=>$subject,
            'grade'=>$grade
        );
        $this->db->insert('article_level_subject', $data);
    }

    public function get_all(){
        $data=$this->db->get('article')->result();
        return $data;
    }
    public function getbyid($id){
        $this->db->where('id', $id);
        $data=$this->db->get('article')->result();
        return $data;
    }

    public function get($subject_id,$level_id,$grade){
        $res=array();
        $this->db->where('subject_id', $subject_id);
        $this->db->where('level_id', $level_id);
        $this->db->where('grade', $grade);
        foreach($this->db->get('article_level_subject')->result() as $value){
            $id=$value->article_id;
            $this->db->where('id', $id);
            foreach ( $this->db->get('article')->result() as $artical) {
                array_push($res,$artical);
            }
        }
        return $res;
    }
}