<?php

/**
 * Order_out_pending
 *
 * @author info@numinc.com
**/

namespace Numinc\Logzi;

class Order_out_pending_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get_list_pending($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'order-out-pending/list-pending', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function success($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out-pending/success', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function success_item($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out-pending/success-item', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete_item($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'order-out-pending/delete-item', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}
}
