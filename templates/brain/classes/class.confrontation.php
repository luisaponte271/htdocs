<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}

class Apuesta
{  
    public static function getAll()  {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `confrontation`");
        $sql->execute(); 
        $datos = []; 
            while ($row = $sql->fetch()) { 
                $datos[] = [
                    'id' => $row['id'],
                    'codigo' => $row['codigo'],
                    'title' => $row['title'],
                    'team' => $row['team'],
                    'teamimgblob' => $row['teamimgblob'], 
                    'profit' => $row['profit'],
                    'date_hour_start' => $row['date_hour_start'],
                    'date_hour_end' => $row['date_hour_end']
                ]; 
            } 
            return $datos; 
    }

    public static function getWhereCodigo($codigo)  {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `confrontation` where codigo=:codigo");
        $sql->bindParam(':codigo', $codigo); 
        $sql->execute(); 
        $datos = []; 
            while ($row = $sql->fetch()) { 
                $datos[] = [
                    'id' => $row['id'],
                    'codigo' => $row['codigo'],
                    'title' => $row['title'],
                    'team' => $row['team'],
                    'teamimgblob' => $row['teamimgblob'], 
                    'profit' => $row['profit'],
                    'date_hour_start' => $row['date_hour_start'],
                    'date_hour_end' => $row['date_hour_end']
                ]; 
            } 
            return $datos; 
    }
    public static function insertApuesta($datos) { 
        global $dbh;
        $message = [];  
        if(self::validarApuesta($datos[0]['monto'])){ 
        $sql = $dbh->prepare("INSERT INTO users_confrontation(id_users, id_confrontation, status,  amount)  VALUES (:id_users,:id_confrontation,:status, :amount)");
         $sql->bindParam(':id_users', $_SESSION['id']);
         $sql->bindParam(':id_confrontation', $datos[0]['id_confrontation']);
         $sql->bindParam(':status', $datos[0]['estado']);
         $sql->bindParam(':amount', $datos[0]['monto']);
         $sql->execute();
         
         self::actualizarMonto($datos[0]['monto']);
      
             $message[] = [
                 'code' => '0',
                 'message1' => 'Se realizo la apuesta con ¡exito!',
                 'message2' => 'por favor esperad hasta que el encargado apruebe'
             ];
            return $message;
        } else { 
            $message[]= [ 
                'code' => '1',
                'message1' => 'Hubo un problema al registrar la apuesta',
                'message2' => 'por favor intentar nuevamente o contactar con el encargado'
             ];
        return  $message;
        }
    }  

    public static function actualizarMonto($monto){ 
       global $dbh;
       $credits = User::userData('credits'); 
       $credits = $credits - $monto;
       $sql = $dbh->prepare("UPDATE users SET credits=:credits where id=:id");
       $sql->bindParam(':id', $_SESSION['id']);
       $sql->bindParam(':credits', $credits);
       $sql->execute();
    }
    public static function validarApuesta($monto) { 
        $credits = User::userData('credits'); 
        if($monto !== '') { 
           if (intval($monto) <= intval($credits)) {
               if (intval($monto) > 0) {
                return true; 
              } 
           } else { 
               return false;
         }
      } else { 
        return false;
      }
    }

    public static function endApuesta($row)  {
        $date_now = new DateTime();
        $date_now = self::convertirTimestamp($date_now);
         
        $date_i = DateTime::createFromFormat('Y-m-d H:i:s', $row['date_hour_end']); 
        $date_i = self::convertirTimestamp($date_i);

            if($date_now> $date_i){ 
                return true;
            } else { 
                return false;
            }
    } 

 

    public static function getWhereFecha($date_filter_)  {
        global $dbh;
        // $stmt = $dbh->prepare("SELECT id,title,team1,team2,profit,date_hour_confrontation FROM confrontation WHERE DATE_FORMAT(date_hour_confrontation,'%d-%m-%Y') between DATE_FORMAT(CURDATE(),'%d-%m-%Y') and :date");
        $stmt = $dbh->prepare("SELECT id,title,team1,team1imagen,team2,team2imagen,profit,date_hour_confrontation FROM confrontation WHERE DATE_FORMAT(date_hour_confrontation,'%d-%m-%Y') between :date1 and :date2");
        $stmt->bindParam(':date1', $date_filter_); 
        $stmt->bindParam(':date2', $date_filter_); 
        $stmt->execute(); 
        $datos = [];  
            while ($row = $stmt->fetch()) { 
                $datos[] = [
                    'id' => $row['id'],
                    'title' => $row['title'],
                    'team1' => $row['team1'],
                    'team1imagen' => $row['team1imagen'],
                    'team2' => $row['team2'],
                    'team2imagen' => $row['team2imagen'],
                    'profit' => $row['profit'],
                    'date_hour_confrontation' => $row['date_hour_confrontation']
                ]; 
            }
            return $datos; 
    }

    public static function convertirProfit($profit)  {
       return $profit / 100;
    } 

    public static function convertirHora($date)  {
        $date_f = DateTime::createFromFormat('Y-m-d H:i:s', $date);
        return $hora = $date_f->format('H:i:s');
     } 

     public static function convertirTimestamp($date) { 
        return  $date->getTimestamp();
     
     }

     public static function exists($count) { 
        if($count > 0) { 
            return true; 
        } else { 
            return false;
        } 
     }

     public static function request($request) {
     $queryString = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY); 
     parse_str($queryString, $params); 
     $parameter = $params[$request];


     if(isset($parameter)) {
     return  $parameter;
     }
    else{
    return  $parameter = null;
    } 
  }
}