<?php

class Scheduler_m extends CI_Model{
	

	public function getFlightBooking(){
		$this->db->select('*');
		$this->db->from('travel_request tr');
		$this->db->join('travel_flight tf','tf.travel_request_id = tr.travel_request_id');
		$query = $this->db->get();
		
		if($query->num_rows()>0){return $query->result_array();}else{return false;}
	}
	public function getHotelBooking(){
		$this->db->select('*');
		$this->db->from('travel_request tr');
		$this->db->join('travel_hotel th','th.travel_request_id = tr.travel_request_id');
		$query = $this->db->get();
		
		if($query->num_rows()>0){return $query->result_array();}else{return false;}
	}
	public function getCarBooking(){
		$this->db->select('*');
		$this->db->from('travel_request tr');
		$this->db->join('travel_car tc','tc.travel_request_id = tr.travel_request_id');
		$query = $this->db->get();
		
		if($query->num_rows()>0){return $query->result_array();}else{return false;}
	}
	public function selectedFlightBooking($params){
		$this->db->select('*');
		$this->db->from('travel_request tr');
		$this->db->join('travel_flight tf','tf.travel_request_id = tr.travel_request_id');
		$this->db->where('tr.travel_request_id',$params["travel_request_id"]);
		$query = $this->db->get();
		
		if($query->num_rows()>0){return $query->result_array();}else{return false;}
	}
	public function selectedHotelBooking($params){
		$this->db->select('*');
		$this->db->from('travel_request tr');
		$this->db->join('travel_hotel th','th.travel_request_id = tr.travel_request_id');
		$this->db->where('tr.travel_request_id',$params["travel_request_id"]);
		$query = $this->db->get();
		
		if($query->num_rows()>0){return $query->result_array();}else{return false;}
	}
	public function selectedCarBooking($params){
		$this->db->select('*');
		$this->db->from('travel_request tr');
		$this->db->join('travel_car tc','tc.travel_request_id = tr.travel_request_id');
		$this->db->where('tr.travel_request_id',$params["travel_request_id"]);
		$query = $this->db->get();
		
		if($query->num_rows()>0){return $query->result_array();}else{return false;}
	}
	
	
	
	

}