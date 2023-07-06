<?php
class Info extends CI_Model
{
    public $tableName = "info";
    public $currency = "valyuta";
    
    public function __construct()
    {
        parent::__construct();
    }
   
    public function GetAll()
    {
         return $this->db->get($this->tableName)->result();
    }
    
    public function GetCurrency()
    {
         return $this->db->get($this->currency)->result();
    }
    
    public function Insert($data = array())
    {
         return $this->db->Insert($this->tableName, $data);
    }
    public function Delete($id)
{
    return $this->db->where("Id", $id)->delete("info");
}

}
