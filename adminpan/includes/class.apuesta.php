<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}

class ApuestaAdmin
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

    public static function getAprobacion($code)  {
        global $dbh;
        $sql = $dbh->prepare("CALL get_aprobacion(:code)");
        $sql->bindParam(':code', $code);
        $sql->execute(); 
        $datos = []; 
            while ($row = $sql->fetch()) { 
                $datos[] = [
                    'id' => $row['id'],
                    'username' => $row['username'],
                    'ganancia' => $row['ganancia'],
                    'date_hour_start' => $row['date_hour_start'],
                    'date_hour_end' => $row['date_hour_end'], 
                    'date_apuesta' => $row['date_apuesta'],
                    'status' => $row['status']
                ]; 
            } 
            return $datos; 
    }

    public static function EditApuesta($variable)
    {
        global $dbh;
        if (isset($_GET['news'])) 
        {
            $getNews = $dbh->prepare("SELECT * FROM confrontation WHERE id=:newsid LIMIT 1");
            $getNews->bindParam(':newsid', $_GET['news']);
            $getNews->execute();
            if ($getNews->RowCount() == 1) 
            {
                $news = $getNews->fetch();
                return $news[$variable];
            } 
            else 
            {
                Admin::error("No news found!"); exit;
            }
        }
    }

    public static function UpdateApuesta()
    {
        global $dbh;
        if (isset($_POST['update'])) 
        {   
            $team1imagen_name =  $_FILES['inputfile1']["name"]; 
            $team2imagen_name =  $_FILES['inputfile2']["name"]; 
            $team1imagen_temporal= $_FILES["inputfile1"]["tmp_name"]; 
            $team2imagen_temporal= $_FILES["inputfile2"]["tmp_name"]; 
            $team1imagen_temporal = file_get_contents($team1imagen_temporal); 
            $team2imagen_temporal = file_get_contents($team2imagen_temporal);

           
 
            if(!empty($team1imagen_temporal)  ||  !empty($team2imagen_temporal)) {
                if(!empty($team1imagen_temporal))  {
                    $editNews = $dbh->prepare("UPDATE confrontation SET 
                    id=:id,
                    title=:title,
                    team1=:team1,
                    team1nombre=:team1nombre,
                    team1imagen=:team1imagen,
                    team2=:team2, 
                    profit=:profit,
                    date_hour_confrontation=:date_hour_confrontation
                    WHERE id = :id");  
                    $editNews->bindParam(':id', $_POST['id']);
                    $editNews->bindParam(':title', $_POST['title']);
                    $editNews->bindParam(':team1', $_POST['team1']);
                    $editNews->bindParam(':team1nombre', $team1imagen_name);
                    $editNews->bindParam(':team1imagen', $team1imagen_temporal);
                    $editNews->bindParam(':team2', $_POST['team2']); 
                    $editNews->bindParam(':profit', $_POST['profit']);
                    $editNews->bindParam(':date_hour_confrontation', $_POST['date_hour_confrontation']);
        
                    $editNews->execute(); 
                 }    
    
                 if(!empty($team2imagen_temporal))  {
                    $editNews = $dbh->prepare("UPDATE confrontation SET 
                    id=:id,
                    title=:title,
                    team1=:team1,
                    team2=:team2, 
                    team2nombre=:team2nombre,
                    team2imagen=:team2imagen,
                    profit=:profit,
                    date_hour_confrontation=:date_hour_confrontation
                    WHERE id = :id");  
                    $editNews->bindParam(':id', $_POST['id']);
                    $editNews->bindParam(':title', $_POST['title']);
                    $editNews->bindParam(':team1', $_POST['team1']);
                    $editNews->bindParam(':team2', $_POST['team2']);  
                    $editNews->bindParam(':team2nombre', $team2imagen_name);
                    $editNews->bindParam(':team2imagen', $team2imagen_temporal);
                    $editNews->bindParam(':profit', $_POST['profit']);
                    $editNews->bindParam(':date_hour_confrontation', $_POST['date_hour_confrontation']);
        
                    $editNews->execute(); 
                 }     
                 Admin::succeed("News message edited!");
            } else {
                $editNews = $dbh->prepare("UPDATE confrontation SET 
                id=:id,
                title=:title,
                team1=:team1, 
                team2=:team2, 
                profit=:profit,
                date_hour_confrontation=:date_hour_confrontation
                WHERE id = :id");
                $editNews->bindParam(':id', $_POST['id']);
                $editNews->bindParam(':title', $_POST['title']);
                $editNews->bindParam(':team1', $_POST['team1']);
                $editNews->bindParam(':team2', $_POST['team2']);
                $editNews->bindParam(':profit', $_POST['profit']);
                $editNews->bindParam(':date_hour_confrontation', $_POST['date_hour_confrontation']);
                $editNews->execute(); 

                Admin::succeed("News message edited!");
              } 
          }  
    }
    public static function generateCode() {
        global $dbh;
        $stmt = $dbh->prepare("SELECT LEFT(UUID(), 10) AS codigo"); 
            $stmt->execute(); 
            while ($row = $stmt->fetch()) { 
                $datos[] = [ 
                    'codigo' => $row['codigo']
                ]; 
            }  
            return $datos; 
    }
}