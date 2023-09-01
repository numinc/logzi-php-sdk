<?php

/**
 * Product_model
 *
 * @link https://www.logzi.com/erp-rendszer/toerzsadatok-1/termekek-2
 * @author info@numinc.com
**/

class Product_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'product/get', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'product/list', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'product/save', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'product/delete', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_group($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'product/get-group', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}
    
    public function get_list_group($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'product/list-group', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

    public function get_list_extended($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'product/list-extended', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_extended($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'product/get-extended', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


