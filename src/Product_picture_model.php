<?php

namespace Numinc\Logzi;

class Product_picture_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'product-picture/get', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'product-picture/list', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'product-picture/save', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'product-picture/delete', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function picture($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'product-picture/picture', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


