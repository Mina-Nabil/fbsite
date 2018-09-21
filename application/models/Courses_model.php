<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getCourses(){

    $strSQL = "SELECT CRS_ID, CRS_NAME, CRS_BRIEF, CRS_OVERVIEW, CRS_CERTIFICATE, CRS_IMG, CRS_DUR, CRS_PRTY 
               FROM courses";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getCoursesCount(){

    $strSQL = "SELECT Count(CRS_ID) as Crs_Count
               FROM courses";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getCourses_byPage($num){

    $offset = ($num-1) * 6;
    $strSQL = "SELECT CRS_ID, CRS_NAME, CRS_BRIEF, CRS_OVERVIEW, CRS_CERTIFICATE, CRS_IMG, CRS_DUR, CRS_PRTY
               FROM courses
               ORDER BY CRS_PRTY
               LIMIT {$offset},6";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }


    public function getCourses_HomePage(){


      $strSQL = "SELECT CRS_ID, CRS_NAME, CRS_BRIEF, CRS_OVERVIEW, CRS_CERTIFICATE, CRS_IMG, CRS_DUR
                 FROM courses
                 ORDER BY CRS_PRTY
                 LIMIT 0,9";
      $query = $this->db->query($strSQL);
      return $query->result_array();

    }

  public function getCourse_byID($ID){

    $strSQL = "SELECT CRS_ID, CRS_NAME, CRS_BRIEF, CRS_OVERVIEW, CRS_CERTIFICATE, CRS_IMG, CRS_DUR
               FROM courses WHERE CRS_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }



}
