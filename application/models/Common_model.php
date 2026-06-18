<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model{
    
    
    // get table count
    public function get_count($table){

        return $this->db->count_all($table);
    }

    // get id by slug
    public function getIdBySlug($where,$table){

        $this->db->select('id');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        $row=$query->result();
        return $row[0]->id;
    }

    public function getMaxId($table,$where=''){
        if($where==''){
            $this->db->select_max('id');
            $this->db->from($table);
            $query = $this->db->get();
            $row=$query->result();
            return $row[0]->id; 
        }
        else{
            $this->db->select_max('id');
            $this->db->from($table);
            $this->db->where($where);
            $query = $this->db->get();
            $row=$query->result();
            return $row[0]->id; 
        }
        
    }

    // get table count
    public function get_count_by_ids($where,$table){
        $this->db->from($table);
        $this->db->where($where);
        return $num_rows = $this->db->count_all_results();
    }


    //-- insert function
	public function insert($data,$table){
        $this->db->insert($table,$data);        
        return $this->db->insert_id();
    }

    //-- edit function
    function edit_option($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    } 

    //-- update function
    function update($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return true;
    }  
    


    // update by multiple ids
    function updateByids($data, $ids, $table){
        $this->db->where($ids);
        $this->db->update($table,$data);
        return true;
    } 

    // update by in Operator
    function updateByIn($data, $ids, $table){
        $this->db->where_in('id', $ids);
        $this->db->update($table,$data);
        // echo $this->db->last_query();
        return true;
    } 

    //-- delete function
    function delete($id,$table){
        $this->db->delete($table, array('id' => $id));
        return true;
    }

    //-- delete by ids
    function deleteByids($where,$table){
        $this->db->delete($table, $where);
        return true;
    }

    //-- select function
    function select($table,$sort='ASC'){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('id',$sort);
        $query = $this->db->get();
        return $query;
    }

    //-- select function
    function selectWhere($table,$where,$sort='ASC',$sort_by='id'){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $this->db->order_by($sort_by,$sort);
        $query = $this->db->get(); 
        return $query;
    }

    //-- select by id
    function selectByorderId($id,$table){

        $this->db->select();
        $this->db->from($table);
        $this->db->where('order_unique_id', $id);
        $query = $this->db->get();
        $row=$query->result();
        if(!empty($row))
            return $row[0];
        else
            return false;
    }
    
    
    function selectByid($id,$table){
      $this->db->select('*');
        $this->db->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query;
    }

    // select by in operator
    function selectByidsIN($ids,$table, $limit='', $start='', $brands='',$order_by=''){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where_in('status', '1');
        $this->db->where_in('id', $ids);
        if($brands!=''){
            $ids=explode(',', $brands);
            $this->db->where_in('brand_id', $ids);
        }
        if($limit!=0 OR $limit!=''){
          $this->db->limit($limit, $start);
        }
        
        $query = $this->db->get();

        // echo $this->db->last_query();

        return $row=$query->result();
    }

    // select by in operator
    function selectByidsINWhere($ids,$table, $limit='', $start=''){
        $this->db->select('*');
        $this->db->from($table);
        if($limit!=0){
          $this->db->limit($limit, $start);
        }
        $this->db->order_by('id', 'DESC') ;
        $query = $this->db->get();
        
        // echo $this->db->last_query();

        return $row=$query->result();
    }

     //-- select by id with parametes
    function selectByidParam($id,$table,$param){
        $this->db->select($param);
        $this->db->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        $row=$query->result();
        return $row[0]->$param;
    }

    //-- select by ids with parametes
    function selectByidsParam($ids,$table,$param){
        $this->db->select();
        $this->db->from($table);
        $this->db->where($ids);
        $query = $this->db->get();
        $row=$query->result();
        if($row)
            return $row[0]->$param;
        else
            return '';
        
    }

    //-- select by ids
    function selectByids($ids,$table,$sort_by='',$sort='DESC'){
        $this->db->select();
        $this->db->from($table);
        $this->db->where($ids);
        if($sort_by!=''){
            $this->db->order_by($sort_by,$sort);
        }
        $query = $this->db->get();
        $query = $query->result(); 

        // echo $this->db->last_query();

        return $query;
    } 

    
    public function generateuniquecode($digits = 8){
        $i = 0; //counter
        $pin = ""; 
        while($i < $digits){
            $pin .= mt_rand(1, 9);
            $i++;
        }
        return $pin;
    }
   //Unique Code Ends 
   
 
    public function getNameById($table,$field,$id) {
        $this->db->select($field);
        $this->db->where('id', $id);
        $query = $this->db->get($table);
        if($query->num_rows()>0){
         $sql= $query->row();
         return $sql->$field;
        }
        else{
         return '';
        }
    }
    
    public function getComplexNameById($table,$where,$field,$id) {
        $this->db->select($where);
        $this->db->where('id', $id);
        $query = $this->db->get($table);
        if($query->num_rows()>0){
         $sql= $query->row();
         return $sql->$field;
        }
        else{
         return '';
        }
    }
       

        
    public function getFlashNameById($table,$select,$where,$field) {
        $query = $this->db->query("SELECT $select FROM $table WHERE $where LIMIT 1");
        if($query->num_rows()>0){
         $sql= $query->row();
         return $sql->$field;
        }
        else{
         return '';
        }
    }
      public function getRowById($table,$field,$id,$where) {
        $this->db->select($field);
        $this->db->where($where, $id);
        $query = $this->db->get($table);
        if($query->num_rows()>0){
         $sql= $query->row_array();
         return $sql;
        }
        else{
         return '';
        }
    }  
    
    public function getResultById($table,$field,$where,$id) {
        $this->db->select($field);
        $this->db->where($where, $id);
        $query = $this->db->get($table);
        if($query->num_rows()>0){
         $sql= $query->result_array();
         return $sql;
        }
        else{
         return '';
        }
    }

    
    public function checkData($table,$field,$where) {
       $sql=$this->db->query("SELECT $field FROM $table WHERE $where LIMIT 1");
       return $sql->num_rows();
    }  
    
    public function getBulkNameIds($table,$field,$id) {
        $query = $this->db->query("SELECT $field FROM $table WHERE FIND_IN_SET(id, '$id')");
         $data  = array();
        foreach ($query->result_array() as $key => $row) {
            $name = $row[$field];
            $data[$key] = $name;
        }
       $new_data=implode(",",$data);
       return $new_data;
    }
	
  	public function getRowById_multiple($table,$field,$where) {
        $this->db->select($field);
        $this->db->where($where);
        $query = $this->db->get($table);
        if($query->num_rows()>0){
         $sql= $query->row_array();
         return $sql;
        }
        else{
         return '';
        }
    }  
	
	public function getResultById_multiple($table,$field,$where) {
        $this->db->select($field);
        $this->db->where($where);
        $query = $this->db->get($table);
        if($query->num_rows()>0){
         $sql= $query->result_array();
         return $sql;
        }
        else{
         return '';
        }
    }
    
    public function get_seo_url($branch_slug = '', $curriculum_slug = 'preschool', $city = 'hyderabad')
    {
        if (empty($branch_slug)) {
            return base_url() . 'explore-centers/' . strtolower($city);
        }
        return base_url() . $curriculum_slug . '-in-' . $branch_slug . '-' . strtolower($city);
    }

    public function sanitize_notification_payload($payload)
    {
        if (is_array($payload)) {
            $sanitized = array();
            foreach ($payload as $key => $value) {
                $lower_key = strtolower($key);
                if (in_array($lower_key, array('apikey', 'smtp_pass', 'password', 'smtp_user')) ||
                    strpos($lower_key, 'pass') !== false ||
                    strpos($lower_key, 'token') !== false ||
                    strpos($lower_key, 'authorization') !== false) {
                    $sanitized[$key] = '[redacted]';
                } elseif (is_array($value)) {
                    $sanitized[$key] = $this->sanitize_notification_payload($value);
                } else {
                    $sanitized[$key] = $value;
                }
            }
            return $sanitized;
        }

        if (is_string($payload)) {
            $decoded = json_decode($payload, true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                return json_encode($this->sanitize_notification_payload($decoded));
            }
            return substr($payload, 0, 10000);
        }

        return $payload;
    }

    public function log_notification($data)
    {
        try {
            $kcis_db = $this->load->database('kcis_db', TRUE);

            $request_payload = null;
            if (isset($data['request_payload'])) {
                $request_payload = $this->sanitize_notification_payload($data['request_payload']);
                if (is_array($request_payload)) {
                    $request_payload = json_encode($request_payload);
                }
                $request_payload = substr((string) $request_payload, 0, 10000);
            }

            $response_payload = isset($data['response_payload']) ? substr((string) $data['response_payload'], 0, 10000) : null;

            $row = array(
                'type' => !empty($data['type']) ? $data['type'] : 'website',
                'website' => $data['website'],
                'channel' => $data['channel'],
                'event_type' => $data['event_type'],
                'provider' => isset($data['provider']) ? $data['provider'] : null,
                'template_name' => isset($data['template_name']) ? $data['template_name'] : null,
                'recipient' => isset($data['recipient']) ? $data['recipient'] : '',
                'recipient_name' => isset($data['recipient_name']) ? $data['recipient_name'] : null,
                'status' => $data['status'],
                'http_code' => isset($data['http_code']) ? $data['http_code'] : null,
                'request_payload' => $request_payload,
                'response_payload' => $response_payload,
                'error_message' => isset($data['error_message']) ? substr((string) $data['error_message'], 0, 2000) : null,
                'reference_type' => isset($data['reference_type']) ? $data['reference_type'] : null,
                'reference_id' => isset($data['reference_id']) ? $data['reference_id'] : null,
                'form_type' => isset($data['form_type']) ? $data['form_type'] : null,
                'ip_address' => isset($data['ip_address']) ? $data['ip_address'] : $this->input->ip_address(),
                'created_at' => date('Y-m-d H:i:s'),
            );

            $kcis_db->insert('notifications_log', $row);
            return $kcis_db->insert_id();
        } catch (Exception $e) {
            log_message('error', 'notifications_log insert failed: ' . $e->getMessage());
            return false;
        }
    }
}
?>