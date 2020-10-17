<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Abstrak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Abstrak_model');
        $this->load->model('Admin_model');
        if ($this->session->userdata('status') != "login") {
            redirect(site_url("login/index"));
        }
    }

    function get_mysqli() { 
$db = (array)get_instance()->db;
return mysqli_connect('localhost', $db['root'], $db[''], $db['rabinkarps']);}

    public function index()
    {
        $data['dataabstrakhasil']=$this->Abstrak_model->dataabstrak();
        $this->load->view('abstrak/viewabstrak',$data);
        
    }

    public function ujiabstrak(){
         $data['dataabstrakhasil']=$this->Abstrak_model->datauji();
        $this->load->view('abstrak/viewujiabstrak',$data);
    }
    public function add()
    {
         $this->load->view('abstrak/inputabstrak');
    }
    public function saveabstrak(){
     require_once 'asset\config\function.php';
     $data=$this->Admin_model->datapengaturan();
     foreach ($data as $value) {
       
     }
     //json_encode($value);
     $kgram=$value->kgram;
     $prima=$value->prima;
     $judul=$this->input->post("judul");
     $abstrak=strip_tags($_POST["abstrak"]);
     $form = $abstrak;
    $tokenizing=strip_stopwords(clean($form));                    
    $steaming = explode(' ',($tokenizing));
    $output   = $stemmer->stem($tokenizing);
    $x= katahubung($output); 
    $bacangram =getNgrams("$x","$kgram","$prima");  
    $columns = implode(",",array_keys($bacangram));
    $escaped_values = array_values($bacangram);
    $values  = implode(",", $escaped_values);
    $digits = 4;
    $randomid =  str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);

    $dataasli=array(
        'id' => $randomid,
        'judul' => $judul,
        'abstrak' =>$abstrak

    );
    $datauji=array(
        'id' => $randomid,
        'judul' => $judul,
        'abstrak' =>$values

    );

    $this->Abstrak_model->savedataabstrak($dataasli,'abstrak_asli');
    $this->Abstrak_model->saveabstrakuji($datauji,'abstrak_uji');
    
    //echo json_encode($values);
    // var_dump($data);
    // echo $data[0];
       /*   
        $this->admin_model->savedataabstrak();
        ?>
        <script type="text/javascript">
            alert("Data Berhasil Di save");

        </script>
        <?php
        $this->load->view("abstrak/index" );
      }*/}
    


   
}
