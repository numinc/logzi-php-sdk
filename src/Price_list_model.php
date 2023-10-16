<?php

/**
 * Price_list
 *
 * @link https://www.logzi.com/erp-rendszer/keszletkezeles-2/raktari-bevet-6
 * @author info@numinc.com
**/

namespace Numinc\Logzi;

class Price_list_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'price-list/get', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'price-list/list', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'price-list/save', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}
}


