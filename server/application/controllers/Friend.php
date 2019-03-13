<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Friend extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Friend_model');
		$this->load->helper('url_helper');
		//get请求，第一个参数，openid
		$openid = $this->uri->segment(3);
		$friendid = $this->uri->segment(4);
	}

	/**
	*基于openid获得个人的全部名片信息并关联查询（调试用）
	* state = 0（陌生人，冗余结构）
	* state = 1（朋友）
	* state = 2（好友请求中）
	* state = 3（请求好友中）
	* state = 4 (拒绝好友申请)
	* state = 5（同意好友申请）
	*/
	public function getallfriend($openid=NULL){
		
		$data['Friend'] = $this->Friend_model->get_friend($openid);
		$data['Inviting'] = $this->Friend_model->get_inviting($openid);
		$data['Invited'] = $this->Friend_model->get_invited($openid);

		//getall函数的返回类型
		$this->json([
      		$data
    	]);
	}

	/**
	*基于openid获得朋友信息
	* state = 1
	*/
	public function getfriend($openid=NULL){
		
		$data['Friend'] = $this->Friend_model->get_friend($openid);

		//getall函数的返回类型
		$this->json([
      		$data
    	]);
	}

	/**
	*基于openid获得通知信息
	* state = 4,5
	*/
	public function getinform($openid=NULL){
		
		$data['Refused'] = $this->Friend_model->get_refused($openid);
		$data['Agreed'] = $this->Friend_model->get_agreed($openid);
		$data['Invited'] = $this->Friend_model->get_invited($openid);

		//getall函数的返回类型
		$this->json([
      		$data
    	]);
	}

	/**
	*申请加为好友
	*/
	public function invite($openid=NULL,$friendid=NULL){
		
		$data = $this->Friend_model->invite($openid,$friendid);

		//getall函数的返回类型
		$this->json([
      		$data
    	]);
	}


}