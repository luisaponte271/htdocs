<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}

class ReferenceBrain
{   
    public static function getCode()  { 
        global $dbh,$code;
     
        $stmt = $dbh->prepare("SELECT codigo FROM `users`  WHERE id = :id");
        $stmt->bindParam(':id', $_SESSION['id']);  
        $stmt->execute();  
        while ($row = $stmt->fetch()) { 
          $code = $row['codigo'];  
        }  
        return $code;  
    } 

    public static function get()  {
        global $dbh; 
       
        $stmt = $dbh->prepare("CALL get_references_user(:id_user)"); 
            $stmt->bindParam(':id_user', $_SESSION['id']); 
            $stmt->execute();   
            while ($row = $stmt->fetch()) { 
                $datos[] = [
                    'id' => $row['id'],
                    'username' => $row['username'],
                    'total' => $row['total'],
                    'ganancia' => $row['ganancia']
                ]; 
            }  
            return $datos; 
    } 

    public static function getTotal()  {
        global $dbh; 
       
        $stmt = $dbh->prepare("CALL get_references_total_user(:id_user)"); 
            $stmt->bindParam(':id_user', $_SESSION['id']); 
            $stmt->execute();   
            while ($row = $stmt->fetch()) { 
                $datos[] = [ 
                    'references' => $row['references'],
                    'earnings' => $row['earnings']
                ]; 
            }  
            return $datos; 
    } 
 
} 