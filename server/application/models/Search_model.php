<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Search_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

    //查找学校
	public function search_school($content){
        if($content === NULL){
            return 'error_no_searchcontent';
        } 
        $query = $this->db->get_where('Education',array('school'=>$content));
        return $query->result_array();
    }

    //查找姓名
    public function search_name($content){
        if($content === NULL){
            return 'error_no_searchcontent';
        } 
        $query = $this->db->get_where('PersonalInfor',array('real_name'=>$content));
        return $query->result_array();
    }

    //查找公司
    public function search_company($content){
        if($content === NULL){
            return 'error_no_searchcontent';
        } 
        $query = $this->db->get_where('Work',array('company'=>$content));
        return $query->result_array();
    }

    //查找岗位
    public function search_job($content){
        if($content === NULL){
            return 'error_no_searchcontent';
        } 
        $query = $this->db->get_where('Work',array('job'=>$content));
        return $query->result_array();
    }

    //查找学院
    public function search_department($content){
        if($content === NULL){
            return 'error_no_searchcontent';
        } 
        $query = $this->db->get_where('Education',array('department'=>$content));
        return $query->result_array();
    }



   
}