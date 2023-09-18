<?php 

class UsersModel extends CI_Model
{


    //function insert in database
    function InsertItem($data){
$this->db->insert('items',$data);
if($this->db->affected_rows() >=0)
{
    return true;
} else
{
    return false;
}
    }

    //function in fetching data
function getItem(){

    $query = $this->db->get('items');
    return $query->result_array();
}

//function in editing data
function getUser($id){

$this->db->where('id',$id);
$query=$this->db->get('items');
return $query->row();

}

//function in updateUser
function updateUser($data, $id){
    $this->db->where('id',$id);
$this->db->update('items', $data);
if($this->db->affected_rows() >=0)
{
    return true;
} else
{
    return false;
}
}


//function delete

function deleteUser( $id){
    $this->db->where('id',$id);
$this->db->delete('items');
if($this->db->affected_rows() >=0)
{
    return true;
} else
{
    return false;
}
}
}
