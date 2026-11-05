<?php

/**
 * Order_out_running
 *
 * @author info@numinc.com
**/

namespace Numinc\Logzi;

class Order_out_running_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get_running($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'order-out-running/get-running', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list_running($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'order-out-running/get-list-running', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save_running($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out-running/save-running', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}
}
