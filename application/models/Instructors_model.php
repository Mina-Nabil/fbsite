<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instructors_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getInstructors(){

    $strSQL = "SELECT INST_ID, INST_NAME, INST_DESC, INST_IMG
                FROM instructors ";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getInstructor_byID($ID){

    $strSQL = "SELECT INST_ID, INST_NAME, INST_DESC, INST_IMG
              FROM instructors  WHERE INST_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getInstructors_byPage($num){

    $offset = ($num-1) * 5;
    $strSQL = "SELECT INST_ID, INST_NAME, INST_DESC, INST_IMG
              FROM instructors
              LIMIT {$offset},5";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }


  public function getInstructorDetails_byPage($num){

    $offset = ($num-1) * 6;
    $strSQL = "SELECT INST_ID, INST_NAME, INST_DESC, INST_IMG
              FROM instructors
              LIMIT {$offset},6";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getInstructorsCount(){

    $strSQL = "SELECT Count(INST_ID) as Inst_Count
               FROM instructors";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }



}
