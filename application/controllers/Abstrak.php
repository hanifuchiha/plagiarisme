<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Abstrak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Abstrak_model');
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("login/index"));
        }
    }

    public function index()
    {
        $data['dataabstrakhasil']=$this->Abstrak_model->dataabstrak();
        $this->load->view('abstrak/viewabstrak',$data);
        
    }

    public function ujiabstrak(){
         $data['dataabstrakhasil']=$this->Abstrak_model->datauji();
        $this->load->view('abstrak/viewujiabstrak',$data);
    }
    public function saveabstrak(){
    /*	$this->admin_model->savedataabstrak();
    	?>
    	<script type="text/javascript">
    		alert("Data Berhasil Di save");

    	</script>
    	<?php
    	$this->load->view("admin/index" );*/
    }


   
}
