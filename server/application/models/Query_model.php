<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Query_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

    //openid最最基本的信息
	public function get_base($openid){
        if($openid === NULL){
            return 'error_no_openid';
        } 
        $query = $this->db->get_where('PersonalInfor',array('openid'=>$openid));
        return $query->result_array();
    }

    //openid的教育信息
    public function get_education($openid){
        if($openid === NULL){
            return 'error_no_openid';
        } 
        $query = $this->db->get_where('Education',array('openid'=>$openid));
        return $query->result_array();
    }

    //openid的工作信息
    public function get_work($openid){
        if($openid === NULL){
            return 'error_no_openid';
        } 
        $query = $this->db->get_where('Work',array('openid'=>$openid));
        return $query->result_array();
    }

    //openid的个人隐私信息
    public function get_personal($openid){
        if($openid === NULL){
            return 'error_no_openid';
        } 
        $query = $this->db->get_where('Personal',array('openid'=>$openid));
        return $query->result_array();
    }

    //openid的朋友信息
    public function get_friend($openid){
        if($openid === NULL){
            return 'error_no_openid';
        } 
        $query = $this->db->get_where('Friend',array('openid'=>$openid));
        return $query->result_array();
    }
}