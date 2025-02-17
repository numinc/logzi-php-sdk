<?php

/**
 * Product_category_cr_model
 *
 * @link https://www.logzi.com/erp-rendszer/toerzsadatok-1/termekek-2
 * @author info@numinc.com
**/

namespace Numinc\Logzi;

class Product_category_cr_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'product-category-cr/get', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'product-category-cr/list', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'product-category-cr/save', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'product-category-cr/delete', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


