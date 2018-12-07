<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
//		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{

		$data['sliders'] = $this->Home_model->get_data('slider');
		$data['about'] = $this->Home_model->get_data('about');
		$data['products'] = $this->Home_model->get_data('products');
		$data['services'] = $this->Home_model->get_data('services');
		$data['partners'] = $this->Home_model->get_data('partners');
		$data['jobs'] = $this->Home_model->get_data('career');
		$data['news'] = $this->Home_model->get_data('news');
		$data['contacts'] = $this->Home_model->get_data('our_contacts');


		$this->load->view('home/home', $data);

	}

	public function product_details($id)
	{

		$data['data'] = $this->Home_model->get_details('products', $id);
		$data['products'] = $this->Home_model->get_data('products');
		$data['contacts'] = $this->Home_model->get_data('our_contacts');

		$this->load->view('home/product_details', $data);
	}

	public function service_details($id)
	{

		$data['data'] = $this->Home_model->get_details('services', $id);
		$data['services'] = $this->Home_model->get_data('services');
		$data['contacts'] = $this->Home_model->get_data('our_contacts');

		$this->load->view('home/service_details', $data);
	}


	public function job_details($id)
	{

		$data['data'] = $this->Home_model->get_details('career', $id);
		$data['jobs'] = $this->Home_model->get_data('career');
		$data['contacts'] = $this->Home_model->get_data('our_contacts');

		$this->load->view('home/job_details', $data);
	}

	public function news_details($id)
	{

		$data['data'] = $this->Home_model->get_details('news', $id);
		$data['news'] = $this->Home_model->get_data('news');
		$data['contacts'] = $this->Home_model->get_data('our_contacts');

		$this->load->view('home/news_details', $data);
	}

	public function contact_fn()
	{
		$this->load->library('form_validation');

		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'subject' => $this->input->post('subject'),
			'phone' => $this->input->post('phone'),
			'message' => $this->input->post('message')
		);
		if ($this->Home_model->insert_contact($data) == true) {
//			echo "<script>alert('Your Message sent Successfully');</script>";
//			$this->session->set_flashdata('notification_sucess', 'Your Message sent Successfully');
//			redirect('home');
			echo '<div class="alert alert-success">Your message sent successfully</div>';
		} else {
//			$this->session->set_flashdata('notification_error', 'Oops! Error.  Please try again !');
//			redirect('home');
			echo '<div class="alert alert-error">Error occured, Please try again</div>';
		}
	}


}
