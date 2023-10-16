<?php

/**
 * Store_locality
 *
 * @link https://www.logzi.com/erp-rendszer/keszletkezeles-2/tarhelyek-es-polcok-13
 * @author info@numinc.com
**/

namespace Numinc\Logzi;

class Store_locality_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'store-locality/get', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'store-locality/list', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'store-locality/save', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'store-locality/delete', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


