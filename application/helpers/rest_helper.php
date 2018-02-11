<?php
defined('BASEPATH') OR exit('No direct script access allowed');


function listarDados(){

	$curl = curl_init();

	curl_setopt_array($curl, array(
        CURLOPT_URL => "https://doiled-troubles.000webhostapp.com/rest/index",  
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",                                 
        CURLOPT_HTTPHEADER => array(
            "API-KEY: dgdtyfvvmth674gjrddjghdktudn64fdhd",
            "Cache-Control: no-cache",
            "Postman-Token: 2c189355-0256-2d21-0170-6498de3e7adb"
        ),
    ));

    $response = curl_exec($curl);    
    $err = curl_error($curl);       

    curl_close($curl);                              

    if ($err) {
      echo "cURL Error #:" . $err;  
  } else {
      return $response;             
  }

}


function inserirDados($nome=null, $idade=null, $cargo=null){

    $dados = http_build_query(

        array(
          'nome' => $nome,
          'idade' => $idade,
          'cargo' => $cargo  
      )
    );

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://doiled-troubles.000webhostapp.com/rest/insertDados",  
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => $dados,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",                                  
        CURLOPT_HTTPHEADER => array(
            "API-KEY: dgdtyfvvmth674gjrddjghdktudn64fdhd",  
            "Cache-Control: no-cache",
            "Postman-Token: 2c189355-0256-2d21-0170-6498de3e7adb"
        ),
    ));

    $response = curl_exec($curl);    
    $err = curl_error($curl);       

    curl_close($curl);                              

    if ($err) {
      echo "cURL Error #:" . $err;  
  } else {
      return $response;             
  }


}


