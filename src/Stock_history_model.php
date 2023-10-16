<?php

/**
 * Stock_history
 *
 * @link https://www.logzi.com/erp-rendszer/keszletkezeles-2/keszlet-toertenet-11
 * @author info@numinc.com
**/

namespace Numinc\Logzi;

class Stock_history_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'stock-history/get', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'stock-history/list', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list_full($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'stock-history/list-full', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


