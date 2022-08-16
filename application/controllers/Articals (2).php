<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 6/26/2019
 * Time: 12:38 PM
 */

class Articals extends CI_Controller {


	public function index(){
		if($this->session->has_userdata('user_name')){
			$this->load->model('Artical');
			$data['articals']=$this->Artical->get_all();
			$this->load->view('show_articals',$data);
		}else
			redirect(base_url('login'));
	}

    public function open($id){
        $this->load->model('Artical');
        $data['id']=$id;
        $data['article']=$this->Artical->getbyid($id);
        $this->load->view('single_article',$data);
    }

	public function get_subjects(){
		$this->load->model('subject');
		$data=$this->subject->get_all();
		$newData=array();
		foreach ($data as $item){
			array_push($newData,array('id'=>$item->id, 'parent'=>$item->parent_id==null?'#':$item->parent_id, 'text'=>$item->name));
		}
		echo json_encode($newData);
	}

	public function search(){
		$levels=$this->input->get('levels');

		$text=$this->input->get('search_word');
		$subjects=$this->input->get('subjects');
		$sort_by=$this->input->get('sort_by');
		$this->load->model('artical');
		echo  json_encode($this->artical->search($levels,$text,$subjects,$sort_by));

	}
}
