<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Friend_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function get_all_friend($openid){
        if($openid === NULL){
            return 'error_no_openid';
        } 
        $query = $this->db->from('Friend',array('openid'=>$openid))->join('PersonalInfor','Friend.friendid=PersonalInfor.openid')->get();
        return $query->result_array();
    }

    public function get_friend($openid){
        if($openid === NULL){
            return 'error_no_openid';
        } 

        $query = $this->db
        ->from('Friend')
        ->where(array('Friend.openid'=>$openid,'state'=>'1'))
        ->join('PersonalInfor','Friend.friendid=PersonalInfor.openid')
        ->join('Personal','Friend.friendid=Personal.openid')
        ->get();
        return $query->result_array();
    }

    public function get_inviting($openid){
        if($openid === NULL){
            return 'error_no_openid';
        } 

        $query = $this->db
        ->from('Friend')
        ->where(array('Friend.openid'=>$openid,'state'=>'2'))
        ->join('PersonalInfor','Friend.friendid=PersonalInfor.openid')
        ->get();
        return $query->result_array();
    }

    public function get_invited($openid){
        if($openid === NULL){
            return 'error_no_openid';
        } 

        $query = $this->db
        ->from('Friend')
        ->where(array('Friend.openid'=>$openid,'state'=>'3'))
        ->join('PersonalInfor','Friend.friendid=PersonalInfor.openid')
        ->get();
        return $query->result_array();
    }

    public function get_refused($openid){
        if($openid === NULL){
            return 'error_no_openid';
        } 

        $query = $this->db
        ->from('Friend')
        ->where(array('Friend.openid'=>$openid,'state'=>'4'))
        ->join('PersonalInfor','Friend.friendid=PersonalInfor.openid')
        ->get();
        return $query->result_array();
    }

    public function get_agreed($openid){
        if($openid === NULL){
            return 'error_no_openid';
        } 

        $query = $this->db
        ->from('Friend')
        ->where(array('Friend.openid'=>$openid,'state'=>'5'))
        ->join('PersonalInfor','Friend.friendid=PersonalInfor.openid')
        ->get();
        return $query->result_array();
    }

    public function invite($openid,$friendid){
        if($openid === NULL){
            return 'error_no_openid';
        } 

        $this->db->insert('Friend',array('openid'=>$openid,'friendid'=>$friendid,'state'=>'2'));
        $this->db->insert('Friend',array('openid'=>$friendid,'friendid'=>$openid,'state'=>'3'));

        return 'success_invite';
    }


}