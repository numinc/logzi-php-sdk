<?php

/**
 * Compensate_in
 *
 * @link https://www.logzi.com/erp-rendszer/penztar-6/kiegyenlitesek-33
 * @author info@numinc.com
**/

class Compensate_in_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'compensate-in/get', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'compensate-in/list', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'compensate-in/save', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'compensate-in/delete', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


