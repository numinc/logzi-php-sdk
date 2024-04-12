<?php

/**
 * Product_model
 *
 * @link https://www.logzi.com/erp-rendszer/toerzsadatok-1/termekek-2
 * @author info@numinc.com
**/

namespace Numinc\Logzi;

class Product_barcode_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'product-barcode/get', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'product-barcode/list', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'product-barcode/save', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'product-barcode/delete', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


