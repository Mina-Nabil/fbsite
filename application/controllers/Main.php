<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('image_lib');
		$this->load->helper('captcha');
		$this->load->library('session');
	}

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
		$data['Slides']					= $this->Sitedata_model->getSlides();

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
		$data['CourseDetail'] = TRUE;

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



	} public function join($Error=null){
		require FCPATH. 'vendor/autoload.php';
		$footer['ContactUs'] = $this->Contactus_model->getContactus()[0];
		$footer['Images'] = $this->Sitedata_model->getSite_data_SMLIMG()[0];


		$config = array(
				'img_url' => base_url() . 'capcha/',
				'img_path' => 'capcha/',
				'img_height' => '45',
				'word_length' => 5,
				'img_width' => '150',
				'font_size' => 10,
				'expiration' => 500
		);
		$captcha = create_captcha($config);

		$this->session->set_userdata(array('cap' => $captcha['word'], 'time' => $captcha['time'] ));
		$data['captcha'] = $captcha;
		$data['error'] = $Error;


		$this->load->view('templates/header');
		$this->load->view('pages/join', $data);
		$this->load->view('templates/footer', $footer);
	}

	public function sendJoin(){

		$captchafile = $this->session->userdata('time');
		$captchaSess = $this->session->userdata('cap');
		$captchaWord 		= $this->input->post('capcha');

		if(strcmp($captchaWord, $captchaSess) != 0 ) {

			$this->join('Captcha Failed');
			return;
		}


		require 'vendor/autoload.php';
		$footer['ContactUs'] = $this->Contactus_model->getContactus()[0];
		$footer['Images'] = $this->Sitedata_model->getSite_data_SMLIMG()[0];


		$from 		= 'info@financialbrains.net';
		$Name 		= $this->input->post('name');
		$msg 			= $this->input->post('msg');
		$mob 			= $this->input->post('mob');
		$Years 		= $this->input->post('years');
		$Field 		= $this->input->post('field');
		$Why 			= $this->input->post('why');

		$to = $data['ContactUs']['CNTC_EMAIL'];

//////////////////////////CV//////////////////////////
		$CV = '';

		if (!empty($_FILES['CV']['name'])) {

			$config['upload_path']          = FCPATH . "uploads/cvs/";
			$config['allowed_types'] = 'pdf|docx|doc';
			$config['max_size'] = 25000;
			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('CV')){
					$CVUploaded = false;
			} else {
					$imgData = $this->upload->data();
					$CV = $imgData['file_name'];
					$CVUploaded = true;
			}

		}

/////////////////////////Photo//////////////////////////////


//////////////////////////CV//////////////////////////
		$Photo = '';

		if (!empty($_FILES['photo']['name'])) {

			$config['upload_path']          = FCPATH . "uploads/photos/";
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 25000;
			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('photo')){
					$PhotoUploaded = false;
			} else {
					$imgData = $this->upload->data();
					$Photo = $imgData['file_name'];
					$PhotoUploaded = true;
			}

		}


		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'user@example.com';                 // SMTP username
    $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($from, $Name);
    $mail->addAddress('info@financialbrains.net', 'Joe User');     // Add a recipient

    //Attachments
		if($CVUploaded)
    $mail->addAttachment(FCPATH . "uploads/cvs/"		.	$CV);         // Add attachments
		if($PhotoUploaded)
    $mail->addAttachment(FCPATH . "uploads/photos/"	.	$Photo);    // Optional name

    //Content
    $mail->isHTML(false);                                  // Set email format to HTML
    $mail->Subject = 'Join Our Team';
    $mail->Body    = 'cd ';


    $mail->send();
		unlink(FCPATH . "uploads/cvs/"		. $CV);
		unlink(FCPATH . "uploads/photos/"	. $Photo);

} catch (Exception $e) {
  //  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


		$this->load->view('pages/redirecttohome');
	}

	public function blog(){
		$footer['ContactUs'] = $this->Contactus_model->getContactus()[0];
		$footer['Images'] = $this->Sitedata_model->getSite_data_SMLIMG()[0];

		$data['Blogs'] 		= $this->Sitedata_model->getBlogs();

		$this->load->view('templates/header');
		$this->load->view('pages/blog', $data);
		$this->load->view('templates/footer', $footer);
	}


}
