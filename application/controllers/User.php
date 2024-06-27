<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');


include_once ('Main.php');
class User extends Main
{

  public function __construct()
  {
    parent::__construct();

    //models
    $this->load->model('Common_Model');
    $this->load->model('Tour_Model');


    //headers
    $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
    $this->output->set_header("Pragma: no-cache");

  }

  public function index()
  {

    $this->data['meta_title'] = _project_name_;
    $this->data['meta_description'] = _project_name_;
    $this->data['meta_keywords'] = _project_name_;
    $this->data['meta_others'] = "";

    parent::getHeader('header', $this->data);
    $this->load->view('home', $this->data);
    parent::getFooter('footer', $this->data);
  }


  public function upcoming_adventures()
  {
    $this->data['meta_title'] = _project_name_ . " - Upcoming Adventures";
    $this->data['meta_description'] = _project_name_ . " - Upcoming Adventures";
    $this->data['meta_keywords'] = _project_name_ . " - Upcoming Adventures";
    $this->data['meta_others'] = "";

    $this->data['tour_data'] = $this->Tour_Model->get_tour_data([
      "tour_variant" => 1,
      "details" => 1
    ]);




    parent::getHeader('header', $this->data);
    $this->load->view('upcoming-adventures', $this->data);
    parent::getFooter('footer', $this->data);
  }


  public function upcoming_adventures_details($slug)
  {



    $this->data['meta_title'] = _project_name_ . " - Upcoming Adventure Details";
    $this->data['meta_description'] = _project_name_ . " - Upcoming Adventure Details";
    $this->data['meta_keywords'] = _project_name_ . " - Upcoming Adventure Details";
    $this->data['meta_others'] = "";


    $this->data['tour_data'] = $this->Tour_Model->get_tour_data([
      "tour_variant" => 1,
      "tour_id" => $slug,
      "details" => 1
    ]);

    if (empty($this->data['tour_data'])) {
      $this->load->view('pageNotFound', $this->data);
    } else {
      $this->data['tour_data'] = $this->data['tour_data'][0];



      parent::getHeader('header', $this->data);
      $this->load->view('upcoming-adventures-details', $this->data);
      parent::getFooter('footer', $this->data);
    }


  }


  public function upcoming_tours()
  {
    $this->data['meta_title'] = _project_name_ . " - Upcoming Tours";
    $this->data['meta_description'] = _project_name_ . " - Upcoming Tours";
    $this->data['meta_keywords'] = _project_name_ . " - Upcoming Tours";
    $this->data['meta_others'] = "";

    $this->data['tour_data'] = $this->Tour_Model->get_tour_data([
      "tour_variant" => 2,
      "details" => 1
    ]);




    parent::getHeader('header', $this->data);
    $this->load->view('upcoming-tours', $this->data);
    parent::getFooter('footer', $this->data);
  }


  public function upcoming_tours_details($slug)
  {



    $this->data['meta_title'] = _project_name_ . " - Upcoming Tours Details";
    $this->data['meta_description'] = _project_name_ . " - Upcoming Tours Details";
    $this->data['meta_keywords'] = _project_name_ . " - Upcoming Tours Details";
    $this->data['meta_others'] = "";


    $this->data['tour_data'] = $this->Tour_Model->get_tour_data([
      "tour_variant" => 2,
      "tour_id" => $slug,
      "details" => 1
    ]);

    if (empty($this->data['tour_data'])) {
      $this->load->view('pageNotFound', $this->data);
    } else {
      $this->data['tour_data'] = $this->data['tour_data'][0];



      parent::getHeader('header', $this->data);
      $this->load->view('upcoming-tours-details', $this->data);
      parent::getFooter('footer', $this->data);
    }


  }

  public function activities()
  {
    $this->data['meta_title'] = _project_name_ . " - Activities";
    $this->data['meta_description'] = _project_name_ . " - Activities";
    $this->data['meta_keywords'] = _project_name_ . " - Activities";
    $this->data['meta_others'] = "";

    $this->data['tour_data'] = $this->Tour_Model->get_tour_data([
      "tour_variant" => 3,
      "details" => 1
    ]);




    parent::getHeader('header', $this->data);
    $this->load->view('activities', $this->data);
    parent::getFooter('footer', $this->data);
  }


  public function activities_details($slug)
  {



    $this->data['meta_title'] = _project_name_ . " - Activities Details";
    $this->data['meta_description'] = _project_name_ . " - Activities Details";
    $this->data['meta_keywords'] = _project_name_ . " - Activities Details";
    $this->data['meta_others'] = "";


    $this->data['tour_data'] = $this->Tour_Model->get_tour_data([
      "tour_variant" => 3,
      "tour_id" => $slug,
      "details" => 1
    ]);

    if (empty($this->data['tour_data'])) {
      $this->load->view('pageNotFound', $this->data);
    } else {
      $this->data['tour_data'] = $this->data['tour_data'][0];



      parent::getHeader('header', $this->data);
      $this->load->view('activities-details', $this->data);
      parent::getFooter('footer', $this->data);
    }


  }

  function ajax_insert_tour_booking_enquiry()
  {




    $enter_data['name'] = trim($_POST['name']);
    $enter_data['contactno'] = trim($_POST['contactno']);
    $enter_data['email'] = trim($_POST['email']);
    $enter_data['subject'] = trim($_POST['subject']);
    $enter_data['description'] = trim($_POST['description']);
    $enter_data['tour_id'] = trim($_POST['tour_id']);
    $enter_data['tour_date_id'] = trim($_POST['tour_date_id']);
    $enter_data['status'] = 1;

    $enter_data['added_on'] = date("Y-m-d H:i:s");

    $insertStatus = $this->Common_Model->add_operation(array('table' => 'tour_booking_enquiry', 'data' => $enter_data));


  }

  function ajax_insert_enquiry()
  {




    $enter_data['name'] = trim($_POST['name']);
    $enter_data['contactno'] = trim($_POST['contactno']);
    $enter_data['email'] = trim($_POST['email']);
    $enter_data['subject'] = trim($_POST['subject']);
    $enter_data['description'] = trim($_POST['description']);
    $enter_data['tour_id'] = trim($_POST['tour_id']);
    $enter_data['tour_date_id'] = trim($_POST['tour_date_id']);
    $enter_data['status'] = 1;

    $enter_data['added_on'] = date("Y-m-d H:i:s");

    $enqui = $insertStatus = $this->Common_Model->add_operation(array('table' => 'enquiry', 'data' => $enter_data));


  }







  public function pageNotFound()
  {
    $this->data['meta_title'] = _project_name_ . " - Page Not Found";
    $this->data['meta_description'] = _project_name_ . " - Page Not Found";
    $this->data['meta_keywords'] = _project_name_ . " - Page Not Found";
    $this->data['meta_others'] = "";

    $this->load->view('pageNotFound', $this->data);
  }

  public function found404()
  {
    $this->data['meta_title'] = _project_name_ . " - 404 found";
    $this->data['meta_description'] = _project_name_ . " - 404 found";
    $this->data['meta_keywords'] = _project_name_ . " - 404 found";
    $this->data['meta_others'] = "";

    parent::getHeader('header', $this->data);
    $this->load->view('404found', $this->data);
    parent::getFooter('footer', $this->data);
  }


  public function contact()
  {
    $this->data['meta_title'] = _project_name_ . " - Contact Us";
    $this->data['meta_description'] = _project_name_ . " - Contact Us";
    $this->data['meta_keywords'] = _project_name_ . " - Contact Us";
    $this->data['meta_others'] = "";

    parent::getHeader('header', $this->data);
    $this->load->view('contact');
    parent::getFooter('footer', $this->data);
  }


  public function story()
  {

    $this->data['meta_title'] = _project_name_ . " - Story";
    $this->data['meta_description'] = _project_name_ . " - Story";
    $this->data['meta_keywords'] = _project_name_ . " - Story";
    $this->data['meta_others'] = "";

    parent::getHeader('header', $this->data);
    $this->load->view('story');
    parent::getFooter('footer', $this->data);
  }

  public function gallery()
  {
    $this->data['meta_title'] = _project_name_ . " - Gallery";
    $this->data['meta_description'] = _project_name_ . " - Gallery";
    $this->data['meta_keywords'] = _project_name_ . " - Gallery";
    $this->data['meta_others'] = "";

    parent::getHeader('header', $this->data);
    $this->load->view('gallery');
    parent::getFooter('footer', $this->data);
  }
  public function videos()
  {

    $this->data['meta_title'] = _project_name_ . " - Videos";
    $this->data['meta_description'] = _project_name_ . " - Videos";
    $this->data['meta_keywords'] = _project_name_ . " - Videos";
    $this->data['meta_others'] = "";

    parent::getHeader('header', $this->data);
    $this->load->view('videos');
    parent::getFooter('footer', $this->data);
  }
  public function international_tours()
  {
    $this->data['meta_title'] = _project_name_ . " - International Tours";
    $this->data['meta_description'] = _project_name_ . " - International Tours";
    $this->data['meta_keywords'] = _project_name_ . " - International Tours";
    $this->data['meta_others'] = "";

    parent::getHeader('header', $this->data);
    $this->load->view('international-tours');
    parent::getFooter('footer', $this->data);
  }
  public function domestic_tours()
  {
    $this->data['meta_title'] = _project_name_ . " - Domestic Tours";
    $this->data['meta_description'] = _project_name_ . " - Domestic Tours";
    $this->data['meta_keywords'] = _project_name_ . " - Domestic Tours";
    $this->data['meta_others'] = "";


    parent::getHeader('header', $this->data);
    $this->load->view('domestic-tours');
    parent::getFooter('footer', $this->data);
  }


  public function blog()
  {
    $this->data['meta_title'] = _project_name_ . " - Blog";
    $this->data['meta_description'] = _project_name_ . " - Blog";
    $this->data['meta_keywords'] = _project_name_ . " - Blog";
    $this->data['meta_others'] = "";


    parent::getHeader('header', $this->data);
    $this->load->view('blog');
    parent::getFooter('footer', $this->data);
  }


}
