<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Edit_model');
		//全部使用post请求
	}


	/**
	*用于编辑or第一次插入个人信息-系统自动判定情况
	*/
	public function editbase($openid=NULL,$head_url=NULL,$real_name=NULL,$gender=NULL,$descr=NULL,$vocation=NULL,$city=NULL,$birth=NULL,$phone=NULL,$wechat=NULL,$email=NULL){

		//处理post请求中的内容

		$openid = $this->input->post('openid');
    	$head_url = $this->input->post('head_url');
    	$real_name = $this->input->post('real_name');
    	$gender = $this->input->post('gender');
    	$descr = $this->input->post('descr');
    	$vocation = $this->input->post('vocation');
    	$city = $this->input->post('city');
    	$birth = $this->input->post('birth');
    	$phone = $this->input->post('phone');
    	$wechat = $this->input->post('wechat');
    	$email = $this->input->post('email');

    	$data = $this->Edit_model->editbase($openid,$head_url,$real_name,$gender,$descr,$vocation,$city,$birth,$phone,$wechat,$email);


		//返回成功与否的一个结果，data保存结果
		$this->json([
      		$data
    	]);
	}

	/**
	*用于增加一条教育经历
	*
	*/
	public function addeducation($openid=NUll,$school=NULL,$background=NULL,$department=NULL,$profession=NULL,$strat_year=NULL,$end_year=NULL){

		//处理post请求中的内容
		$openid = $this->input->post('openid');
    	$school = $this->input->post('school');
    	$background = $this->input->post('background');
    	$department = $this->input->post('department');
    	$profession = $this->input->post('profession');
    	$start_year = $this->input->post('start_year');
    	$end_year = $this->input->post('end_year');

    	$data = $this->Edit_model->addeducation($openid,$school,$background,$department,$profession,$start_year,$end_year);

    	//返回成功与否的一个结果，data保存结果
		$this->json([
      		$data
    	]);

	}

	/**
	*用于增加一条工作经历
	*
	*/
	public function addwork($openid=NUll,$company=NULL,$job=NULL,$strat_year=NULL,$end_year=NULL){

		//处理post请求中的内容
		$openid = $this->input->post('openid');
    	$school = $this->input->post('company');
    	$background = $this->input->post('job');
    	$start_year = $this->input->post('start_year');
    	$end_year = $this->input->post('end_year');

    	$data = $this->Edit_model->addwork($openid,$company,$job,$start_year,$end_year);

    	//返回成功与否的一个结果，data保存结果
		$this->json([
      		$data
    	]);

	}



}