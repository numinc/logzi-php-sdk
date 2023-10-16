<?php

/**
 * Payment_demand
 *
 * @link https://www.logzi.com/erp-rendszer/penztar-6/fizetesi-felszolitas-32
 * @author info@numinc.com
**/

namespace Numinc\Logzi;

class Payment_demand_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'payment-demand/get', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'payment-demand/list', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'payment-demand/save', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'payment-demand/delete', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function close($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'payment-demand/close', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}
	
	function download($params = array()){
		try {            
			return $this->call('GET', $this->get_api_endpoint().'payment-demand/download', $params);	
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


