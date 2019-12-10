<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dynamic_dependent_model extends CI_Model {

	function fetch_country()
	{
		$this->db->order_by('PROVINCE_NAME' , 'ASC');
		$query = $this->db->get('provinces');
		return $query->result();
	}

	function fetch_state($PROVINCE_ID)
	{
		$this->db->where('PROVINCE_ID', $PROVINCE_ID);
		$this->db->order_by('AMPHUR_NAME', 'desc');
		$query = $this->db->get('amphures');
		$output = ' <option value="">--- กรุณาเลือกอำเภอ ---</option>';
		foreach ($query->result() as $row) 
		{
			$output .= ' <option value="'.$row->AMPHUR_ID.'">'.$row->AMPHUR_NAME.'</option> ';
		}
		return $output;
	}

	function fetch_city($AMPHUR_ID)
	{
		$this->db->where('AMPHUR_ID', $AMPHUR_ID);
		$this->db->order_by('DISTRICT_NAME', 'ASC');
		$query = $this->db->get('districts');
		$output = '<option value="">--- กรุณาเลือกตำบล ---</option> ';
		foreach ($query->result() as $row) 
		{
			$output .= '<option value="'.$row->DISTRICT_CODE.'">'.$row->DISTRICT_NAME.'</option>';
		}
		return $output;
	}

	function fetch_zipcode($DISTRICT_CODE)
	{
		$this->db->where('DISTRICT_CODE', $DISTRICT_CODE);
		$this->db->order_by('zipcode', 'ASC');
		$query = $this->db->get('zipcodes');
		foreach ($query->result() as $row) 
		{
			$output = '<option value="'.$row->district_code.'">'.$row->zipcode.'</option>';
		}
		return $output;
	}


	function Myreturn_change($ORDER_ID)
	{	
		$this->db->select('*');
		$this->db->from('mfr_order');
		$this->db->join('mfr_return_product', 'mfr_return_product.order_id_R = mfr_order.order_id', 'left');
		$this->db->where('order_number', $ORDER_ID);
		$this->db->where('mfr_return_product.order_id_R IS null');
		$query = $this->db->get();
		$output = ' <option value="">--- กรุณาเลือกสินค้า ---</option>';
		foreach ($query->result() as $row) 
		{
			$name_product = $this->db->get_where('mfr_product' , array('category_id' => $row->product_id ))->row_array();
			$output .= '<option value="'.$row->order_id.','.$row->price.','.$row->product_id.'">'.$name_product['product_name'].'</option> ';
		}
		return $output;
	}

	function Myreturn_order($order_user)
	{
		$this->db->select('*');
		$this->db->from('mfr_orderdetail');
		$this->db->join('mfr_order', 'mfr_order.order_number = mfr_orderdetail.order_number_ds', 'left');
		$this->db->where('frammer_id is NOT NULL');
		$this->db->where('mfr_orderdetail.user_id',$order_user);
		$this->db->group_by('order_number_ds');
		$query = $this->db->get();
		return $query->result_array();
	}
	

}

/* End of file dynamic_dependent_model.php */
/* Location: ./application/models/dynamic_dependent_model.php */ 