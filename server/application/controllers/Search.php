<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model('Search_model');
		$content_code = $this->uri->segment(3);
		$way = $this->uri->segment(4);
	}

	/**
	*用于编辑or第一次插入个人信息-系统自动判定情况
	*/
	public function searchdirect($content_code=NULL){

		$content = urldecode($content_code);


		//处理get请求内容
    	$data['school'] = $this->Search_model->search_school($content);
    	$data['real_name'] = $this->Search_model->search_name($content);
    	$data['company'] = $this->Search_model->search_company($content);
    	$data['job'] = $this->Search_model->search_job($content);
    	$data['department'] = $this->Search_model->search_department($content);

		//返回成功与否的一个结果，data保存结果

		$this->json([
      		$data
    	]);
	}

	public function search($content_code=NULL,$way=NULL){

		$content = urldecode($content_code);


		//switch判断具体搜索什么方面的内容
		switch($way){
			case 'school': $data = $this->Search_model->search_school($content);break;
			case 'real_name': $data = $this->Search_model->search_name($content);break;
			case 'company': $data = $this->Search_model->search_company($content);break;
			case 'job': $data = $this->Search_model->search_job($content);break;
			case 'department': $data = $this->Search_model->search_department($content);break;
			default: $data = 'not_right_way';
		}

		//返回成功与否的一个结果，data保存结果

		$this->json([
      		$data
    	]);
	}


}