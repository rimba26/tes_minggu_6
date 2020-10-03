<?php

/** 
 * Poin 2
 *  - 1 || Buatlah sebuah function untuk validasi input dari user untuk tanggal
 *  - 1 || validasi input dari user sesuai format ( dd/mm/yyyy ) 02/10/2020 
 * 
 *  contoh 
 *  1.user input data 02/10/2020
 *  2.output Friday, 02 October 2020 // ( day, date month year )
 */

// $input_date = readline("Cek tanggal ( dd/mm/yyyy ) : ");

// validDate($date);

function validDate($input_data) 
{
    $date = DateTime::createFromFormat($input_data, readline("Masukkan tanggal/bulan/tahun dengan angka! : "));
        echo  $date->format('l d-M-Y');
}

    validDate('d/m/Y');

    // $date = readline ("Masukkan Angkanya : ");

    // $date = DateTime::createFromFormat('j/m/Y', readline("masukkan tanggal dd/mm/yyyy: "));
    // echo $date->format('l d M Y');

    // $temp_arr=[];

    // $day = readline("masukkan tanggal dd/mm/yyyy : ");

    // explode("/",$day);
    // // intval($day);
    // intval($day);
    // $temp_arr[]=$day;
    // var_dump($temp_arr);
    // checkdate($day[0],$day[1],$day[2]);

    // echo $day;


    
    

    
    







