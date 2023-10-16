<?php

/**
 * Product_feed
 *
 * @link https://www.logzi.com/erp-rendszer/beallitasok-8/termek-feed-43
 * @author info@numinc.com
**/

namespace Numinc\Logzi;

class Product_feed_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'product-feed/get', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'product-feed/list', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'product-feed/save', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function save_bulk($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'product-feed/save-bulk', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'product-feed/delete', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function import($params = array()){
		try {            
            return $this->call('GET', $this->get_api_endpoint().'product-feed/import', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


