<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Query extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Query_model');
		$this->load->helper('url_helper');
		//get请求，第一个参数，openid
		$openid = $this->uri->segment(3);
	}

	/**
	*基于openid获得个人的全部信息
	*高危
	*仅用于测试
	*/
	public function getall($openid=NULL){
		$data['Base'] = $this->Query_model->get_base($openid);
		$data['Education'] = $this->Query_model->get_education($openid);
		$data['Work'] = $this->Query_model->get_work($openid);
		$data['Personal'] = $this->Query_model->get_personal($openid);
		$data['Friend'] = $this->Query_model->get_friend($openid);

		//getall函数的返回类型
		$this->json([
      		$data
    	]);
	}

	/**
	*查询指定openid的教育经历
	*
	*/
	public function geteduation($openid=NULL){
		$data = $this->Query_model->get_education($openid);

		//getall函数的返回类型
		$this->json([
      		$data
    	]);
	}

	/**
	*查询指定openid的工作经历
	*
	*/
	public function getwork($openid=NULL){
		$data = $this->Query_model->get_work($openid);

		//getall函数的返回类型
		$this->json([
      		$data
    	]);
	}

}