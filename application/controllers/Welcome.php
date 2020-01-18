<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function simpan_data(){
		$firstname=$this->input->post('firstname');
		$lastname=$this->input->post('lastname');
		$gender=$this->input->post('general');
		$date=$this->input->post('date');
		$category=$this->input->post('category');
		$membership=$this->input->post('membership');
		$this->load->model('Moduas');
		$this->Moduas->simpan_data($firstname,$lastname,$general,$data,$category,$membership);

		$data['pesan']="Sukses Guys...";
		$this->template->load("theme","welcome_message",$data);

	}

	public function home(){
    $data="Welcome";
    $this->template->load("theme","welcome_message",$data);

  }
  public function form(){
    $data="input_form";
    $this->template->load("theme","formuas",$data);

  }

}
