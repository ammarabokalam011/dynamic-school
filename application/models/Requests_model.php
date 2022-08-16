<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 6/28/2019
 * Time: 1:20 PM
 */

class Requests_model extends CI_Model
{
    public function get_all_request ($student_id){
        $this->db->where('student_id', $student_id);
        $req= $this->db->get('request_student')->result();

        $res=array();
        foreach ($req as $ui)
        {
            $this->db->where('id', $ui->request_id);
            $req1= $this->db->get('request')->result();

            foreach ($req1 as $item)
                array_push($res,$item);
        }
        return $res;
    }

    public function getby_id($req_id){
        $this->db->where('id', $req_id);
        foreach($this->db->get('request')->result() as $item)
            return $item;
    }

    public function insert_answer($req_id,$answer){
        $this->db->set('answer',$answer);
        $this->db->where('id', $req_id);
        $this->db->update('request');
    }

    public function get_all_unanswered (){
        $this->db->where('answer', '');
        return $this->db->get('request')->result();
    }

    public  function set_request($query,$student_id){
        $data = array(
            'query' => $query,
            'answer' => '',

        );
        $this->db->insert('request', $data);
        $req_id =$this->db->insert_id();
        $data1 = array(
            'request_id'=> $req_id,
            'student_id'=>$student_id,
        );
        $this->db->insert('request_student', $data1);

    }

}