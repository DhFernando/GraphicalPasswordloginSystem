<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('loginPage.php');
	}

	public function regPage(){
		$this->load->view('regPage.php');
	}
	public function loginPage(){
		$this->load->view('loginPage.php');
	}
	public function log(){
		$this->load->view('log.php');
	}
	public function createnote(){
		$this->load->view('createnote.php');
	}


	public function register(){
		$this->form_validation->set_rules('fname','fname','required');
		$this->form_validation->set_rules('lname','lname','required');
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('Mpw','Mpw','required');

		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('regMzg','validation Fail');
				redirect('welcome/regPage');

		}else{

			// uplord pro pic
			$config['upload_path']='./assets/img/picsOFusers';
			$config['allowed_types']='gif|png|jpeg|jpg';
			$config['max_size']='10048';
			$config['max_width']='10000';
			$config['max_height']='10000';
			
			$this->load->library('upload',$config);

			if(!$this->upload->do_upload()){
				$errors=array('error'=>$this->upload->display_errors());
				$url='no.png';
				echo $errors[error];
				die();
					
			}else{
				$data=array('upload_data'=>$this->upload->data());
				$url=$_FILES['userfile']['name']; 
			}


			 $this->load->model('query');
			 $response=$this->query->insertUserData($url);

			if($response){
				$this->session->set_flashdata('regMzg','Register Succses');
				foreach($response->result() as $row){
					$this->session->set_flashdata('Pid',$row->Pid);	
					redirect('welcome/regPage');
				}
				
			}else{
				$this->session->set_flashdata('regMzg','Register Fail');
				redirect('welcome/');
			}

		}

	}
	public function picPW(){
		$this->form_validation->set_rules('PX','PX','required');
		$this->form_validation->set_rules('PY','PY','required');
		if(!$this->form_validation->run()){

		}else{
			$Pid=$_GET['Pid'];
			$this->load->model('query');
			$response=$this->query->picPWQ($Pid);
			if($response){
				redirect('welcome/loginPage?RegistrationComplete!!');
			}
		}

	}

	public function login(){
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('Mpw','Mpw','required');

		if(!$this->form_validation->run()){
			redirect('welcome/loginPage');
		}else{
			$this->load->model('query');
			$response=$this->query->login();

			if($response){
				$viewerdata=array(
					'uid'=>$response->uid,
					'fname'=>$response->fname,
					'lname'=>$response->lname,
					'email'=>$response->email,
					'Pid'=>$response->Pid,
					'loggedIn'=>TRUE
				);
				$this->session->set_userdata($viewerdata);
				$Pid=$_SESSION['Pid'];
				$this->session->set_flashdata('Pid',$Pid);
				redirect('welcome/loginPage');	

			}else{
				redirect('welcome/loginPage');
			}
		}
	}

	public function picPWVeryfy(){
		$PX=$this->input->post('PX',TRUE);
		$PY=$this->input->post('PY',TRUE);
		$PX1=$this->input->post('PX1',TRUE);
		$PY1=$this->input->post('PY1',TRUE);
		$PX2=$this->input->post('PX2',TRUE);
        $PY2=$this->input->post('PY2',TRUE);
		$this->load->model('query');
		$response=$this->query->picPWVeryfy();
		if($response->num_rows()>0){
            foreach($response->result() as $row){
				$_PX = $row->PX;
				$_PY = $row->PY;
				$_PX1 = $row->PX1;
				$_PY1 = $row->PY1;
				$_PX2 = $row->PX2;
				$_PY2 = $row->PY2;
				if($_PX-5<$PX && $_PX+5>$PX){
					if($_PY-5<$PY && $_PY+5>$PY){
						if($_PX1-5<$PX1 && $_PX1+5>$PX1){
							if($_PY1-5<$PY1 && $_PY1+5>$PY1){
								if($_PX2-5<$PX2 && $_PX2+5>$PX2){
									if($_PY2-5<$PY2 && $_PY2+5>$PY2){
										redirect('welcome/log?uid='.$_SESSION['uid']);
									}
								}else{
									redirect('welcome/loginPage');
								}
							}else{
								redirect('welcome/loginPage');
							}
						}else{
							redirect('welcome/loginPage');
						}
					}else{
						redirect('welcome/loginPage');
					}
				}else{
					redirect('welcome/loginPage');
				}
            }
       }else{
			
       }
	}
	
	public function logout(){
		$this->session->unset_userdata('uid');
		$this->session->unset_userdata('fname');
		$this->session->unset_userdata('lname');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('Pid');
		$this->session->unset_userdata('loggedIn');

		redirect('welcome/loginPage');	

	}

	public function uplordnote(){
		$this->form_validation->set_rules('notetopic','notetopic','required');
		$this->form_validation->set_rules('note','note','required');
		if(!$this->form_validation->run()){

		}else{
			$this->load->model('query');
			$response=$this->query->uplordnote();
			if($response){
				redirect('welcome/log');
			}

		}

	}

}

	