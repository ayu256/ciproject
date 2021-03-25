<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('student_model');
	}

	public function index()
	{
		$this->load->view('header');
	}

	public function add()
	{

		$this->form_validation->set_rules('fname','First Name','required'); 
		$this->form_validation->set_rules('lname','Last Name','required'); 
		$this->form_validation->set_rules('father_name','Father Name','required'); 
		$this->form_validation->set_rules('contact_no','Contact No','required|is_unique[student_details.contact_no]'); 
		$this->form_validation->set_rules('dob','Date Of Birth','required'); 
	  $this->form_validation->set_rules('email','Email','required'); 
	  $this->form_validation->set_rules('institute','Institute Name','required'); 
	  $this->form_validation->set_rules('address','Address','required'); 
       
      if($this->form_validation->run() === false)
      {
        $this->load->view('header');
		    $this->load->view('add_student');
      }
      else
      {
            $inputdata = array(
            		'f_name' => $this->input->post('fname'),
            		'l_name' => $this->input->post('lname'),
            		'father_name' => $this->input->post('father_name'),
            		'contact_no' => $this->input->post('contact_no'),
            		'email' => $this->input->post('email'),
            		'dob' => $this->input->post('dob'),
            		'institute' => $this->input->post('institute'),
            		'address' => $this->input->post('address'),
            		//'profile_img'=>$this->input->post('profile_img')
            		);
        
               //$inputdata['profile_img']='';
              
            if(!empty($_FILES["profile_img"]))  
             {
                $config['upload_path'] = './assets/student_img';  
                $config['allowed_types'] = 'jpg|jpeg|png|gif';  
                $this->load->library('upload', $config);  
               
              if($_FILES["profile_img"]["name"])  
              { 
                  if(!$this->upload->do_upload('profile_img'))  
                  {  
                      $error = $this->upload->display_errors();
                  }  
                  else  
                  {  
                       $data = $this->upload->data(); 
                       $inputdata['profile_img'] = $data["file_name"];
                  }  
              }   
            }

              $this->student_model->save_data($inputdata);
              redirect('Student/view');
      }
	}


	public function view()
	{
  		$data['student_data'] =  $this->student_model->fetch_data();
      
  		$this->load->view('header');
  		$this->load->view('view_student',$data);
	}
}
