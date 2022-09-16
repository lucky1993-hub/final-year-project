<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Driver_info_model extends CI_Model{
	
	public function mechanic_info(){
	    return $this->db->select('mechanic_info.*, (vehicle_info.v_registration_no) AS v_reg')
			->from('driver_info')
			->join('vehicle_info','vehicle_info.v_id = mechanic_info.v_registration_no','left')
			->where_not_in('mechanic_info.active',2)
			->order_by('mechanic_info.driver_id','desc')
			->get()
			->result(); 
	}		


	public function mechanic_by_id($driver_id = NULL){
	    return $this->db->select('mechanic_info.*, (vehicle_info.v_registration_no) AS v_reg')
			->from('mechanic_info')
			->join('vehicle_info','vehicle_info.v_id = mechanic_info.v_registration_no','left')
			->where('mechanic_id',$driver_id)
			->get()
			->row(); 
	}
	
	public function get_mechanic_info($driver_id = NULL){
	    return $this->db->select('mechanic_info.*')
			->from('mechanic_info')
			// ->join('vehicle_info','vehicle_info.v_id = driver_info.v_registration_no')
			->where('mechanic_id',$mechanic_id)
			->get()
			->result(); 
	}
	
	function delete_info($mechanic_id = NULL){
		return $this->db->set('active',2)
			->where('mechanic_id',$mechanic_id)
			->update('mechanic_info');
	}
	
	public function save($data = NULL){
		if(!empty($data['mechanic_id'])){
			$this->db->where('mechanic_id',$data['mechanic_id']);
			$this->db->update('mechanic_info',$data);
		}else{
			$this->db->insert('mechanic_info',$data);
		}
		
	} 
	
	public function get_vehicle_model(){ 
		return $this->db->select("*,(select v_type from vehicle_type where vehicle_type.v_type_id = vehicle_info.v_type) as v ")
			->from('vehicle_info')
			->where('active',1)
			->get()
			->result();
	}

	public function mechanic_dropdown(){
	$mechanic = $this->db->where('active',1)->order_by('mechanic_name','asc')->get('mechanic_info')->result();
	$mechanic[''] = lang("SELECT_mechanic");
	if(!empty ($mechanic)){
		foreach($mechanic as $value){
			$mechanic[$value->mechanic_id] = $value->mechanic_name;
			} 
		} 
	if(!empty($mechanic)) return $mechanic;
	}


} 