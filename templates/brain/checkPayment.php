<?php 
include_once 'classes/class.depositar.php';  
$payment = DepositarBrain::get();

//$payment_code_ = $payment[0]['codigo'];
$payment_code_ = 'TYTQdizeeBmAdcqZ7Ygb5sJzCZRxG7hYtj'; 
//$payment_code_ = "TBNoLRJcv5RSjoc9n1vnnrJ8WJiwoj1N55";
$api_url = "https://shastapi.tronscan.org/api/transfer/trx?sort=-timestamp&limit=1&start=0&address=" .   $payment_code_  . "&direction=0&db_version=1"; 
$response = json_decode(file_get_contents($api_url));
$data = (array) $response-> data;


 if (isset($data) && !empty($data)) {
     $contract_ret  = $data[0]-> contract_ret; 
     $amount = substr($data[0]->amount,0,-6);

     $to_  = $data[0]->to;
     $from_ = $data[0]->from;
     $hash = $data[0]->hash;

     $time1 = $payment[0]['date_created']; 
     $created = new DateTime($time1);
     $timestamp_created = strtotime($created->format("Y-m-d H:i:s"));

     $time2 = $payment[0]['date_end']; 
     $end = new DateTime($time2);
     $timestamp_end = strtotime($end->format("Y-m-d H:i:s"));

     $date = date("Y-m-d H:i:s", substr($data[0]->block_timestamp,0,-3));
     $input  = strtotime($date);

     $datos[] = [
        'id_user' => $_SESSION['id'],
        'id_wallet' => $payment[0]['id_wallet'],
        'amount' =>$amount,
        'hash' => $hash,
        'estado' => "SUCESS"
     ];  
             if ($input >= $timestamp_created && $input <= $timestamp_end) {
                 if($to_ == $payment[0]["codigo"]) {  
                     if($amount == $payment[0]["amount"]) { 
                         DepositarBrain::insertDepositar($datos);
                         echo 0; 
                     } else {
                         echo 1; 
                     }
              }  else {
                 echo 2;  
                 } 
             } else { 
                 echo 3; 
         } 
   } else { 
          echo 4; 
 }    
   
?>