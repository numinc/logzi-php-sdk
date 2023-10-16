<?php

/**
 * Cash_stock_move
 *
 * @link https://www.logzi.com/erp-rendszer/penztar-6/penzkeszlet-mozgasok-34
 * @author info@numinc.com
**/

namespace Numinc\Logzi;

class Cash_stock_move_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'cash-stock-move/get', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'cash-stock-move/list', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}
}


