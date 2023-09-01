<?php

/**
 * Transport
 *
 * @link https://www.logzi.com/erp-rendszer/szallitas-4/fuvarszervezes-25
 * @author info@numinc.com
**/

class Transport_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'transport/get', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'transport/list', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'transport/save', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'transport/delete', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function close($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'transport/close', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}
	
	function download($params = array()){
		try {            
			return $this->call('GET', $this->get_api_endpoint().'transport/download', $params);	
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


