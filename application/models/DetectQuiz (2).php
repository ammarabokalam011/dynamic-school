<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 6/25/2019
 * Time: 12:39 PM
 */

class DetectQuiz extends CI_Model{

    public $subjects_id=null;

    public function get_by_id($id){
        $this->db->where('id',$id);
        foreach ($this->db->get('detect_level_quiz')->result() as $item)
            return $item;
    }

    public function get_all($student_id){
        $this->db->where('parent_id',null);
		$subjects=$this->db->get('subject')->result();
        $this->db->where('student_id',$student_id);
        $this->db->where('last_quiz >', date('Y-m-d', strtotime("-1 month")));
        $taken_quizes=$this->db->get('student_level_subject')->result();
        $data['taken_quizes']=array();
        foreach ($subjects as  $key => $subject){
            foreach ($taken_quizes as  $taken_quize) {
                if($subject->id==$taken_quize->subject_id){
                    $sub=$subjects[$key];
                    unset($subjects[$key]);
                    $sub=(object) array_merge((array) $sub, array('level_id' =>$taken_quize->level_id));
                    array_push($data['taken_quizes'],$sub);
                }
            }
        }
        $data['quizes']=$subjects;
        return $data;
    }

    public function convert_subject($data){
        $n=null;
        foreach ($data as $item){
            if(is_array($item)){
                $this->convert_subject($item);
            }else{
                array_push($this->subjects_id,$item->id);
            }
        }
    }
    public function get_all_things($subject_id){
        $this->subjects_id=array();
        $this->load->model('subject');
        $this->convert_subject($this->subject->get_all_childs($subject_id));
        $this->db->where_in('subject_id',$this->subjects_id);
//        $this->db->select( 'id , level_id,subject_id');
        $questions=$this->db->get('question')->result();

        foreach ($questions as $question){
            $question->check=false;
            $this->db->where('question_id',$question->id);
            $choices=$this->db->get('choices')->result();
            $question->choices=$choices;
        }
        shuffle($questions);
        $d['1']=array();
        $d['2']=array();
        $d['3']=array();
        $d['4']=array();
        $d['5']=array();
        $d['6']=array();
        foreach ($questions as $question){
            array_push($d[$question->level_id],$question);
        }
        $data=array();
        $cnt=0;
        $rest=1;

        while($cnt<30 && $rest>0) {
            $rest=0;
            foreach ($d as $arr) {
                if ($cnt == 30) {
                    break;
                }
                foreach ($arr as  $item) {
                    if($item->check==true)
                        continue;
                    $rest++;
                    array_push($data, $item);
                    $item->check=true;
                    $cnt = $cnt + 1;
                    break;
                }
            }
        }
        usort($data, array("DetectQuiz", "comparatorFunc"));
        return $data;
    }

    public function comparatorFunc($x,$y){
        if($x->level_id == $y->level_id )
            return 0;
        if($x->level_id < $y->level_id )
            return -1;
        else
            return 1;
    }

    public function solve($answers,$subject_id,$student_id){
        $res=0;
        foreach ($answers as $answer){
            $this->db->where('id',$answer);
            $choice=$this->db->get('choices')->result();
            foreach ($choice as $item){
            	if($item->mark)
                	$res++;
            }
        }
        $res=$res*100/30;
        $array = array( 'lowest_mark <=' => $res, 'top_mark >=' => $res);
        $this->db->where($array);
        $level_id=null;
        foreach ($this->db->get('level')->result() as $level){
            $level_id=$level->id;
        }
        $data = array(
            'level_id' => $level_id,
            'subject_id'=>$subject_id,
            'student_id'=>$student_id,
			'last_quiz'=>date('Y-m-d'),
			'mark' =>$res
        );
        $this->db->insert('student_level_subject', $data);
    }


    public function insert_quiz($title,$grade,$subject_id){
        $data = array(
            'title' => $title,
            'grade'=>$grade,
            'subject_id'=>$subject_id
        );
        $this->db->insert('detect_level_quiz', $data);
        return $this->db->insert_id();
    }

    public function insert_question($qus,$quiz_id){
        $data = array(
            'quiz_id' => $quiz_id,
            'question_body'=>$qus
        );
        $this->db->insert('question', $data);
        return $this->db->insert_id();
    }

    public function insert_choice($choice,$mark,$ques_id){
        $data = array(
            'choice_body' => $choice,
            'mark'=>$mark,
            'question_id'=>$ques_id
        );
        $this->db->insert('choices', $data);
        return $this->db->insert_id();
    }

}
