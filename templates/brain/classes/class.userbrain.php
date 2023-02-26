<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}

class UserBrain
{  
  
    public static function getBilletera($id_)  {
        global $dbh;
        $stmt = $dbh->prepare("SELECT motto FROM users WHERE id=:id");
        $stmt->bindParam(':id', $id_); 
        $stmt->execute();  
            while ($row = $stmt->fetch()) {
            $dato = $row['motto']; 
            } 
            echo $dato; 
    }
  
    public static function getAll()  {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `users`");
        $sql->execute(); 
        $datos = []; 
            while ($row = $sql->fetch()) { 
                $datos[] = [
                    'id' => $row['id'],
                    'username' => $row['username'],
                    'password' => $row['password'],
                    'ip_register' => $row['ip_register'],
                    'mail' => $row['mail'],
                    'account_created' => $row['account_created'], 
                ]; 
            } 
            return $datos; 
    }
    public static function getWhere($id_)  {
        global $dbh;
        $stmt = $dbh->prepare("SELECT id,username,password,ip_register,mail,account_created,motto FROM users WHERE id=:id");
        $stmt->bindParam(':id', $id_); 
        $stmt->execute(); 
        $datos = [];  
            while ($row = $stmt->fetch()) { 
                $datos[] = [
                    'id' => $row['id'],
                    'username' => $row['username'],
                    'password' => $row['password'],
                    'ip_register' => $row['ip_register'],
                    'mail' => $row['mail'],
                    'account_created' => $row['account_created'], 
                    'motto' => $row['motto'], 
                ]; 
            }
            return $datos; 
    }

}