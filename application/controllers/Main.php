<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function home()
	{

		$data['site_data']  = $this->Sitedata_model->getSite_data()[0];
		$data['ArrCourses']= $this->Courses_model->getCourses_HomePage();
		$data['ArrInstructors']= $this->Instructors_model->getInstructors();

		$footer['ContactUs'] = $this->Contactus_model->getContactus()[0];
		$footer['Images'] = $this->Sitedata_model->getSite_data_SMLIMG()[0];

		$this->load->view('templates/header');
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer', $footer);
	}

	public function courses($Page){

		$data['ArrCourses']		= $this->Courses_model->getCourses_byPage($Page);
		$data['coursesCount']	= $this->Courses_model->getCoursesCount()[0]['Crs_Count'];
		$data['pagesCount']		= ceil($data['coursesCount'] / 6) ;
		$data['pageNum']			= $Page;

		$footer['ContactUs'] = $this->Contactus_model->getContactus()[0];
		$footer['Images'] = $this->Sitedata_model->getSite_data_SMLIMG()[0];

		$this->load->view('templates/header');
		$this->load->view('pages/courses', $data);
		$this->load->view('templates/footer', $footer);

	}

	public function instructors($Page){

		$data['ArrInstructors']		= $this->Instructors_model->getInstructorDetails_byPage($Page);
		$data['instructorsCount']	= $this->Instructors_model->getInstructorsCount()[0]['Inst_Count'];
		$data['pagesCount']		= ceil($data['instructorsCount'] / 6) ;
		$data['pageNum']			= $Page;

		$footer['ContactUs'] = $this->Contactus_model->getContactus()[0];
		$footer['Images'] = $this->Sitedata_model->getSite_data_SMLIMG()[0];

		$this->load->view('templates/header');
		$this->load->view('pages/instructors', $data);
		$this->load->view('templates/footer', $footer);

	}


	public function course_details($ID){

		$data['Course'] 			= $this->Courses_model->getCourse_byID($ID)[0];
		$data['Candidates']		= $this->Candidates_model->getCandidate_byCourses($ID);
		$data['Benefits']			= $this->Benefits_model->getBenefit_byCourse($ID);
		$data['Exams']				= $this->Exams_model->getExam_byCourses($ID);
		$data['Topics']			= $this->Topics_model->getTopic_byCourse($ID);
		$data['Instructors']	= $this->Teachings_model->getTeaching_byCourses($ID);

		$footer['ContactUs'] = $this->Contactus_model->getContactus()[0];
		$footer['Images'] = $this->Sitedata_model->getSite_data_SMLIMG()[0];

		$this->load->view('templates/header');
		$this->load->view('pages/course_dtl', $data);
		$this->load->view('templates/footer', $footer);


	}

	public function instructor_details($ID){

		$data['Instructor'] 			= $this->Instructors_model->getInstructor_byID($ID)[0];

		$footer['ContactUs'] = $this->Contactus_model->getContactus()[0];
		$footer['Images'] = $this->Sitedata_model->getSite_data_SMLIMG()[0];

		$this->load->view('templates/header');
		$this->load->view('pages/instructor_dtl', $data);
		$this->load->view('templates/footer', $footer);


	}


	public function contactus(){


		$footer['ContactUs'] = $this->Contactus_model->getContactus()[0];
		$footer['Images'] = $this->Sitedata_model->getSite_data_SMLIMG()[0];

		$data['ContactUs'] = $this->Contactus_model->getContactus()[0];

		$this->load->view('templates/header');
		$this->load->view('pages/contactus', $data);
		$this->load->view('templates/footer', $footer);


	}


	public function send_email(){


		$data['ContactUs'] = $this->Contactus_model->getContactus()[0];
		$footer['ContactUs'] = $this->Contactus_model->getContactus()[0];
		$footer['Images'] = $this->Sitedata_model->getSite_data_SMLIMG()[0];

		$this->load->library('email');

		$from = $this->input->post('from');
		$Name = $this->input->post('Name');
		$msg = $this->input->post('msg');
		$to = $data['ContactUs']['CNTC_EMAIL'];

		$this->email->from($from, $Name);
		$this->email->to($to);


		$this->email->subject('Site Contact Us');
		$this->email->message($msg);

		$this->email->send();



		$this->load->view('templates/header');
		$this->load->view('pages/contactus', $data);
		$this->load->view('templates/footer', $footer);



	} public function join(){
		$footer['ContactUs'] = $this->Contactus_model->getContactus()[0];
		$footer['Images'] = $this->Sitedata_model->getSite_data_SMLIMG()[0];


		$this->load->view('templates/header');
		$this->load->view('pages/join');
		$this->load->view('templates/footer', $footer);
	}


}
