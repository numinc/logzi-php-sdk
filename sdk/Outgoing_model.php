<?php

/**
 * Outgoing
 *
 * @link https://www.logzi.com/erp-rendszer/keszletkezeles-2/raktari-kiadas-7
 * @author info@numinc.com
**/

class Outgoing_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'outgoing/get', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'outgoing/list', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'outgoing/save', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'outgoing/delete', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function close($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'booking/close', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}
	
	function download($params = array()){
		try {            
			return $this->call('GET', $this->get_api_endpoint().'outgoing/download', $params);	
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


