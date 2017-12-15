 <?php

 class queries extends CI_Model{

public function getLocation(){
    $query = $this->db->get('location');
    return $query->result();
}

public function getCategory(){
    $query = $this->db->get('hall_category');
    return $query->result();
}

public function getHall(){
    $query = $this->db->get('hall_data');
    return $query->result();
}

public function getRecords($location,$category,$hall,$capacity){
$this->db->select('hall_data.hall_id','hall_data.category_id','hall_data.name','hall_data.maxcapacity','hall_data.location','hall_data.image');
$this->db->from('hall_data');
$query = $this->db->get();
return $query->result();
}

 }
 ?>