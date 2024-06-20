<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxsearch extends CI_Controller {


 function fetch()
 {
  $output = '';
  $query = '';
  $this->load->model('ajaxsearch_model');
  if($this->input->post('query'))
  {
  $query = $this->input->post('query');
  }
  $data = $this->ajaxsearch_model->fetch_data($query);
  $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
      <th>Ticket No</th>
      <th>Name</th>
      <th>Contact</th>
        <th>Location</th>
      <th>Email</th>
       <th>Serial No</th>
        <th>Current Status</th>
      </tr>
  ';
  if($data->row_array() > 0)
  {
  foreach($data->result() as $row)
  {
    $output .= '
      <tr>
      <td>LM '.$row->ticket_no.'</td>
      <td><a href="https://www.lappymaker.co/diagonis/Dashboard/customer_detail/'.$row->ticket_no.'" style="text-decoration: none;">'.$row->name.'</a></td>
      <td>'.$row->contact.'</td>
        <td>'.$row->select_city.'</td>
        <td>'.$row->email.'</td>
         <td>'.$row->serial_no.'</td>
         <td><a href="https://www.lappymaker.co/diagonis/Dashboard/user_edit/'.$row->ticket_no.'" style="text-decoration: none;border-color:#00b4fc;color:#000;font-weight:600;" class="btn" >'.$row->status.'</a></td>
      </tr>
    ';
  }
  }
  else
  {
  $output .= '<tr>
      <td colspan="5">No Data Found</td>
      </tr>';
  }
  $output .= '</table>';
  echo $output;
 }
 
 
  function fetch_status()
 {
  $output = '';
  $query_status = '';
  $this->load->model('ajaxsearch_model');
  if($this->input->post('query_status'))
  {
   $query_status = $this->input->post('query_status');
  }
  $data = $this->ajaxsearch_model->fetch_data_status($query_status);
  $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
       <th>Ticket No</th>
       <th>Name</th>
       <th>Contact</th>
        <th>Location</th>
       <th>Email</th>
       <th>Serial No</th>
        <th>Current Status</th>
      </tr>
  ';
  if($data->row_array() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      <tr>
       <td>LM '.$row->ticket_no.'</td>
       <td><a href="https://www.lappymaker.co/diagonis/Dashboard/customer_detail/'.$row->ticket_no.'" style="text-decoration: none;">'.$row->name.'</a></td>
       <td>'.$row->contact.'</td>
        <td>'.$row->select_city.'</td>
        <td>'.$row->email.'</td>
        <td>'.$row->serial_no.'</td>
         <td><a href="https://www.lappymaker.co/diagonis/Dashboard/user_edit/'.$row->ticket_no.'" style="text-decoration: none;border-color:#00b4fc;color:#000;font-weight:600;" class="btn" >'.$row->status.'</a></td>
      </tr>
    ';
   }
  }
  else
  {
   $output .= '<tr>
       <td colspan="5">No Data Found</td>
      </tr>';
  }
  $output .= '</table>';
  echo $output;
 }
 
}
