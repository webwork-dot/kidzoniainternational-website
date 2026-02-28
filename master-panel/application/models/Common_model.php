<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model
{
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
    
    
    public function getRowByParentId($table,$field,$id,$parent) {
        $this->db->select($field);
        $this->db->where($parent, $id);
        $query = $this->db->get($table);
        if($query->num_rows()>0){
         $sql= $query->row_array();
         return $sql;
        }
        else{
         return '';
        }
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
        $row=$query->result();  
        return $row;
    }

    //-- select function
    function selectWhere($table,$where,$sort='ASC',$sort_by='id'){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $this->db->order_by($sort_by,$sort);
        $query = $this->db->get();
        $row=$query->result();  
        return $row;
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
        $this->db->select();
        $this->db->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        $row=$query->result();
        if(!empty($row))
            return $row[0];
        else
            return false;
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
        return $row=$query->result();
    }

    // select by in operator
    function selectByidsINWhere($ids,$table, $limit='', $start=''){
        $this->db->select('*');
        $this->db->from($table);
        if($limit!=0){
          $this->db->limit($limit, $start);
        }
        $query = $this->db->get();
        return $row=$query->result();
    }

    //-- select by id with parametes
    function selectByidParam($id,$table,$param){
        $this->db->select();
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
    
    public function create_unique_slug($table,$field,$title,$id="") {
        $slug_  = preg_replace("/-$/","",preg_replace('/[^a-z0-9]+/i', "-", strtolower($title)));
        $slug   = slugify($slug_);
        $this->db->select('COUNT(*) AS NumHits');
        $this->db->from($table);
        $this->db->where($field, $slug);
		if($id!=''){
		    $this->db->where('id!=', $id);
		}
        $row = $this->db->get()->row_array();
        $numHits = $row['NumHits'];
        $slug_final=($numHits > 0) ? ($slug . '-' . $numHits) : $slug;
        return $slug_final;
    }
    
}