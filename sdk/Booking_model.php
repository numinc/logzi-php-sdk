<?php

/**
 * Booking
 *
 * @link https://www.logzi.com/help-center/dokumentacio/keszletkezeles-2/raktari-bevet-6
 * @author info@numinc.com
**/

class Booking_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            $object = new stdClass();
			
			if($params != NULL && isset($params['id']) && $params['id'] > 0){
				$object = $this->call('GET', $this->get_api_endpoint().'booking/get', $params);
			}

            return $object;
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'booking/list', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'booking/save', $params);
        } catch(Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'booking/delete', $params);
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
			return $this->call('GET', $this->get_api_endpoint().'booking/download', $params);	
        } catch(Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


