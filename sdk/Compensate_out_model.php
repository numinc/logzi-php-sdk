<?php

/**
 * Compensate_out
 *
 * @link https://www.logzi.com/erp-rendszer/penztar-6/kiegyenlitesek-33
 * @author info@numinc.com
**/

class Compensate_out_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'compensate-out/get', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'compensate-out/list', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'compensate-out/save', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'compensate-out/delete', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


