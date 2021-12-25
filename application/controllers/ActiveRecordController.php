<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ActiveRecordController extends CI_Controller {
    public function store_order(){
        $data = [
            'date' => '2018-12-19',
            'customer_name' => 'Joe Thomas',
            'customer_address' => 'US'
        ];

        
        $this->db->insert('orders', $data); 

        echo 'order has successfully been created';
    }
}