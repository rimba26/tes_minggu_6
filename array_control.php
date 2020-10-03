<?php

/** 
 *  
 *  poin 7
 *  
 *  - 1 || menu bisa berjalan sesuai dengan pilihan yang tersedia menggunakan perulangan
 *  - 1 || filter berdasarkan provinsi
 *  - 1 || tidak ada duplikasi data saat filter provinsi
 *  - 1 || filter berdasarkan kawasan
 *  - 1 || tidak ada duplikasi data saat filter kawasan
 *  - 2 || tidak ada duplikasi kode ( Penerapan DRY ) menggunakan function
 * 
 */

 $provinsi=[
     [
         "provinsi"=>"Aceh",
         "kota"=>"Banda Aceh",
         "kawasan"=>"Sumatra"
     ],
    [
        "provinsi" => "Aceh",
        "kota" => "Langsa",
        "kawasan" => "Sumatra"
    ],
    [
        "provinsi" => "Aceh",
        "kota" => "Lhokseumawe",
        "kawasan" => "Sumatra"
    ],
    [
        "provinsi" => "Bali",
        "kota" => "Denpasar",
        "kawasan" => "Bali dan Nusa Tenggara"
    ],
    [
        "provinsi" => "Bangka Belitung",
        "kota" => "Pangkalpinang",
        "kawasan" => "Sumatra"
    ],
    [
        "provinsi" => "Banten",
        "kota" => "Cilegon",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Banten",
        "kota" => "Serang",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Banten",
        "kota" => "Tangerang Selatan",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Banten",
        "kota" => "Tangerang",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Bengkulu",
        "kota" => "Bengkulu",
        "kawasan" => "Sumatra"
    ],
    [
        "provinsi" => "Jambi",
        "kota" => "Jambi",
        "kawasan" => "Sumatra"
    ],
    [
        "provinsi" => "Jawa Barat",
        "kota" => "Bandung",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Barat",
        "kota" => "Bekasi",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Barat",
        "kota" => "Bogor",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Tengah",
        "kota" => "Magelang",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Tengah",
        "kota" => "Semarang",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Tengah",
        "kota" => "Surakarta",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Timur",
        "kota" => "Batu",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Timur",
        "kota" => "Blitar",
        "kawasan" => "Jawa"
    ],
];


$data_menu=[" All "," Provinsi "," Kawasan "," Exit "];

$berhenti=true;
$out=true;
while($berhenti)
{

    echo "Daerah otonomi Di Indonesia";
    echo "\n------------------------------\n";

    $nomor=1;

    foreach($data_menu as $data)
    {
        echo $nomor.$data."\n";
        $nomor++;
    }

    $pilih_menu=readline("Pili menu :");

    if($pilih_menu==1)
    {
        echo "All\n";

        $nomer=1;
        foreach($provinsi as $value)
        {
            echo $value['provinsi'],$value['kota'],$value ['kawasan'].PHP_EOL;
            echo $nomer++;
        }
        
        // $ulangi=readline("ulangi lagi(yes/no): ");
        // if($ulangi!=="yes" || $ulangi=="no" ){
        //      $out=false;
        // }


    }elseif($pilih_menu==2)
    {
        echo " Provinsi ";

        $filter_provinsi=readline('masukkan nama provinsi : ');

        foreach($provinsi as $value)
        {
            if($value['provinsi']==$filter_provinsi){
                echo $value['kota'],$value ['kawasan'];
               
            }
        }


    }elseif($pilih_menu==3)
    {
        echo " Kawasan ";

        $filter_kawasan=readline('masukkan nama Kawasan : ');

        foreach($provinsi as $value)
        {
            if($value['kawasan']==$filter_kawasan){
                echo $value['provinsi'],$value ['kota'];
                echo PHP_EOL;
            }
        }
        
    }elseif($pilih_menu==4)
    {
        echo " Exit ";

        $ulangi=readline(" ? (yes/no): ");
                if($ulangi!=="yes" || $ulangi=="no" ){
                    $out=false;
                }else{
                    exit;
                }
    }else{
        echo " Anda tidak memilih menu yang tersedia \n";
   continue;
    }
}