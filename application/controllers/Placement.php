<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Placement extends CI_Controller
{

	public $courseTypes = array("UG" => "Under Graduation", "PG" => "Post Graduation", "Ph.D" => "Ph.D");
	public $staffType = array('1' => 'Regular', '2' => 'Tenure', '3' => 'Visiting');
	public $designationType = array('1' => 'Professor', '2' => 'Associate Professor', '3' => 'Assistant Professor');

	function __construct()
	{
		parent::__construct();
		$this->CI = &get_instance();
		$this->load->model('admin_model', '', TRUE);
		$this->load->library(array('table', 'form_validation'));
		$this->load->helper(array('form', 'form_helper'));
		date_default_timezone_set('Asia/Kolkata');
		ini_set('upload_max_filesize', '50M');
	}

	function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
		if ($this->form_validation->run() == FALSE) {
			$data['pageTitle'] = "Placement Login";
			$data['action'] = 'placement-manage';

			$this->login_template->show('placement/Login', $data);
		} else {
			$username = $this->input->post('username');
			redirect('placement/dashboard', 'refresh');
		}
	}

	function check_database($password)
	{
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');

		//query the database
		$result = $this->admin_model->deptLogin($username, md5($password));
		if ($result) {
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'id' => $row->id,
					'department_name' => $row->department_name,
					'short_name' => $row->short_name,
					'username' => $row->username
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		} else {
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}

	function dashboard()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['department_name'] = $session_data['department_name'];
			$data['short_name'] = $session_data['short_name'];
			$data['pageTitle'] = "Dashboard";
			$data['activeMenu'] = "dashboard";
			$this->placement_template->show('placement/Dashboard', $data);
		} else {
			redirect('placement-manage', 'refresh');
		}
	}

	function changePassword()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['department_name'] = $session_data['department_name'];
			$data['short_name'] = $session_data['short_name'];
			$data['pageTitle'] = "Dashboard";
			$data['activeMenu'] = "changePassword";
			$data['action'] = 'placement/changePassword';

			$this->form_validation->set_rules('oldPassword', 'Old Password', 'required');
			$this->form_validation->set_rules('newPassword', 'New Password', 'required');
			if ($this->form_validation->run() === FALSE) {
				$data['oldPassword'] = '';
				$data['newPassword'] = '';
				$this->placement_template->show('placement/changePassword', $data);
			} else {
				$oldPassword = $this->input->post('oldPassword');
				$newPassword = $this->input->post('newPassword');

				if ($oldPassword == $newPassword) {
					$this->session->set_flashdata('message', '<h5 class="text-success">Old and New Password should not be same...!</h5>');
				} else {
					$updateDetails = array('password' => md5($newPassword));
					$result = $this->admin_model->changePassword($data['id'], $oldPassword, $updateDetails, 'departments');
					if ($result) {
						$this->session->set_flashdata('message', '<h5 class="text-success">Password udpated successfully...!</h5>');
					} else {
						$this->session->set_flashdata('message', '<h5 class="text-danger">Oops something went wrong please try again.!</h5>');
					}
				}
				redirect('placement/changePassword', 'refresh');
			}
		} else {
			redirect('placement-manage', 'refresh');
		}
	}

	function documents()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['department_name'] = $session_data['department_name'];
			$data['short_name'] = $session_data['short_name'];
			$data['pageTitle'] = "Placement Records";
			$data['activeMenu'] = "documents";

			$Details = $this->admin_model->getDetailsbyfield($data['id'], 'dept_id', 'accredited_documents')->result();

			if ($Details != null) {
				$table_setup = array('table_open' => '<table class="table table-bordered table-hover js-dataTable-full" id="dataTable" width="100%" cellspacing="0">');
				$this->table->set_template($table_setup);
				$this->table->set_heading(
					array('data' => 'S.No', 'width' => '5%'),
					array('data' => 'Details', 'width' => '80%'),
					array('data' => 'Action', 'width' => '15%')
				);
				$i = 1;
				foreach ($Details as $Details1) {

					if ($Details1->file_type == 'F') {
						$fileName = ($Details1->details) ? $Details1->details : '--';
						$files = $Details1->file_names;
						$files1 = pathinfo($files, PATHINFO_FILENAME);
						$name = str_replace('_', ' ', $files1);

						$btn = '<div class="btn-group">
					' . anchor('assets/departments/' . $data['short_name'] . '/documents/' . $files, '<i class="fa fa-fw fa-download"></i>', 'class="btn btn-sm btn-success" data-toggle="tooltip" title="Download" target="_blank"') . '
					' . anchor('placement/deleteDocuments/' . $Details1->file_type . '/' . $Details1->id, '<i class="fa fa-fw fa-times"></i>', 'class="btn btn-sm btn-danger" data-toggle="tooltip" title="Remove"') . '
					</div>';

						$download = anchor('assets/departments/' . $data['short_name'] . '/documents/' . $files, $fileName, 'target="_blank"');
					}

			
					$this->table->add_row($i++, $fileName, $btn);
				}
				$data['table'] = $this->table->generate();
			} else {
				$data['table'] = '<h4 class="text-center text-muted mb-5 mt-5 pb-5 pt-5"> Documents not yet created..! </h4>';
			}
			$this->placement_template->show('placement/accredited_documents', $data);
		} else {
			redirect('placement-manage', 'refresh');
		}
	}

	function addDocuments()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['department_name'] = $session_data['department_name'];
			$data['short_name'] = $session_data['short_name'];
			$data['pageTitle'] = "Add Placement Records";
			$data['activeMenu'] = "documents";

			$this->form_validation->set_rules('details', 'Title', 'trim');
			$this->form_validation->set_rules('files', 'File Name', 'trim');

			if ($this->form_validation->run() === FALSE) {
				$data['action'] = 'placement/addDocuments/';
				$data['btn_name'] = 'Add';

				$data['details'] = $this->input->post('details');
				$data['files'] = $this->input->post('files');

				$this->placement_template->show('placement/addDocuments', $data);
			} else {

				$filename = null;
				if (!empty($_FILES['files']['name'])) {
					//   $config['upload_path'] = 'assets/latest_news/'; 
					$config['upload_path'] = './assets/departments/' . $data['short_name'] . '/documents/';
					$config['allowed_types'] = 'pdf';
					$config['max_size'] = '30000';
					$config['encrypt_name'] = TRUE;

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('files')) {
						$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];

						$insertDetails = array(
							'dept_id' => $data['id'],
							'details' => $this->input->post('details'),
							'file_names' => $filename,
							'file_type' => 'F',
							'last_updated' => date('Y-m-d h:i:s')
						);
						$res = $this->admin_model->insertDetails('accredited_documents', $insertDetails);
						if ($res) {
							$this->session->set_flashdata('message', 'Accredit Details inserted successfully...!');
							$this->session->set_flashdata('status', 'alert-success');
						} else {
							$this->session->set_flashdata('message', 'Oops something went wrong please try again.!');
							$this->session->set_flashdata('status', 'alert-danger');
						}
					} else {
						$this->session->set_flashdata('message', 'Oops something went wrong please try again.!');
						$this->session->set_flashdata('status', 'alert-danger');
					}
				} else {
					$this->session->set_flashdata('message', 'Oops something went wrong please try again.!');
					$this->session->set_flashdata('status', 'alert-danger');
				}
				redirect('placement/documents', 'refresh');
			}
		} else {
			redirect('placement-manage', 'refresh');
		}
	}

	function deleteDocuments($file_type, $id)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['department_name'] = $session_data['department_name'];
			$data['short_name'] = $session_data['short_name'];
			$data['pageTitle'] = "Remove Accredited Documents";
			$data['activeMenu'] = "documents";
			$data['eid'] = $id;

			if ($file_type == "F") {
				$Details = $this->admin_model->getDetails('accredited_documents', $id)->row();
				if ($Details->file_names) {

					$fileName = $Details->file_names;
					$url = glob('./assets/departments/' . $data['short_name'] . '/documents/' . $fileName);
					if ($url) {
						unlink($url[0]);
					}
					// array_splice($fileNames, $filenameID, 1); 
				}
			}

			$this->admin_model->delDetails('accredited_documents', $id);
			$this->session->set_flashdata('message', 'Details deleted successfully...!');
			$this->session->set_flashdata('status', 'alert-success');

			redirect('placement/documents', 'refresh');
		} else {
			redirect('placement-manage', 'refresh');
		}
	}

	
	function softSkill()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['pageTitle'] = "Soft Skill";
			$data['activeMenu'] = "softSkill";

			$data['softSkill'] = $this->admin_model->getLatestEvents($data['id'])->result();

			$this->placement_template->show('placement/softSkill', $data);
		} else {
			redirect('placement', 'refresh');
		}
	}

	function addsoftSkill()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['department_name'] = $session_data['department_name'];
			$data['short_name'] = $session_data['short_name'];
			$data['pageTitle'] = "Add Soft Skill";
			$data['activeMenu'] = "softSkill";
			$data['action'] = 'placement/addsoftSkill';

			$data['newsDisplay'] = array(' ' => "Select") + $this->globals->newsDisplay1();

			$this->form_validation->set_rules('news_title', 'Title', 'required');
			
			if ($this->form_validation->run() === FALSE) {
				$this->placement_template->show('placement/addsoftSkill', $data);
			} else {

				$fileNames = [];
				$count = count($_FILES['files']['name']);
				for ($i = 0; $i < $count; $i++) {

					if (!empty($_FILES['files']['name'][$i])) {

						$_FILES['file']['name'] = $_FILES['files']['name'][$i];
						$_FILES['file']['type'] = $_FILES['files']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
						$_FILES['file']['error'] = $_FILES['files']['error'][$i];
						$_FILES['file']['size'] = $_FILES['files']['size'][$i];

						//   $config['upload_path'] = 'assets/latest_news/'; 
						$config['upload_path'] = './assets/departments/' . $data['short_name'] . '/softskill/';
						$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
						$config['max_size'] = '5000';
						//   $config['file_name'] = $_FILES['files']['name'][$i];

						$this->load->library('upload', $config);

						if ($this->upload->do_upload('file')) {
							$uploadData = $this->upload->data();
							$filename = $uploadData['file_name'];
							$fileNames[] = $filename;
						}
					}
				}


				// print_r($this->input->post('news_details'));
				// die();
				$insertData = array(
					'news_title' => $this->input->post('news_title'),
					'news_slug' => $this->create_unique_slug($this->input->post('news_title')),
					'news_date' => date('Y-m-d H:i:s'),
					'news_details' => $this->input->post('news_details'),
					'files' => serialize($fileNames),
					'display_in' => '4',
					
					'dept_id' => $data['id'],
					'new_label' => 0,
					'status' => '1'
				);


				$result = $this->admin_model->insertDetails('events', $insertData);
				if ($result) {
					$this->session->set_flashdata('message', 'Soft Skill created successfully...!');
					$this->session->set_flashdata('status', 'alert-success');
				} else {
					$this->session->set_flashdata('message', 'Oops something went wrong please try again.!');
					$this->session->set_flashdata('status', 'alert-danger');
				}
				redirect('placement/softSkill', 'refresh');
			}
		} else {
			redirect('placement', 'refresh');
		}
	}

	function editsoftSkill($id)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');

			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['department_name'] = $session_data['department_name'];
			$data['short_name'] = $session_data['short_name'];
			$data['pageTitle'] = "Edit Soft Skill";
			$data['activeMenu'] = "softSkill";
			$data['action'] = 'placement/editsoftSkill/' . $id;

			$data['newsDisplay'] = array(' ' => "Select") + $this->globals->newsDisplay1();
			$data['Details'] = $this->admin_model->getDetails('events', $id)->row();

			$this->form_validation->set_rules('news_title', 'Title', 'required');
			
			if ($this->form_validation->run() === FALSE) {

				$this->placement_template->show('placement/editsoftSkill', $data);
			} else {

				$fileNames = unserialize($data['Details']->files);
				$count = count($_FILES['files']['name']);
				for ($i = 0; $i < $count; $i++) {

					if (!empty($_FILES['files']['name'][$i])) {

						$_FILES['file']['name'] = $_FILES['files']['name'][$i];
						$_FILES['file']['type'] = $_FILES['files']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
						$_FILES['file']['error'] = $_FILES['files']['error'][$i];
						$_FILES['file']['size'] = $_FILES['files']['size'][$i];

						$config['upload_path'] = './assets/departments/' . $data['short_name'] . '/softskill/';
						$config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
						$config['max_size'] = '10000';
						//   $config['file_name'] = $_FILES['files']['name'][$i];

						$this->load->library('upload', $config);

						if ($this->upload->do_upload('file')) {
							$uploadData = $this->upload->data();
							$filename = $uploadData['file_name'];
							$fileNames[] = $filename;
						}
					}
				}

				$updateDetails = array(
					'news_title' => $this->input->post('news_title'),
					'news_slug' => $this->create_unique_slug($this->input->post('news_title')),
					'news_date' => date('Y-m-d H:i:s'),
					'news_details' => $this->input->post('news_details'),
					'files' => serialize($fileNames),
					'new_label' => 0,
					'display_in' => '4'
				);

				$result = $this->admin_model->updateDetails($id, $updateDetails, 'events');

				if ($result) {
					$this->session->set_flashdata('message', 'Soft Skill updated successfully...!');
					$this->session->set_flashdata('status', 'alert-success');
				} else {
					$this->session->set_flashdata('message', 'Oops something went wrong please try again.!');
					$this->session->set_flashdata('status', 'alert-danger');
				}
				redirect('placement/softSkill', 'refresh');
			}
		} else {
			redirect('placement', 'refresh');
		}
	}

	function viewsoftSkill($id)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['pageTitle'] = "View Soft Skill";
			$data['activeMenu'] = "softSkill";

			$data['newsDisplay'] = array('0' => "") + $this->globals->newsDisplay1();

			$data['softSkill'] = $this->admin_model->getDetails('events', $id)->row();

			$this->placement_template->show('placement/viewsoftSkill', $data);
		} else {
			redirect('placement', 'refresh');
		}
	}

	function softSkillDelete($id, $filenameID)
	{
		if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');

            $data['id'] = $session_data['id'];
            $data['username'] = $session_data['username'];
            $data['department_name'] = $session_data['department_name'];
            $data['short_name'] = $session_data['short_name'];

			$data['pageTitle'] = "View Soft Skill";
			$data['activeMenu'] = "softSkill";

			$softSkill = $this->admin_model->getDetails('events', $id)->row();

			$fileNames = unserialize($softSkill->files);
			$url = glob('./assets/departments/' . $data['short_name'] . '/softskill/' . $fileNames[$filenameID]);
			if ($url) {
				unlink($url[0]);
			}
			array_splice($fileNames, $filenameID, 1);

			$updateDetails = array('files' => serialize($fileNames));

			$result = $this->admin_model->updateDetails($id, $updateDetails, 'events');

			if ($result) {
				$this->session->set_flashdata('message', 'Attachment file removed successfully...!');
				$this->session->set_flashdata('status', 'alert-success');
			} else {
				$this->session->set_flashdata('message', 'Oops something went wrong please try again.!');
				$this->session->set_flashdata('status', 'alert-danger');
			}

			redirect('placement/editsoftSkill/' . $id, 'refresh');
		} else {
			redirect('placement', 'refresh');
		}
	}

	function updatesoftSkillStatus($id, $status)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['pageTitle'] = "View Soft Skill";
			$data['activeMenu'] = "softSkill";

			$updateDetails = array('status' => $status);

			$result = $this->admin_model->updateDetails($id, $updateDetails, 'events');

			if ($result) {
				$this->session->set_flashdata('message', 'Soft Skill status updated successfully...!');
				$this->session->set_flashdata('status', 'alert-success');
			} else {
				$this->session->set_flashdata('message', 'Oops something went wrong please try again.!');
				$this->session->set_flashdata('status', 'alert-danger');
			}
			redirect('placement/softSkill', 'refresh');
		} else {
			redirect('placement', 'refresh');
		}
	}

	function updatesoftSkillLabel($id, $status)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['pageTitle'] = "View Soft Skill";
			$data['activeMenu'] = "softSkill";

			$updateDetails = array('new_label' => $status);

			$result = $this->admin_model->updateDetails($id, $updateDetails, 'events');

			if ($result) {
				$this->session->set_flashdata('message', 'New Label status updated successfully...!');
				$this->session->set_flashdata('status', 'alert-success');
			} else {
				$this->session->set_flashdata('message', 'Oops something went wrong please try again.!');
				$this->session->set_flashdata('status', 'alert-danger');
			}
			redirect('placement/softSkill', 'refresh');
		} else {
			redirect('placement', 'refresh');
		}
	}


	function deletesoftSkill($id)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['pageTitle'] = "View Soft Skill";
			$data['activeMenu'] = "softSkill";

			$softSkill = $this->admin_model->getDetails('events', $id)->row();
			if ($softSkill->files != '') {
				$fileNames = unserialize($softSkill->files);
				foreach ($fileNames as $fileNames1) {
					$url = glob('./assets/softskill/' . $fileNames1);
					if ($url) {
						unlink($url[0]);
					}
				}
			}

			$this->admin_model->delDetails('events', $id);

			$this->session->set_flashdata('message', 'Soft Skill deleted successfully...!');
			$this->session->set_flashdata('status', 'alert-success');

			redirect('placement/softSkill', 'refresh');
		} else {
			redirect('placement', 'refresh');
		}
	}

	function create_unique_slug($string, $table = 'latest_news', $field = 'news_slug', $key = NULL, $value = NULL)
	{
		$t = &get_instance();
		$slug = url_title($string);
		$slug = strtolower($slug);
		$i = 0;
		$params = array();
		$params[$field] = $slug;

		if ($key) $params["$key !="] = $value;

		while ($t->db->where($params)->get($table)->num_rows()) {
			if (!preg_match('/-{1}[0-9]+$/', $slug))
				$slug .= '-' . ++$i;
			else
				$slug = preg_replace('/[0-9]+$/', ++$i, $slug);

			$params[$field] = $slug;
		}
		return $slug;
	}






	function sliders()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['department_name'] = $session_data['department_name'];
			$data['short_name'] = $session_data['short_name'];
			$data['pageTitle'] = "Banners";
			$data['activeMenu'] = "sliders";
			$data['action'] = 'placement/addSlider';

			$details = $this->admin_model->getDetailsbyfield2( 'dept_id',$data['id'], 'academic_year','1', 'sliders')->result();

			if ($details != null) {
				$table_setup = array('table_open' => '<table class="table table-bordered table-hover js-dataTable-full" id="dataTable" width="100%" cellspacing="0">');
				$this->table->set_template($table_setup);
				$this->table->set_heading(
					array('data' => 'S.No', 'width' => '5%'),
					
					array('data' => 'Image', 'width' => '65%'),
					array('data' => 'Action', 'width' => '15%')
				);
				$i = 1;
				foreach ($details as $details1) {

					$btn = '<div class="btn-group">
							
							' . anchor('placement/deleteSlider/' . $details1->id, '<i class="fa fa-fw fa-times"></i>', 'class="btn btn-sm btn-danger" data-toggle="tooltip" title="Remove Slider"') . '
						</div>';

					if ($details1->file_name) {
						$file = '<img src="'.base_url().'assets/departments/'.$data['short_name'].'/sliders/'.$details1->file_name.'" width="150px"></img>';
					} else {
						$file = null;
					}

		
					$this->table->add_row(
						$i++,
					
						 $file ,
						$btn
					);
				}
				$data['table'] = $this->table->generate();
			} else {
				$data['table'] = '<h4 class="text-center text-muted mb-5 mt-5 pb-5 pt-5"> Slider details not yet created..! </h4>';
			}

			$this->placement_template->show('placement/sliders', $data);
		} else {
			redirect('placement', 'refresh');
		}
	}




	
	function addSlider()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['department_name'] = $session_data['department_name'];
			$data['short_name'] = $session_data['short_name'];
			$data['pageTitle'] = "Add Banner";
			$data['activeMenu'] = "sliders";
			$data['cancel'] = 'placement/sliders';
			$this->form_validation->set_rules('banner', 'Files', 'required');
			if ($this->form_validation->run() === FALSE) {
				$data['action'] = 'placement/addSlider';
				
				$this->placement_template->show('placement/addSlider', $data);
			} else {
				$filename = null;
				if (!empty($_FILES['files']['name'])) {
					$config['upload_path'] = './assets/departments/' . $data['short_name'] . '/sliders/';
					$config['allowed_types'] = 'png|jpg|jpeg';
					$config['max_size'] = '30000';

					$this->load->library('upload', $config);
					if ($this->upload->do_upload('files')) {
						$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];
					} else {
						$filename = '';
					}
				} else {
					$filename = '';
				}

				$insertData = array(
					'dept_id' => $data['id'],
					'academic_year'=>1,
					'file_name' => $filename
				
				);

				$res = $this->admin_model->insertDetails('sliders', $insertData);
				if ($res) {
					$this->session->set_flashdata('message', 'Slider Details inserted successfully...!');
					$this->session->set_flashdata('status', 'alert-success');
				} else {
					$this->session->set_flashdata('message', 'Oops something went wrong please try again.!');
					$this->session->set_flashdata('status', 'alert-danger');
				}
				redirect('placement/sliders', 'refresh');
			}
		} else {
			redirect('placement', 'refresh');
		}
	}

	function deleteSlider($id)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['department_name'] = $session_data['department_name'];
			$data['short_name'] = $session_data['short_name'];
			$data['pageTitle'] = "Delete Slider";
			$data['activeMenu'] = "sliders";

			$Details = $this->admin_model->getDetails('sliders', $id)->row();
			if ($Details->file_names) {

				$fileName = $Details->file_names;
				$url = glob('./assets/departments/' . $data['short_name'] . '/sliders/' . $fileName);
				if ($url) {
					unlink($url[0]);
				}
			}

			$this->admin_model->delDetails('sliders', $id);

			$this->session->set_flashdata('message', 'Slider Details deleted successfully...!');
			$this->session->set_flashdata('status', 'alert-warning');

			redirect('placement/sliders', 'refresh');
		} else {
			redirect('placement', 'refresh');
		}
	}


	function overview()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['department_name'] = $session_data['department_name'];
			$data['short_name'] = $session_data['short_name'];
			$data['pageTitle'] = "About Placement Policy";
			$data['activeMenu'] = "overview";

			$data['departmentsDetails'] = $this->admin_model->getDetailsbyfield($data['id'], 'department_id', 'departments_data')->row();

			$this->placement_template->show('placement/overview', $data);
		} else {
			redirect('placement', 'refresh');
		}
	}

	function editOverview()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['department_name'] = $session_data['department_name'];
			$data['short_name'] = $session_data['short_name'];
			$data['pageTitle'] = "Update Placement Policy";
			$data['activeMenu'] = "overview";

			$this->form_validation->set_rules('about', 'About Department', 'required');
			$this->form_validation->set_rules('vision', 'Vision', 'required');
			$this->form_validation->set_rules('mission', 'Mission', 'required');
			if ($this->form_validation->run() === FALSE) {
				$data['action'] = 'placement/editOverview/';
				$data['departmentsDetails'] = $this->admin_model->getDetailsbyfield($data['id'], 'department_id', 'departments_data')->row();
				$this->placement_template->show('placement/editoverview', $data);
			} else {
				$updateDetails = array(
					'about' => $this->input->post('about'),
					'vision' => $this->input->post('vision'),
					'mission' => $this->input->post('mission'),
					'updated_by' => $data['username'],
					'updated_on' => date('Y-m-d h:i:s')
				);
				$result = $this->admin_model->updateDetailsbyfield('department_id', $data['id'], $updateDetails, 'departments_data');
				if ($result) {
					$this->session->set_flashdata('message', 'Details udpated successfully...!');
					$this->session->set_flashdata('status', 'alert-success');
				} else {
					$this->session->set_flashdata('message', 'Oops something went wrong please try again.!');
					$this->session->set_flashdata('status', 'alert-danger');
				}
				redirect('placement/overview', 'refresh');
			}
		} else {
			redirect('placement', 'refresh');
		}
	}


	function policy_documents()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['department_name'] = $session_data['department_name'];
			$data['short_name'] = $session_data['short_name'];
			$data['pageTitle'] = "Placement Policy Documents";
			$data['activeMenu'] = "policy";
			$data['add'] = "placement/addpolicy_documents";
			$Details = $this->admin_model->getDetailsbyfield2( 'dept_id',$data['id'], 'type','1', 'placement_documents')->result();
			if ($Details != null) {
				$table_setup = array('table_open' => '<table class="table table-bordered table-hover js-dataTable-full" id="dataTable" width="100%" cellspacing="0">');
				$this->table->set_template($table_setup);
				$this->table->set_heading(
					array('data' => 'S.No', 'width' => '5%'),
					array('data' => 'Details', 'width' => '80%'),
					array('data' => 'Action', 'width' => '15%')
				);
				$i = 1;
				foreach ($Details as $Details1) {

					if ($Details1->file_type == 'F') {
						$fileName = ($Details1->details) ? $Details1->details : '--';
						$files = $Details1->file_names;
						$files1 = pathinfo($files, PATHINFO_FILENAME);
						$name = str_replace('_', ' ', $files1);

						$btn = '<div class="btn-group">
					' . anchor('assets/departments/' . $data['short_name'] . '/placement/' . $files, '<i class="fa fa-fw fa-download"></i>', 'class="btn btn-sm btn-success" data-toggle="tooltip" title="Download" target="_blank"') . '
					' . anchor('placement/deletepolicy_documents/' . $Details1->file_type . '/' . $Details1->id, '<i class="fa fa-fw fa-times"></i>', 'class="btn btn-sm btn-danger" data-toggle="tooltip" title="Remove"') . '
					</div>';

						$download = anchor('assets/departments/' . $data['short_name'] . '/placement/' . $files, $fileName, 'target="_blank"');
					}

			
					$this->table->add_row($i++, $fileName, $btn);
				}
				$data['table'] = $this->table->generate();
			} else {
				$data['table'] = '<h4 class="text-center text-muted mb-5 mt-5 pb-5 pt-5"> Documents not yet created..! </h4>';
			}
			$this->placement_template->show('placement/placement_documents', $data);
		} else {
			redirect('placement-manage', 'refresh');
		}
	}

	function addpolicy_documents()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['department_name'] = $session_data['department_name'];
			$data['short_name'] = $session_data['short_name'];
			$data['pageTitle'] = "Add Placement Policy Documents";
			$data['activeMenu'] = "policy";
			$data['cancel'] = "placement/placement_documents";
			$this->form_validation->set_rules('details', 'Title', 'trim');
			$this->form_validation->set_rules('files', 'File Name', 'trim');

			if ($this->form_validation->run() === FALSE) {
				$data['action'] = 'placement/addpolicy_documents/';
				$data['btn_name'] = 'Add';

				$data['details'] = $this->input->post('details');
				$data['files'] = $this->input->post('files');

				$this->placement_template->show('placement/addpolicy_documents', $data);
			} else {

				$filename = null;
				if (!empty($_FILES['files']['name'])) {
					//   $config['upload_path'] = 'assets/latest_news/'; 
					$config['upload_path'] = './assets/departments/' . $data['short_name'] . '/placement/';
					$config['allowed_types'] = 'pdf';
					$config['max_size'] = '30000';
					$config['encrypt_name'] = TRUE;

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('files')) {
						$uploadData = $this->upload->data();
						$filename = $uploadData['file_name'];

						$insertDetails = array(
							'dept_id' => $data['id'],
							'details' => $this->input->post('details'),
							'file_names' => $filename,
							'type' => 1,
							'file_type' => 'F',
							'last_updated' => date('Y-m-d h:i:s')
						);
						$res = $this->admin_model->insertDetails('placement_documents', $insertDetails);
						if ($res) {
							$this->session->set_flashdata('message', 'Accredit Details inserted successfully...!');
							$this->session->set_flashdata('status', 'alert-success');
						} else {
							$this->session->set_flashdata('message', 'Oops something went wrong please try again.!');
							$this->session->set_flashdata('status', 'alert-danger');
						}
					} else {
						$this->session->set_flashdata('message', 'Oops something went wrong please try again.!');
						$this->session->set_flashdata('status', 'alert-danger');
					}
				} else {
					$this->session->set_flashdata('message', 'Oops something went wrong please try again.!');
					$this->session->set_flashdata('status', 'alert-danger');
				}
				redirect('placement/policy_documents', 'refresh');
			}
		} else {
			redirect('placement-manage', 'refresh');
		}
	}

	function deletepolicy_documents($file_type, $id)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['department_name'] = $session_data['department_name'];
			$data['short_name'] = $session_data['short_name'];
			$data['pageTitle'] = "Remove Accredited Documents";
			$data['activeMenu'] = "documents";
			$data['eid'] = $id;

			if ($file_type == "F") {
				$Details = $this->admin_model->getDetails('placement_documents', $id)->row();
				if ($Details->file_names) {

					$fileName = $Details->file_names;
					$url = glob('./assets/departments/' . $data['short_name'] . '/placement/' . $fileName);
					if ($url) {
						unlink($url[0]);
					}
					// array_splice($fileNames, $filenameID, 1); 
				}
			}

			$this->admin_model->delDetails('placement_documents', $id);
			$this->session->set_flashdata('message', 'Details deleted successfully...!');
			$this->session->set_flashdata('status', 'alert-success');

			redirect('placement/policy_documents', 'refresh');
		} else {
			redirect('placement-manage', 'refresh');
		}
	}


	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('placement-manage', 'refresh');
	}
	
	

}
