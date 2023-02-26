<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}

class DepositarBrain
{   
  
    public static function get()  {
        global $dbh;

        $id_ = self::getIdWallet($_POST['id']); 
       
        $stmt = $dbh->prepare("SELECT * FROM `users_wallet_temp` WHERE id_user = :id_user AND id_wallet = :id_wallet ORDER BY id DESC LIMIT 1;"); 
            $stmt->bindParam(':id_user', $_SESSION['id']);
            $stmt->bindParam(':id_wallet', $id_);
            $stmt->execute();   
            while ($row = $stmt->fetch()) { 
                $datos[] = [
                    'id' => $row['id'],
                    'id_wallet' => $row['id_wallet'],
                    'amount' => $row['amount'],
                    'estado' => $row['estado'],
                    'date_created' => $row['date_created'],
                    'date_end' => $row['date_end'],
                    'codigo' =>  self::convertStringCode($_POST['id'])
                ]; 
            }  
            return $datos; 
    } 

    public static function getIdWallet($variable_)  {
        global $dbh;
       
        $stmt = $dbh->prepare("SELECT id FROM `wallet` WHERE codigo = :codigo LIMIT 1"); 
            $stmt->bindParam(':codigo', $variable_);
            $stmt->execute();   
            if ($stmt->RowCount() == 1) 
            {
                $news = $stmt->fetch(); 
                return $news['id'];
            }  
    } 
    
    public static function convertHexadecimalCode($variable_)
    {
       return  bin2hex($variable_); 
    }

    public static function convertStringCode($variable_)
    {
       return  hex2bin($variable_); 
    }
    public static function generateIDRandom($variable_)  {
        global $dbh;
        $stmt = $dbh->prepare("SELECT ROUND((RAND() * (COUNT(*) - 1)) + 1) AS random   FROM wallet LIMIT 1;"); 
            $stmt->execute();  
            if ($stmt->RowCount() == 1) 
            {
                $news = $stmt->fetch();
                return $news[$variable_];
            }  
    } 

    public static function getCodeAleatorio()  {
        global $dbh;
        $id = self::generateIDRandom('random');
        $stmt = $dbh->prepare("SELECT id,
                                                             CONVERT(UNHEX(codigo) USING utf8) AS codigo
                                                FROM   (SELECT id,
                                                                          codigo,
                                                                          ROW_NUMBER() OVER(ORDER BY id) AS nro
                                                              FROM wallet) tb_number
                                                 WHERE nro = :newsid LIMIT 1"); 
            $stmt->bindParam(':newsid', $id);
            $stmt->execute();  
            
            while ($row = $stmt->fetch()) { 
                $datos[] = [
                    'id' => $row['id'],
                    'codigo' => $row['codigo']
                ]; 
            }  
            return $datos; 
    } 
 
    public static function insertDepositarTemp($data_)  {
        global $dbh; 
        
       if(!empty($_REQUEST['amount'])) { 
        $stmt = $dbh->prepare("INSERT INTO `users_wallet_temp` (`id_user`, `id_wallet`, `amount`, `estado`,`date_end` ) VALUES (:id_user,:id_wallet,:amount, :estado, :date_end)"); 
        $stmt->bindParam(':id_user', $data_[0]['id_user']); 
        $stmt->bindParam(':id_wallet', $data_[0]['id_wallet']); 
        $stmt->bindParam(':amount', $data_[0]['amount']);  
        $stmt->bindParam(':estado', $data_[0]['estado']);  
        $stmt->bindParam(':date_end' , $data_[0]['date_end']);  
        $stmt->execute();
       } 
    }
    public static function updateAmount($amount)  {
        global $dbh;
   
        $stmt = $dbh->prepare("SELECT credits + ($amount) 'credits' FROM users where id= :id"); 
        $stmt->bindParam(':id', $_SESSION['id']);  
        $stmt->execute(); 
        if ($stmt->RowCount() == 1) 
        {
            $news = $stmt->fetch();
            $stmt = $dbh->prepare("UPDATE `users` set credits = :credits where id= :id"); 
            $stmt->bindParam(':credits', $news['credits']); 
            $stmt->bindParam(':id', $_SESSION['id']); 
            $stmt->execute(); 
        }   
    }  

    public static function insertDepositar($data_)  {
        global $dbh;
   
        $stmt = $dbh->prepare("INSERT INTO `users_wallet` (`id_user`, `id_wallet`, `amount`,`hash`, `estado`) VALUES (:id_user,:id_wallet,:amount, :hash,:estado)"); 
        $stmt->bindParam(':id_user', $data_[0]['id_user']); 
        $stmt->bindParam(':id_wallet', $data_[0]['id_wallet']); 
        $stmt->bindParam(':amount', $data_[0]['amount']);  
        $stmt->bindParam(':hash', $data_[0]['hash']);   
        $stmt->bindParam(':estado', $data_[0]['estado']);   
        $stmt->execute(); 

        self::updateAmount(intval($data_[0]['amount']));

    }  

    public static function deleteDepositarTemp()  {
        global $dbh;
  
        $stmt = $dbh->prepare("DELETE FROM `users_wallet_temp` WHERE id_user = :id_user"); 
        $stmt->bindParam(':id_user', $_SESSION['id']);  
        $stmt->execute();
   
    }  
     
    public static function fechaActual()  {
        $datetime = new DateTime();
        $datetime->format("Y-m-d H:i:s");
        return   $datetime;
    } 

    public static function fechaEnd()  {
        $end = self::fechaActual();
        $end->modify("+30 minutes");
        $date_end = $end->format("Y-m-d H:i:s"); 
        return   $date_end;
    
    } 

}