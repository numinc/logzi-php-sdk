<?php

/**
 * Cash
 *
 * @link https://www.logzi.com/erp-rendszer/penztar-6/penztarbizonylat-30
 * @author info@numinc.com
**/

class Cash_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'cash/get', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'cash/list', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'cash/save', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'cash/delete', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function close($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'cash/close', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}
	
	function download($params = array()){
		try {            
			return $this->call('GET', $this->get_api_endpoint().'cash/download', $params);	
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


