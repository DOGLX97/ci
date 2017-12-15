<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function regist()
	{
		$this->load->view('regist');
	}
	public function save(){

		//1.接收数据
		$username=$this->input->post('username');
		$pwd=$this->input->post('pwd');
		$repwd=$this->input->post('repwd');		

		$flag=TRUE;
		$data=array();
		if($username==''){
			$flag=FALSE;
			$data['err_name']="请输入用户名";
		}
		if($pwd!=$repwd){
			$flag=FALSE;
			$data['err_pwd']="两次密码不一致";			
		}
		if(!$flag){
		 	$this->load->view('regist',$data);
		}

		//2.验证

		//3.链接数据库

		//4.加载views
	}
}
