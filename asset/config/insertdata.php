<style>
td {
	padding:5px;
}
</style>

<?php
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn, 'ujirabin');
function bacaHTML($url){
     // inisialisasi CURL
     $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     // menjalankan CURL untuk membaca isi file
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}


include"function.php";

#ganti link halaman
$kode = bacaHTML('http://ojs.amikom.ac.id/index.php/semnasteknomedia/issue/view/57');

$pecah = explode('<td class="tocArticleTitleAuthors">', $kode);
$jumlah = count($pecah);
echo "<table border='1px'>";
for($i=1;$i<200;$i++) {
	$pecah1 = explode('<div class="tocAuthors">', $pecah[$i]);
	$pecah2 = explode('<a href="', $pecah1[0]);
	$pecah3 = explode('">', $pecah2[1]);
	$judul_kt = explode('</a>', $pecah3[1]);
	$link = $pecah3[0];
	$judul = $judul_kt[0];
	
	$page_abs = bacaHTML($link);
	$pecah_abs1 = explode('<h4>Abstract</h4>', $page_abs);
	$pecah_abs2 = explode('<div id="articleFullText">', $pecah_abs1[1]);
	$abstrak =  strip_tags($pecah_abs2[0]);
	
	
    
    
    $form = $abstrak;
$tokenizing=strip_stopwords(clean($form));                    
$steaming = explode(' ',($tokenizing));
// include composer autoloader

$output   = $stemmer->stem($tokenizing);
$x9= katahubung($output); 
   $id=1;
    $pengaturan = $conn->query("SELECT * from pengaturan where id='$id'");
    $getdata=$pengaturan->fetch_array();
    $kgram=$getdata['kgram']; 
    $prima=$getdata['prima']; 
$readngram9 =getNgrams("$x9","$kgram","$prima"); 
  
$columns = implode(",",array_keys($readngram9));
$escaped_values = array_map('mysql_real_escape_string', array_values($readngram9));
$values  = implode(",", $escaped_values);

    $digits = 4;
$randomid =  str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
$conn->query("insert into abstrak_asli(id,judul,abstrak) values('$randomid','$judul','$abstrak')");
$conn->query("insert into abstrak_uji(id,judul,abstrak) values('$randomid','$judul','$values')");
    
    
    

	
}
echo "</table>";
?>
