<?php

/**
 * Order_out_confirm
 *
 * @author info@numinc.com
**/

namespace Numinc\Logzi;

class Order_out_confirm_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get_confirm($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'order-out-confirm/get-confirm', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list_confirm($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'order-out-confirm/list-confirm', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list_confirm_full_order($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'order-out-confirm/list-confirm-full-order', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save_confirm($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out-confirm/save-confirm', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function email_confirm($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out-confirm/email-confirm', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}
}
