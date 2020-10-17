<?php

$stopwords=array('ada'=>'1','adalah'=>'2','adanya'=>'3','adapun'=>'4','agak'=>'5','agaknya'=>'6','agar'=>'7','akan'=>'8','akankah'=>'9','akhir'=>'10','akhiri'=>'11','akhirnya'=>'12','aku'=>'13','akulah'=>'14','amat'=>'15','amatlah'=>'16','anda'=>'17','andalah'=>'18','antar'=>'19','antara'=>'20','antaranya'=>'21','apa'=>'22','apaan'=>'23','apabila'=>'24','apakah'=>'25','apalagi'=>'26','apatah'=>'27','artinya'=>'28','asal'=>'29','asalkan'=>'30','atas'=>'31','atau'=>'32','ataukah'=>'33','ataupun'=>'34','awal'=>'35','awalnya'=>'36','bagai'=>'37','bagaikan'=>'38','bagaimana'=>'39','bagaimanakah'=>'40','bagaimanapun'=>'41','bagi'=>'42','bagian'=>'43','bahkan'=>'44','bahwa'=>'45','bahwasanya'=>'46','baik'=>'47','bakal'=>'48','bakalan'=>'49','balik'=>'50','banyak'=>'51','bapak'=>'52','baru'=>'53','bawah'=>'54','beberapa'=>'55','begini'=>'56','beginian'=>'57','beginikah'=>'58','beginilah'=>'59','begitu'=>'60','begitukah'=>'61','begitulah'=>'62','begitupun'=>'63','bekerja'=>'64','belakang'=>'65','belakangan'=>'66','belum'=>'67','belumlah'=>'68','benar'=>'69','benarkah'=>'70','benarlah'=>'71','berada'=>'72','berakhir'=>'73','berakhirlah'=>'74','berakhirnya'=>'75','berapa'=>'76','berapakah'=>'77','berapalah'=>'78','berapapun'=>'79','berarti'=>'80','berawal'=>'81','berbagai'=>'82','berdatangan'=>'83','beri'=>'84','berikan'=>'85','berikut'=>'86','berikutnya'=>'87','berjumlah'=>'88','berkali-kali'=>'89','berkata'=>'90','berkehendak'=>'91','berkeinginan'=>'92','berkenaan'=>'93','berlainan'=>'94','berlalu'=>'95','berlangsung'=>'96','berlebihan'=>'97','bermacam'=>'98','bermacam-macam'=>'99','bermaksud'=>'100','bermula'=>'101','bersama'=>'102','bersama-sama'=>'103','bersiap'=>'104','bersiap-siap'=>'105','bertanya'=>'106','bertanya-tanya'=>'107','berturut'=>'108','berturut-turut'=>'109','bertutur'=>'110','berujar'=>'111','berupa'=>'112','besar'=>'113','betul'=>'114','betulkah'=>'115','biasa'=>'116','biasanya'=>'117','bila'=>'118','bilakah'=>'119','bisa'=>'120','bisakah'=>'121','boleh'=>'122','bolehkah'=>'123','bolehlah'=>'124','buat'=>'125','bukan'=>'126','bukankah'=>'127','bukanlah'=>'128','bukannya'=>'129','bulan'=>'130','bung'=>'131','cara'=>'132','caranya'=>'133','cukup'=>'134','cukupkah'=>'135','cukuplah'=>'136','cuma'=>'137','dahulu'=>'138','dalam'=>'139','dan'=>'140','dapat'=>'141','dari'=>'142','daripada'=>'143','datang'=>'144','dekat'=>'145','demi'=>'146','demikian'=>'147','demikianlah'=>'148','dengan'=>'149','depan'=>'150','di'=>'151','dia'=>'152','diakhiri'=>'153','diakhirinya'=>'154','dialah'=>'155','diantara'=>'156','diantaranya'=>'157','diberi'=>'158','diberikan'=>'159','diberikannya'=>'160','dibuat'=>'161','dibuatnya'=>'162','didapat'=>'163','didatangkan'=>'164','digunakan'=>'165','diibaratkan'=>'166','diibaratkannya'=>'167','diingat'=>'168','diingatkan'=>'169','diinginkan'=>'170','dijawab'=>'171','dijelaskan'=>'172','dijelaskannya'=>'173','dikarenakan'=>'174','dikatakan'=>'175','dikatakannya'=>'176','dikerjakan'=>'177','diketahui'=>'178','diketahuinya'=>'179','dikira'=>'180','dilakukan'=>'181','dilalui'=>'182','dilihat'=>'183','dimaksud'=>'184','dimaksudkan'=>'185','dimaksudkannya'=>'186','dimaksudnya'=>'187','diminta'=>'188','dimintai'=>'189','dimisalkan'=>'190','dimulai'=>'191','dimulailah'=>'192','dimulainya'=>'193','dimungkinkan'=>'194','dini'=>'195','dipastikan'=>'196','diperbuat'=>'197','diperbuatnya'=>'198','dipergunakan'=>'199','diperkirakan'=>'200','diperlihatkan'=>'201','diperlukan'=>'202','diperlukannya'=>'203','dipersoalkan'=>'204','dipertanyakan'=>'205','dipunyai'=>'206','diri'=>'207','dirinya'=>'208','disampaikan'=>'209','disebut'=>'210','disebutkan'=>'211','disebutkannya'=>'212','disini'=>'213','disinilah'=>'214','ditambahkan'=>'215','ditandaskan'=>'216','ditanya'=>'217','ditanyai'=>'218','ditanyakan'=>'219','ditegaskan'=>'220','ditujukan'=>'221','ditunjuk'=>'222','ditunjuki'=>'223','ditunjukkan'=>'224','ditunjukkannya'=>'225','ditunjuknya'=>'226','dituturkan'=>'227','dituturkannya'=>'228','diucapkan'=>'229','diucapkannya'=>'230','diungkapkan'=>'231','dong'=>'232','dua'=>'233','dulu'=>'234','empat'=>'235','enggak'=>'236','enggaknya'=>'237','entah'=>'238','entahlah'=>'239','guna'=>'240','gunakan'=>'241','hal'=>'242','hampir'=>'243','hanya'=>'244','hanyalah'=>'245','hari'=>'246','harus'=>'247','haruslah'=>'248','harusnya'=>'249','hendak'=>'250','hendaklah'=>'251','hendaknya'=>'252','hingga'=>'253','ia'=>'254','ialah'=>'255','ibarat'=>'256','ibaratkan'=>'257','ibaratnya'=>'258','ibu'=>'259','ikut'=>'260','ingat'=>'261','ingat-ingat'=>'262','ingin'=>'263','inginkah'=>'264','inginkan'=>'265','ini'=>'266','inikah'=>'267','inilah'=>'268','itu'=>'269','itukah'=>'270','itulah'=>'271','jadi'=>'272','jadilah'=>'273','jadinya'=>'274','jangan'=>'275','jangankan'=>'276','janganlah'=>'277','jauh'=>'278','jawab'=>'279','jawaban'=>'280','jawabnya'=>'281','jelas'=>'282','jelaskan'=>'283','jelaslah'=>'284','jelasnya'=>'285','jika'=>'286','jikalau'=>'287','juga'=>'288','jumlah'=>'289','jumlahnya'=>'290','justru'=>'291','kala'=>'292','kalau'=>'293','kalaulah'=>'294','kalaupun'=>'295','kalian'=>'296','kami'=>'297','kamilah'=>'298','kamu'=>'299','kamulah'=>'300','kan'=>'301','kapan'=>'302','kapankah'=>'303','kapanpun'=>'304','karena'=>'305','karenanya'=>'306','kasus'=>'307','kata'=>'308','katakan'=>'309','katakanlah'=>'310','katanya'=>'311','ke'=>'312','keadaan'=>'313','kebetulan'=>'314','kecil'=>'315','kedua'=>'316','keduanya'=>'317','keinginan'=>'318','kelamaan'=>'319','kelihatan'=>'320','kelihatannya'=>'321','kelima'=>'322','keluar'=>'323','kembali'=>'324','kemudian'=>'325','kemungkinan'=>'326','kemungkinannya'=>'327','kenapa'=>'328','kepada'=>'329','kepadanya'=>'330','kesampaian'=>'331','keseluruhan'=>'332','keseluruhannya'=>'333','keterlaluan'=>'334','ketika'=>'335','khususnya'=>'336','kini'=>'337','kinilah'=>'338','kira'=>'339','kira-kira'=>'340','kiranya'=>'341','kita'=>'342','kitalah'=>'343','kok'=>'344','kurang'=>'345','lagi'=>'346','lagian'=>'347','lah'=>'348','lain'=>'349','lainnya'=>'350','lalu'=>'351','lama'=>'352','lamanya'=>'353','lanjut'=>'354','lanjutnya'=>'355','lebih'=>'356','lewat'=>'357','lima'=>'358','luar'=>'359','macam'=>'360','maka'=>'361','makanya'=>'362','makin'=>'363','malah'=>'364','malahan'=>'365','mampu'=>'366','mampukah'=>'367','mana'=>'368','manakala'=>'369','manalagi'=>'370','masa'=>'371','masalah'=>'372','masalahnya'=>'373','masih'=>'374','masihkah'=>'375','masing'=>'376','masing-masing'=>'377','mau'=>'378','maupun'=>'379','melainkan'=>'380','melakukan'=>'381','melalui'=>'382','melihat'=>'383','melihatnya'=>'384','memang'=>'385','memastikan'=>'386','memberi'=>'387','memberikan'=>'388','membuat'=>'389','memerlukan'=>'390','memihak'=>'391','meminta'=>'392','memintakan'=>'393','memisalkan'=>'394','memperbuat'=>'395','mempergunakan'=>'396','memperkirakan'=>'397','memperlihatkan'=>'398','mempersiapkan'=>'399','mempersoalkan'=>'400','mempertanyakan'=>'401','mempunyai'=>'402','memulai'=>'403','memungkinkan'=>'404','menaiki'=>'405','menambahkan'=>'406','menandaskan'=>'407','menanti'=>'408','menanti-nanti'=>'409','menantikan'=>'410','menanya'=>'411','menanyai'=>'412','menanyakan'=>'413','mendapat'=>'414','mendapatkan'=>'415','mendatang'=>'416','mendatangi'=>'417','mendatangkan'=>'418','menegaskan'=>'419','mengakhiri'=>'420','mengapa'=>'421','mengatakan'=>'422','mengatakannya'=>'423','mengenai'=>'424','mengerjakan'=>'425','mengetahui'=>'426','menggunakan'=>'427','menghendaki'=>'428','mengibaratkan'=>'429','mengibaratkannya'=>'430','mengingat'=>'431','mengingatkan'=>'432','menginginkan'=>'433','mengira'=>'434','mengucapkan'=>'435','mengucapkannya'=>'436','mengungkapkan'=>'437','menjadi'=>'438','menjawab'=>'439','menjelaskan'=>'440','menuju'=>'441','menunjuk'=>'442','menunjuki'=>'443','menunjukkan'=>'444','menunjuknya'=>'445','menurut'=>'446','menuturkan'=>'447','menyampaikan'=>'448','menyangkut'=>'449','menyatakan'=>'450','menyebutkan'=>'451','menyeluruh'=>'452','menyiapkan'=>'453','merasa'=>'454','mereka'=>'455','merekalah'=>'456','merupakan'=>'457','meski'=>'458','meskipun'=>'459','meyakini'=>'460','meyakinkan'=>'461','minta'=>'462','mirip'=>'463','misal'=>'464','misalkan'=>'465','misalnya'=>'466','mula'=>'467','mulai'=>'468','mulailah'=>'469','mulanya'=>'470','mungkin'=>'471','mungkinkah'=>'472','nah'=>'473','naik'=>'474','namun'=>'475','nanti'=>'476','nantinya'=>'477','nyaris'=>'478','nyatanya'=>'479','oleh'=>'480','olehnya'=>'481','pada'=>'482','padahal'=>'483','padanya'=>'484','pak'=>'485','paling'=>'486','panjang'=>'487','pantas'=>'488','para'=>'489','pasti'=>'490','pastilah'=>'491','penting'=>'492','pentingnya'=>'493','per'=>'494','percuma'=>'495','perlu'=>'496','perlukah'=>'497','perlunya'=>'498','pernah'=>'499','persoalan'=>'500','pertama'=>'501','pertama-tama'=>'502','pertanyaan'=>'503','pertanyakan'=>'504','pihak'=>'505','pihaknya'=>'506','pukul'=>'507','pula'=>'508','pun'=>'509','punya'=>'510','rasa'=>'511','rasanya'=>'512','rata'=>'513','rupanya'=>'514','saat'=>'515','saatnya'=>'516','saja'=>'517','sajalah'=>'518','saling'=>'519','sama'=>'520','sama-sama'=>'521','sambil'=>'522','sampai'=>'523','sampai-sampai'=>'524','sampaikan'=>'525','sana'=>'526','sangat'=>'527','sangatlah'=>'528','satu'=>'529','saya'=>'530','sayalah'=>'531','se'=>'532','sebab'=>'533','sebabnya'=>'534','sebagai'=>'535','sebagaimana'=>'536','sebagainya'=>'537','sebagian'=>'538','sebaik'=>'539','sebaik-baiknya'=>'540','sebaiknya'=>'541','sebaliknya'=>'542','sebanyak'=>'543','sebegini'=>'544','sebegitu'=>'545','sebelum'=>'546','sebelumnya'=>'547','sebenarnya'=>'548','seberapa'=>'549','sebesar'=>'550','sebetulnya'=>'551','sebisanya'=>'552','sebuah'=>'553','sebut'=>'554','sebutlah'=>'555','sebutnya'=>'556','secara'=>'557','secukupnya'=>'558','sedang'=>'559','sedangkan'=>'560','sedemikian'=>'561','sedikit'=>'562','sedikitnya'=>'563','seenaknya'=>'564','segala'=>'565','segalanya'=>'566','segera'=>'567','seharusnya'=>'568','sehingga'=>'569','seingat'=>'570','sejak'=>'571','sejauh'=>'572','sejenak'=>'573','sejumlah'=>'574','sekadar'=>'575','sekadarnya'=>'576','sekali'=>'577','sekali-kali'=>'578','sekalian'=>'579','sekaligus'=>'580','sekalipun'=>'581','sekarang'=>'582','sekarang'=>'583','sekecil'=>'584','seketika'=>'585','sekiranya'=>'586','sekitar'=>'587','sekitarnya'=>'588','sekurang-kurangnya'=>'589','sekurangnya'=>'590','sela'=>'591','selain'=>'592','selaku'=>'593','selalu'=>'594','selama'=>'595','selama-lamanya'=>'596','selamanya'=>'597','selanjutnya'=>'598','seluruh'=>'599','seluruhnya'=>'600','semacam'=>'601','semakin'=>'602','semampu'=>'603','semampunya'=>'604','semasa'=>'605','semasih'=>'606','semata'=>'607','semata-mata'=>'608','semaunya'=>'609','sementara'=>'610','semisal'=>'611','semisalnya'=>'612','sempat'=>'613','semua'=>'614','semuanya'=>'615','semula'=>'616','sendiri'=>'617','sendirian'=>'618','sendirinya'=>'619','seolah'=>'620','seolah-olah'=>'621','seorang'=>'622','sepanjang'=>'623','sepantasnya'=>'624','sepantasnyalah'=>'625','seperlunya'=>'626','seperti'=>'627','sepertinya'=>'628','sepihak'=>'629','sering'=>'630','seringnya'=>'631','serta'=>'632','serupa'=>'633','sesaat'=>'634','sesama'=>'635','sesampai'=>'636','sesegera'=>'637','sesekali'=>'638','seseorang'=>'639','sesuatu'=>'640','sesuatunya'=>'641','sesudah'=>'642','sesudahnya'=>'643','setelah'=>'644','setempat'=>'645','setengah'=>'646','seterusnya'=>'647','setiap'=>'648','setiba'=>'649','setibanya'=>'650','setidak-tidaknya'=>'651','setidaknya'=>'652','setinggi'=>'653','seusai'=>'654','sewaktu'=>'655','siap'=>'656','siapa'=>'657','siapakah'=>'658','siapapun'=>'659','sini'=>'660','sinilah'=>'661','soal'=>'662','soalnya'=>'663','suatu'=>'664','sudah'=>'665','sudahkah'=>'666','sudahlah'=>'667','supaya'=>'668','tadi'=>'669','tadinya'=>'670','tahu'=>'671','tahun'=>'672','tak'=>'673','tambah'=>'674','tambahnya'=>'675','tampak'=>'676','tampaknya'=>'677','tandas'=>'678','tandasnya'=>'679','tanpa'=>'680','tanya'=>'681','tanyakan'=>'682','tanyanya'=>'683','tapi'=>'684','tegas'=>'685','tegasnya'=>'686','telah'=>'687','tempat'=>'688','tengah'=>'689','tentang'=>'690','tentu'=>'691','tentulah'=>'692','tentunya'=>'693','tepat'=>'694','terakhir'=>'695','terasa'=>'696','terbanyak'=>'697','terdahulu'=>'698','terdapat'=>'699','terdiri'=>'700','terhadap'=>'701','terhadapnya'=>'702','teringat'=>'703','teringat-ingat'=>'704','terjadi'=>'705','terjadilah'=>'706','terjadinya'=>'707','terkira'=>'708','terlalu'=>'709','terlebih'=>'710','terlihat'=>'711','termasuk'=>'712','ternyata'=>'713','tersampaikan'=>'714','tersebut'=>'715','tersebutlah'=>'716','tertentu'=>'717','tertuju'=>'718','terus'=>'719','terutama'=>'720','tetap'=>'721','tetapi'=>'722','tiap'=>'723','tiba'=>'724','tiba-tiba'=>'725','tidak'=>'726','tidakkah'=>'727','tidaklah'=>'728','tiga'=>'729','tinggi'=>'730','toh'=>'731','tunjuk'=>'732','turut'=>'733','tutur'=>'734','tuturnya'=>'735','ucap'=>'736','ucapnya'=>'737','ujar'=>'738','ujarnya'=>'739','umum'=>'740','umumnya'=>'741','ungkap'=>'742','ungkapnya'=>'743','untuk'=>'744','usah'=>'745','usai'=>'746','waduh'=>'747','wah'=>'748','wahai'=>'749','waktu'=>'750','waktunya'=>'751','walau'=>'752','walaupun'=>'753','wong'=>'754','yaitu'=>'755','yakin'=>'756','yakni'=>'757','yang'=>'758');
# used words as key for better performance

// remove stopwords from string
function strip_stopwords($str = "")
{
  global $stopwords;

  // 1.) break string into words
  // [^-\w\'] matches characters, that are not [0-9a-zA-Z_-']
  // if input is unicode/utf-8, the u flag is needed: /pattern/u
  $words = preg_split('/[^-\w\']+/', $str, -1, PREG_SPLIT_NO_EMPTY);

  // 2.) if we have at least 2 words, remove stopwords
  if(count($words) > 1)
  {
    $words = array_filter($words, function ($w) use (&$stopwords) {
      return !isset($stopwords[strtolower($w)]);
      # if utf-8: mb_strtolower($w, "utf-8")
    });
  }

  // check if not too much was removed such as "the the" would return empty
  if(!empty($words))
    return implode(" ", $words);
  return $str;
}


function clean($string) {
       $string = strtolower($string);
       $string = preg_replace('/[^A-Za-z0-9\-]/', ' ', $string);
       $string= preg_replace('/[0-9]+/', '', $string);
        $string = str_replace('-',' ',$string);
    return $string;
}
function katahubung($stringg) {
 
$stringg = str_replace(' ', '', $stringg);
  return $stringg;
}

function char2hash($string,$prima) {
  
                if (strlen($string) == 1) {
                        return ord($string);
                } else {
                        $result = 0;
                        $length = strlen($string);
                        for ($i = 0; $i < $length; $i++) {
                                $result += ord(substr($string, $i, 1)) * pow($prima, $length-$i-1);
                        }
                        
//                        return $result % 10007;
                        return $result;
                }
        }
function getNgrams($word, $n,$prima) {
        $ngrams = array();
        $len = strlen($word);
        for($i = 0; $i < $len; $i++) {
                if($i > ($n - 2)) {
                        $ng = '';
                        for($j = $n-1; $j >= 0; $j--) {
                                $ng .= $word[$i-$j]; 
                        }
                        $ngrams[] = $ng;
                }
        }
        $roll_hash = array();  
    foreach($ngrams as $car){
   $roll_hash[] = char2hash($car,$prima);   
        }
    
 return $roll_hash;
}

require_once __DIR__ . '/vendor/autoload.php';

// create stemmer
// cukup dijalankan sekali saja, biasanya didaftarkan di service container
$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer  = $stemmerFactory->createStemmer();


function starttime() {
$r = explode( ' ', microtime() );
$r = $r[1] + $r[0];
return $r;
}

function endtime($starttime) {
$r = explode( ' ', microtime() );
$r = $r[1] + $r[0];
$r = round($r - $starttime,4);
return '<strong>Execution Time</strong>: '.$r.' seconds<br />';
}