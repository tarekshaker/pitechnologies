<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Admin_model');

		// This Libaray For CRUD
		$this->load->library('grocery_CRUD');
		//$this->grocery_crud->set_theme('datatables');

		$function = $this->uri->segment('2');
		if ($this->session->userdata('admin_logged_in') !== true && strtolower($function) != 'login') {
			redirect('admin/login');
		} else if ($this->session->userdata('admin_logged_in') === true && strtolower($function) == 'login') {
			redirect('admin/dashboard');
		}

	}

	private function admin_view($view = null, $data = null)
	{
		$this->load->view('admin/includes/header', $data);
		$this->load->view('admin/' . $view, $data);
		$this->load->view('admin/includes/footer', $data);
	}


	public function login()
	{
		$data['auth_error'] = '';
		if ($this->input->post('admin_login')) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run() !== FALSE) {
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$userdata = $this->Admin_model->authenticate($username, $password);
				if ($userdata === false) {
					$data ['auth_error'] = 'The username and password don\'t match.';
				} else {
					$this->session->set_userdata(array(
						'admin_username' => $userdata['username'],
						'admin_full_name' => $userdata['full_name'],
						'admin_user_id' => $userdata['id'],
						'admin_logged_in' => true
					));
					$this->session->set_flashdata('notification_success', "You have successfully logged in.");

					redirect('admin/dashboard');
				}
			}
		}

		$this->load->view('admin/login', $data);

	}

	public function logout()
	{
		if ($this->session->userdata('admin_logged_in') === true) {
			$this->session->unset_userdata(array('admin_logged_in', 'admin_username', 'admin_full_name'));
			redirect('admin/login');
		}
	}

	public function index()
	{
		redirect('admin/dashboard');
	}


	public function dashboard()
	{
		$this->admin_view('dashboard');
	}


	public function slider()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('slider');
		$crud->set_subject('slide');
		$crud->required_fields('image', 'text', 'active');

		$crud->set_field_upload('image', 'uploads/slider_images');

		$data['crud_output'] = $crud->render();
		$this->admin_view('crud_output', $data);
	}

	public function services()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('services');
		$crud->set_subject('service');
		$crud->required_fields('title', 'logo', 'description');
		$crud->required_fields('image', 'text', 'active');
		$crud->set_field_upload('image', 'uploads/services/');
		$crud->unique_fields(array('title'));
		$crud->callback_add_field('logo', function () {
			return '<input type="text" maxlength="50" value="" name="logo"><br><p style="color:gray;"> <i class="fa fa-info-circle"></i> Please click <a href="http://fontawesome.io/3.2.1/icons/" target="_blank">here</a> to be redirected to a page that views the logos, choose one and type it\'s name here.</p><p style="color:gray; margin:0 0 0 2.5%;"> Please copy the name without the word "icon-". Example: to choose "icon-home" type "home"</p>';
		});
		$crud->callback_column('logo', array($this, 'view_logo'));

		$data['crud_output'] = $crud->render();
		$this->admin_view('crud_output', $data);
	}

	public function careers()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('career');
		$crud->set_subject('job');
		$crud->required_fields('title', 'logo','description', 'active');
//		$crud->unset_add();
		$crud->set_field_upload('image', './uploads/careers', "jpeg|jpg|png");
		$crud->callback_add_field('logo', function () {
			return '<input type="text" maxlength="50" value="" name="logo"><br><p style="color:gray;"> <i class="fa fa-info-circle"></i> Please click <a href="http://fontawesome.io/3.2.1/icons/" target="_blank">here</a> to be redirected to a page that views the logos, choose one and type it\'s name here.</p><p style="color:gray; margin:0 0 0 2.5%;"> Please copy the name without the word "icon-". Example: to choose "icon-home" type "home"</p>';
		});

		$crud->callback_column('logo', array($this, 'view_logo'));
		$data['crud_output'] = $crud->render();
		$this->admin_view('crud_output', $data);
	}

	public function about()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('about');
		$crud->set_subject('info');
		$crud->required_fields('title', 'description', 'active');
		$crud->unique_fields(array('title'));
		$crud->callback_add_field('logo', function () {
			return '<input type="text" maxlength="50" value="" name="logo"><br><p style="color:gray;"> <i class="fa fa-info-circle"></i> Please click <a href="http://fontawesome.io/3.2.1/icons/" target="_blank">here</a> to be redirected to a page that views the logos, choose one and type it\'s name here.</p><p style="color:gray; margin:0 0 0 2.5%;"> Please copy the name without the word "icon-". Example: to choose "icon-home" type "home"</p>';
		});
//		$crud->callback_column('logo',array($this,'view_logo'));
		$crud->set_field_upload('logo', 'uploads/about');
		//$crud->set_rules('is_active','is active','callback_active_info');

		$data['crud_output'] = $crud->render();
		$this->admin_view('crud_output', $data);
	}

	public function products()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('products');
		$crud->set_subject('info');
		$crud->required_fields('title', 'image', 'description', 'active');
		$crud->set_field_upload('image', './uploads/products');

		//$crud->callback_add_field('image', function () {
		//return '<input type="text" maxlength="50" value="" name="image"><br><p style="color:gray;"> <i class="fa fa-info-circle"></i> Please click <a href="http://fontawesome.io/3.2.1/icons/" target="_blank">here</a> to be redirected to a page that views the logos, choose one and type it\'s name here.</p><p style="color:gray; margin:0 0 0 2.5%;"> Please copy the name without the word "icon-". Example: to choose "icon-home" type "home"</p>' ;
		//});
		//$crud->callback_column('image',array($this,'view_logo'));
		//$crud->set_rules('is_active','is active','callback_active_info');

		$data['crud_output'] = $crud->render();
		$this->admin_view('crud_output', $data);
	}

	public function partners()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('partners');
		$crud->set_subject('info');
		$crud->required_fields('title', 'image', 'description', 'active');
		$crud->set_field_upload('image', './uploads/partners');

		//$crud->callback_add_field('image', function () {
		//return '<input type="text" maxlength="50" value="" name="image"><br><p style="color:gray;"> <i class="fa fa-info-circle"></i> Please click <a href="http://fontawesome.io/3.2.1/icons/" target="_blank">here</a> to be redirected to a page that views the logos, choose one and type it\'s name here.</p><p style="color:gray; margin:0 0 0 2.5%;"> Please copy the name without the word "icon-". Example: to choose "icon-home" type "home"</p>' ;
		//});
		//$crud->callback_column('image',array($this,'view_logo'));
		//$crud->set_rules('is_active','is active','callback_active_info');

		$data['crud_output'] = $crud->render();
		$this->admin_view('crud_output', $data);
	}

	function active_info()
	{
		$this->load->model('Admin_model');
		$this->form_validation->set_message('active_info', "You cannot have more than 2 active info");
		return $this->Admin_model->active_info_num();
	}


	public function view_logo($value, $row)
	{
		return '<i class="fa fa-' . $value . '"></i><p style="font-size: 50%;">' . $value . '</p>';
	}


	public function visitor_contacts()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');

		$crud->set_table('visitor_contacts');
		$crud->unset_columns('message');
		//$crud->columns('name','email','phone','message');
		$crud->required_fields('name', 'email', 'phone', 'message');
		$crud->unset_add();

		$data['crud_output'] = $crud->render();
		$this->admin_view('crud_output', $data);
	}

	public function our_contacts()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');

		$crud->set_table('our_contacts');
		$crud->fields('facebook', 'twitter', 'linkedin', 'google', 'youtube', 'phone', 'email', 'address', 'active');
		$crud->columns('facebook', 'twitter', 'linkedin', 'google', 'youtube', 'phone', 'email', 'address', 'active');
		// $crud->unique_fields('phone','email');
		$crud->required_fields('phone', 'email', 'active');
		$crud->unset_add();

		$data['crud_output'] = $crud->render();
		$this->admin_view('crud_output', $data);
	}


	public function news()
	{


		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('news');
		$crud->columns('title','author', 'image', 'start_date', 'end_date', 'description');
		$crud->required_fields('title','author', 'image', 'start_date', 'end_date', 'description');
		$crud->set_field_upload('image', 'uploads/news', "jpeg|jpg|png");

		//$crud->set_rules('start_date','start date','callback_after_today[start_date]');
		$crud->set_rules('start_date', 'start date', 'required|callback_after_today[start_date]');
		$crud->set_rules('end_date', 'end_date', 'required|callback_compareDates');
		//$crud->set_rules('start_date', 'start_date', 'callback_compareDate');

		//$crud->set_rules('end_date', 'end_date', 'callback_compareDate');
		//$crud->where('start_date >',$now);
		//$crud->where('end_date >',$now);
		//$crud->or_where('start_date >',$now);


		$data['crud_output'] = $crud->render();
		$this->admin_view('crud_output', $data);
	}


	public function compareDates()
	{

		$start = $this->input->post('start_date');
		$start = explode('/', $start);
		$start = join('-', $start);

		$end = $this->input->post('end_date');
		$end = explode('/', $end);
		$end = join('-', $end);

		if (strtotime($end) >= strtotime($start)) {
			return TRUE;
		} else {
			$this->form_validation->set_message('compareDates', "End Date must be after Start Date");
			return FALSE;
		}

	}

	public function after_today($start_date)
	{
		$partes = explode('/', $this->input->post('start_date'));
		$start_date_value = join('-', $partes);
		//$dt = new DateTime();
		$now = date("d-m-Y");

		if (strtotime($start_date_value) >= strtotime($now)) {
			return true;
		} else {
			$this->form_validation->set_message('after_today', "The start date must after today or today");
			return FALSE;
		}


	}

	public function jobs()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('jobs');
		$crud->required_fields('title', 'image', 'description', 'active');
		$crud->set_field_upload('image', './uploads', "jpeg|jpg|png");
		$data['crud_output'] = $crud->render();
		$this->admin_view('crud_output', $data);
	}


}
