<?php

/**
 * Offer_request_model
 *
 * @link https://www.logzi.com/erp-rendszer/ertekesites-3/vevoi-beerkezo-ajanlat-16
 * @link https://www.logzi.com/erp-rendszer/ertekesites-3/vevoi-elkueldoett-ajanlat-17
 * @author info@numinc.com
**/

namespace Numinc\Logzi;

class Offer_request_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'offer-request/get', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'offer-request/list', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'offer-request/save', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'offer-request/delete', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function close($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'offer-request/close', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}
	
	function download($params = array()){
		try {            
			return $this->call('GET', $this->get_api_endpoint().'offer-request/download', $params);	
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save_bulk($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'offer-request/save-bulk', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}
}


