<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}

class RetirarBrain
{   
    public static function insertRetirar($datos_)  { 
        global $dbh;
   
        $stmt = $dbh->prepare("INSERT INTO `users_withdraw` (`id_user`, `monto`, `estado`) VALUES (:id_user,:monto, :estado)"); 
        $stmt->bindParam(':id_user', $datos_[0]['id_user']);  
        $stmt->bindParam(':monto', $datos_[0]['monto']);  
        $stmt->bindParam(':estado', $datos_[0]['estado']);   
        $stmt->execute(); 

    }

    public static function get()  {
        global $dbh; 
       
        $stmt = $dbh->prepare("SELECT * FROM `users_withdraw` WHERE id_user = :id_user"); 
            $stmt->bindParam(':id_user', $_SESSION['id']); 
            $stmt->execute();   
            while ($row = $stmt->fetch()) { 
                $datos[] = [
                    'id' => $row['id'],
                    'id_user' => $row['id_user'],
                    'monto' => $row['monto'],
                    'estado' => $row['estado'],
                    'date_created' => $row['date_created']
                ]; 
            }  
            return $datos; 
    } 
} 