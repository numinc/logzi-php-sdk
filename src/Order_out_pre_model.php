<?php

/**
 * Order_out_pre
 *
 * @author info@numinc.com
**/

namespace Numinc\Logzi;

class Order_out_pre_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get_pre($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'order-out-pre/get-pre', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list_pre($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'order-out-pre/list-pre', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list_pre_light($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'order-out-pre/list-pre-light', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save_pre($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out-pre/save-pre', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function save_pre_new($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out-pre/save-pre-new', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete_pre($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'order-out-pre/delete-pre', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}
}
