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

    public function search($levels,$text,$subjects,$sort_by){
    	$res=array();
//    	print_r($levels);
    	if($subjects!=null)
			if(count($subjects)>0)
				$this->db->where_in('subject_id', $subjects);
    	if($levels!=null)
			if(count($levels)>0)
				$this->db->where_in('level_id', $levels);

		$ids=array();
		foreach($this->db->get('article_level_subject')->result() as $value){
			array_push($ids,$value->article_id);
		}
//		echo $this->db->last_query();
		$this->db->where("(title LIKE '%".$text."%' OR content LIKE '%".$text."%' OR teacher_name LIKE '%".$text."%')", NULL, FALSE);
		if($ids!=null)
			if(count($ids)>0)
				$this->db->where_in('id', $ids);
			else{
				return array();
			}
		else return array();
		switch ($sort_by){
			case "id":
				$this->db->order_by('id', 'DESC');
				break;
			case "date":
				$this->db->order_by('date', 'DESC');
				break;
			case "visits":
				$this->db->order_by('number_of_visits', 'DESC');
				break;
			case "teacher":
				$this->db->order_by('teacher_name', 'ASC');
				break;
			case "title":
				$this->db->order_by('title', 'ASC');
				break;
			default:

		}
		$this->db->select('title, id, date,teacher_name,number_of_visits');

		foreach ( $this->db->get('article')->result() as $artical) {
			array_push($res,$artical);
		}

//		echo $this->db->last_query();
		return $res;
	}

}
