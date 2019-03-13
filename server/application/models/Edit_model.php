<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Edit_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }



    //增加or更新一条个人的基本信息

    public function editbase($openid,$head_url,$real_name,$gender,$descr,$vocation,$city,$birth,$phone,$wechat,$email){ 

        if($openid === NULL){
            return 'error';//出错，直接返回
        }
        else{
            //查询一下当前openid的情况
            $query = $this->db->get_where('PersonalInfor',array('openid'=>$openid));
            if($query->result_array()===[]){
                $this->db->insert('PersonalInfor',array('openid'=>$openid,'head_url'=>$head_url,
                'real_name'=>$real_name,'gender'=>$gender,'descr'=>$descr,'vocation'=>$vocation,'city'=>$city,
                'birth'=>$birth));
                $this->db->insert('Personal',array('openid'=>$openid,'phone'=>$phone,'wechat'=>$wechat,'email'=>$email));
                return 'success_insert_personalinfor';
            }else{
                $this->db->where(array('openid'=>$openid))->update('PersonalInfor',array('openid'=>$openid,
                'head_url'=>$head_url,'real_name'=>$real_name,'gender'=>$gender,'descr'=>$descr,'vocation'=>$vocation,
                'city'=>$city,'birth'=>$birth));
                $this->db->where(array('openid'=>$openid))->update('Personal',array('openid'=>$openid,'phone'=>$phone,
                    'wechat'=>$wechat,'email'=>$email));
                return 'success_renew_personalinfor';
            }

        }
    }

    //增加一条教育经历
    public function addeducation($openid,$school,$background,$department,$profession,$start_year,$end_year){ 

        if($openid === NULL){
            return 'error';//出错，直接返回
        }
        else{
            $this->db->insert('Education',array('openid'=>$openid,'school'=>$school,
            'background'=>$background,'department'=>$department,'profession'=>$profession,'start_year'=>$start_year,
            'end_year'=>$end_year));
            return 'success_insert_education';//插入并返回成功的信息

        }
    }

    //增加一条工作经历
    public function addwork($openid,$company,$job,$start_year,$end_year){

        if($openid === NULL){
            return 'error';//出错，直接返回
        }
        else{
            $this->db->insert('Work',array('openid'=>$openid,'company'=>$company,
            'job'=>$job,'start_year'=>$start_year,'end_year'=>$end_year));
            return 'success_insert_work';//插入并返回成功的信息

        }
    }


}