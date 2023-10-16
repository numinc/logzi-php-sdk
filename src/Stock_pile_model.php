<?php

/**
 * Stock_pile
 *
 * @link https://www.logzi.com/erp-rendszer/keszletkezeles-2/raktarkeszlet-10
 * @author info@numinc.com
**/

namespace Numinc\Logzi;

class Stock_pile_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'stock-pile/get', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'stock-pile/list', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list_group_all($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'stock-pile/list-group-all', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


