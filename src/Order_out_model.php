<?php

/**
 * Order_out
 *
 * @link https://www.logzi.com/erp-rendszer/beszerzes-5/szallitoi-rendelesek-27
 * @author info@numinc.com
**/

namespace Numinc\Logzi;

class Order_out_model extends Base_api_model {

    public function __construct($config = array()) {
		$this->set_api_key($config["api_key"]);
    }

	public function get($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'order-out/get', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'order-out/list', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_pre($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'order-out/get-pre', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_confirm($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'order-out/get-confirm', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list_pre($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'order-out/list-pre', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list_pending($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'order-out/list-pending', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list_confirm($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'order-out/list-confirm', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_list_confirm_full_order($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'order-out/list-confirm-full-order', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_item_list($params = array()){
        try {            
            return $this->call('GET', $this->get_api_endpoint().'order-out/item-list', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	public function get_group_product($params = array()){
        try {
            return $this->call('GET', $this->get_api_endpoint().'order-out/get-group-product', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out/save', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'order-out/delete', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function close($params = array()){
		try {            
            return $this->call('POST', $this->get_api_endpoint().'order-out/close', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}
	
	function download($params = array()){
		try {            
			return $this->call('GET', $this->get_api_endpoint().'order-out/download', $params);	
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;  
	}

	function save_pre($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out/save-pre', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function save_pre_new($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out/save-pre-new', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function delete_pre($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out/delete-pre', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function save_confirm($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out/save-confirm', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function send_order_cloud($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out/send-order-cloud', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function email_confirm($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out/email-confirm', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function success($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out/success', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function success_item($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out/success-item', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}

	function storage_open($params = array()){
        try {
            return $this->call('POST', $this->get_api_endpoint().'order-out/storage-open', $params);
        } catch(\Exception $ex) {  
        }  
          
        return FALSE;
	}
}
