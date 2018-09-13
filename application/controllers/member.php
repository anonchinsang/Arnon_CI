<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class member extends CI_Controller {
	public function index()
	{
		$this->load->view('main_view');
	}
	public function adddog()
	{
		$this->load->view('adddog_view');
	}
	public function doghotel()
	{
		$this->load->view('doghotel_view');
	}
	public function addcat()
	{
		$this->load->view('addcat_view');
	}
	public function photo()
	{
		$this->load->view('photo_view');
	}
	public function login()
	{
		$this->load->view('logins_view');
	}
	public function add_dog()
	{
		$data=array(
		'id_dog'=> $this->input->get('id'),
		'name_dog'=> $this->input->get('name_dog'),
		'breed_dog'=> $this->input->get('breed'),
		'nature_dog'=> $this->input->get('nature'),
		'date_dog'=> $this->input->get('date'),
		'dates_dog'=> $this->input->get('dates')
		);
		$this->db->insert("dog",$data);
		redirect("./member/doghome","refresh");
		exit();
	}
	public function add_cat()
	{
		$data=array(
		'id_cat'=> $this->input->get('id_cat'),
		'name_cat'=> $this->input->get('name_cat'),
		'breed_cat'=> $this->input->get('breed_cat'),
		'nature_cat'=> $this->input->get('nature_cat'),
		'date_cat'=> $this->input->get('date_cat'),
		'dates_cat'=> $this->input->get('dates_cat')
		);
		$this->db->insert("cat",$data);
		redirect("./member/cathome","refresh");
		exit();
	}
	public function doghome(){
		$sql ="SELECT * FROM dog";
		$rs=$this->db->query($sql);
		$data['rs']=$rs->result_array();
		$this->load->view("doghome_view",$data);
}
public function cathome(){
		$sql ="SELECT * FROM cat";
		$rs=$this->db->query($sql);
		$data['rs']=$rs->result_array();
		$this->load->view("cathome_view",$data);
}
	public function del_dog($id){
		$this->db->delete('dog',array('id_dog'=>$id));
		redirect("./member/doghome","refresh");
		exit();
	}
	public function del_cat($id){
		$this->db->delete('cat',array('id_cat'=>$id));
		redirect("./member/cathome","refresh");
		exit();
	}
	public function updatedog($id){
		$data=array(
		'id_dog'=> $this->input->POST('id'),
		'name_dog'=> $this->input->POST('name_dog'),
		'breed_dog'=> $this->input->POST('breed'),
		'nature_dog'=> $this->input->POST('nature'),
		'date_dog'=> $this->input->POST('date'),
		'dates_dog'=> $this->input->POST('dates')
	);
		$this->db->where('id_dog',$id);
		$this->db->update('dog',$data);
		redirect("./member/doghome","refresh");
		exit();
	}
	public function updatecat($id){
		$data=array(
		'id_cat'=> $this->input->POST('id_cat'),
		'name_cat'=> $this->input->POST('name_cat'),
		'breed_cat'=> $this->input->POST('breed_cat'),
		'nature_cat'=> $this->input->POST('nature_cat'),
		'date_cat'=> $this->input->POST('date_cat'),
		'dates_cat'=> $this->input->POST('dates_cat')
	);
		$this->db->where('id_cat',$id);
		$this->db->update('cat',$data);
		redirect("./member/cathome","refresh");
		exit();
	}
	public function edit_dog($id){
		$sql="SELECT * FROM dog WHERE id_dog=$id";
		$rs=$this->db->query($sql);
		$data['rs']=$rs->row_array();
		$this->load->view("editdog_view",$data);
		//$this->input->POST('id');
	}
	public function edit_cat($id){
		$sql="SELECT * FROM cat WHERE id_cat=$id";
		$rs=$this->db->query($sql);
		$data['rs']=$rs->row_array();
		$this->load->view("editcat_view",$data);
		//$this->input->POST('id');
	}

	public function chk_login()

	{	
		$username  = $this->input->post('username');
		$password  = $this->input->post('password');

	$numr = $this->db->query("SELECT * from admin where username='$username' && password='$password'");
		$chknum = $numr->num_rows();
		if($chknum==1){ 

			foreach ($numr->result() as $row)
			{
			   
			    $name =$row->username;
				$id =$row->id;

			$data = array(
				'id'=>$id,
				'username'=>$name
						);
			//$this->session->set_userdata($data);

			//if($status=="admin"){
			redirect("./member/index","refresh");
		///admin
			//if($status=="user"){
			//redirect("welcome/user_index","refresh");
		///user
		
		}
	}
	////user&pass OK
		else{
			echo "no";
			echo "SELECT * from admin where name='$username' && password='$password'";
		}
	
	
}
}