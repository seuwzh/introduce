<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class MY_URI extends CI_URI {
 
	/**
	 * 自定义的url过滤函数
	 *
	 * @access	private
	 * @param	string
	 * @return	string
	 */
    function _filter_uri($str)
    {
        if ($str != '' AND $this->config->item('permitted_uri_chars') != '')
        {
            $str = urlencode($str);
            if ( ! preg_match("|^[".preg_quote($this->config->item('permitted_uri_chars'))."]+$|i", $str))
            {
                exit('The URI you submitted has disallowed characters.');
            }
            $str = urldecode($str);
        }
        return $str;
    }  
}