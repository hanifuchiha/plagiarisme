<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("login/index"));
        }
    }

    public function index()
    {
        $data['dataabstrak']=$this->admin_model->abstrak();        
        $data['datahasil']=$this->admin_model->uji();
        //$data['dataabstrakhasil']=$this->admin_model->dataabstrak();
        $this->load->view('admin/index',$data);
        
    }

    public function admin(){
    	$data['dataadmin']=$this->admin_model->dataadmin();
    	$this->load->view('admin/viewadmin',$data);
    }

    public function pengaturan()
    {
    	$data['data']=$this->admin_model->datapengaturan();
    	$this->load->view('admin/viewpengaturan',$data);
    	//print_r($data);
    }
    public function saveabstrak(){
    	$this->admin_model->savedataabstrak();
    	?>
    	<script type="text/javascript">
    		alert("Data Berhasil Di save");

    	</script>
    	<?php
    	$this->load->view("admin/index" );
    }


   
}
