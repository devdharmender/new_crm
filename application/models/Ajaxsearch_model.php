<?php
class Ajaxsearch_model extends CI_Model
{
 function fetch_data($query)
 {
  $this->db->select("*");
  $this->db->from("diagonis_form");
  if($query != '')
  {
   $this->db->like('contact', $query);
   $this->db->or_like('email', $query);
    $this->db->or_like('select_city', $query);
    $this->db->or_like('serial_no', $query);
     $this->db->or_like('CONCAT("lm ", ticket_no)', $query);
      $this->db->or_like('CONCAT("LM ", ticket_no)', $query);
       $this->db->or_like('CONCAT("lm", ticket_no)', $query);
        $this->db->or_like('CONCAT("LM", ticket_no)', $query);
  }
  $this->db->order_by('ticket_no', 'DESC');
  $this->db->limit(20);
  return $this->db->get();
 }
 
 
 
 
  function fetch_data_status($query_status)
 {
  $this->db->select("*");
  $this->db->from("diagonis_form");
  if($query_status != '')
  {
   $this->db->like('status', $query_status);
  }
  $this->db->order_by('ticket_no', 'DESC');
  $this->db->limit(100);
  return $this->db->get();
 }
}
?>
