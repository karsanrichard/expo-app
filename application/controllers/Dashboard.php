<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

/*
*
*Richard Karsan
*Home controller
*
*/

	public function __construct() {
        parent::__construct();

        $this->load->model("dashboard_model");
    }

	public function index()
	{
		$this->home();
	}

	public function home()
	{
		// echo "<pre>Current function: Dashboard/home";
    $data['locations_json'] = "
        {
                  location_id: '1',
                  city : 'Italy',
                  desc : 'Meeting of the Auditores',
                  date : '10 April 2017',
                  lat : 41.8919300,
                  long : 12.5113300
                },
                {
                  location_id: '2',
                  city : 'Greece',
                  desc : 'Toga party',
                  date : '15 May 2017',
                  lat : 40.689686,
                  long : 21.454325
                },
                {
                  location_id: '3',
                  city : 'Tanzania',
                  desc : 'Arusha raha',
                  date : '12 June 2017',
                  lat : -6.816330,
                  long : 39.276638
                },
                {
                  location_id: '4',
                  city : 'Kolkata',
                  desc : 'Howrah Bridge!',
                  date : '10 April 2017',
                  lat : 22.500000,
                  long : 88.400000
                },
                {
                  location_id: '5',
                  city : 'Chennai  ',
                  desc : 'Kathipara Bridge!',
                  date : '10 April 2017',
                  lat : 13.000000,
                  long : 80.250000
                } ";
              
		$data['content'] = "dashboard/dashboard_map";
    $this->load->view('dashboard/dashboard_home',$data);
  }

  public function book_location($passed_event_id = NULL)
  {
    /*
    *Dynamic function that takes both post and passed parameter to enable redirect without having to post
    */

		$posted_data = $this->input->post();

    if ($posted_data) {
      $event_id = $posted_data['selected_id'];
    }else{
      $event_id = $passed_event_id;
    }
    
    $event_id = (isset($event_id) && $event_id !='' && $event_id > 0)?$event_id:1;//TESTING PURPOSES
		
    // echo "<pre>";print_r($event_id);exit;

		$stands = dashboard_model::get_stands($event_id);
    $data['stands'] = $stands;
    // echo "<pre>";print_r($stands);exit;
    $stands_final = array();

    foreach ($stands as $key => $value) {
      $booking_status = $event_id = NULL;

      $booking_status = $value['booking_status'];
      $event_id = $value['event_id'];
      $stand_id = $value['stand_id'];

      // echo $event_id.' '.$stand_id;
      $stand['stand_id'] = $stand_id;
      $stand['event_id'] = $event_id;
      $stand['stand_number'] = $value['stand_number'];
      $stand['price'] = $value['price'];
      $stand['booking_status'] = $booking_status;

      if($booking_status == 2){
        /*
        *Addition of company information if stand is booked
        */
        $booking_data = dashboard_model::get_event_booking_data($event_id,$stand_id);
        //Assumption: If stand is booked, company data must be present. 
        $booking_data = array_pop($booking_data);
        $company_id = $booking_data['company_id'];
        // echo "<pre>";print_r($booking_data);exit;
        $company_data = dashboard_model::get_company_data($company_id);
        $company_data = array_pop($company_data);

        $stand['company_id'] = $company_data['company_id'];
        $stand['company_email'] = $company_data['company_email'];
        $stand['company_phone'] = $company_data['company_phone'];
        $stand['company_name'] = $company_data['company_name'];
        $stand['company_description'] = $company_data['company_description'];
        $stand['company_logo_url'] = $company_data['logo_url'];
        $stand['company_docs_url'] = $company_data['doc_url'];
        // echo "<pre>";print_r($company_data);exit;
      }else{
        /*Ensures no carrying over of values when array loops over booked stand then over unbooked stand*/
        $stand['company_id'] = $stand['company_name'] = $stand['company_description'] = $stand['company_logo_url'] = $stand['company_docs_url'] = "N/A";
      }//end of booking status if

      array_push($stands_final, $stand);

    }//end of stands foreach

    $data['stands'] = $stands_final;
    $data['content'] = "dashboard/dashboard_stands";

		$this->load->view('dashboard/dashboard_home',$data);
	}

  public function get_stand_data()
  {
    $posted_data = $this->input->post();
    $stand_id = $posted_data['stand_id'];

    $stand_data = dashboard_model::get_stand_data($stand_id);
    $stand_data = array_pop($stand_data);

    echo json_encode($stand_data);
  }

  public function book_stand($stand_id)
  {
    $data['stand_id'] = $stand_id;
    $data['content'] = "dashboard/dashboard_register_company";
    $this->load->view('dashboard/dashboard_home',$data);
  }

  public function save_reservation()
  {
    $posted_data = $this->input->post();
    $stand_id = $posted_data['stand_id'];
    // echo "<pre>";print_r($posted_data);exit;
    $stand_data = dashboard_model::get_stand_data($stand_id);
    $stand_data = array_pop($stand_data);

    $event_id = $stand_data['event_id'];


    /*COMPANY DATA UPLOAD*/
    $u_data = array(
       'company_name' => $posted_data['company_name'] ,
       'company_admin_name' => ucfirst($posted_data['admin_firstname']).' '.ucfirst($posted_data['admin_secondname']) ,
       'company_email' => $posted_data['company_email'] ,
       'company_phone' => $posted_data['company_phone'] ,
       'company_description' => $posted_data['company_description']
    );

    $insertion = $this->db->insert('company', $u_data); 
    $last_insert_id = $this->db->insert_id();
    /*END OF COMPANY DATA UPLOAD*/

    /*FILE UPLOADS*/
    $logo_file_name = $_FILES["company_logo"]["name"];
    $logo_ext = pathinfo($logo_file_name, PATHINFO_EXTENSION);

    // echo $ext;exit;

    $config['upload_path']          = FCPATH.'uploads/logos';
    $config['allowed_types']        = 'gif|jpg|png|txt|doc|pdf|docx';//Allowed types for both the document and the logo
    $config['max_size']             = 10000;


    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('company_logo'))
    {
            $error = array('error' => $this->upload->display_errors());

            echo "<pre>";print_r($error);exit;
    }
    else
    {
            $logo_data = array('upload_data' => $this->upload->data());

            // echo "<pre>";print_r($logo_data);exit;
    }

    $logo_upload_name = $logo_data['upload_data']['file_name'];//Uploaded file name
    $update_data['logo_url'] = base_url().'uploads/logos/'.$logo_upload_name;//Logo URL for company table

    // echo "<pre>";print_r($_FILES['company_document']);exit;
    $doc_file_name = $_FILES["company_document"]["name"];
    $doc_ext = pathinfo($doc_file_name, PATHINFO_EXTENSION);

    if ( ! $this->upload->do_upload('company_document'))
    {
            $error = array('error' => $this->upload->display_errors());

            echo "<pre>";print_r($error);exit;
    }
    else
    {
            $doc_data = array('upload_data' => $this->upload->data());
    }

    $doc_upload_name = $doc_data['upload_data']['file_name'];//Uploaded file name
    $update_data['doc_url'] = base_url().'uploads/logos/'.$doc_upload_name;//Logo URL for company table

    $this->db->where('company_id', $last_insert_id);
    $final_update = $this->db->update('company', $update_data); 

    /*EVENT BOOKING INSERT*/
    $e_data = array(
       'event_id' => $event_id ,
       'company_id' => $last_insert_id ,
       'stand_id' => $stand_id 
    );

    $e_insertion = $this->db->insert('event_booking', $e_data); 
    /*END OF EVENT BOOKING INSERT*/

    /*STAND UPDATE*/
    $stand_update['booking_status'] = 2;
    $this->db->where('stand_id', $stand_id);
    $stand_update = $this->db->update('stand', $stand_update); 

    redirect('Dashboard/book_location/'.$event_id);
  }

  public function download_document($company_id)
  {
    // echo "<pre>";print_r($company_id);exit;

    $file_url = dashboard_model::get_company_doc_url($company_id);
    $download_from_url = $file_url['doc_url'];

    // echo "<pre>";print_r($download_from_url);exit;
    ob_clean(); 
    $data = file_get_contents($download_from_url); //assuming my file is on localhost
    $path_parts = pathinfo($download_from_url);
    // echo "<pre>";print_r($path_parts);exit;

    $name = 'Company marketting document.'.$path_parts['extension']; 
    force_download($name,$data);
  }

  public function send_email()
  {
    $this->send_mail();
  }
}