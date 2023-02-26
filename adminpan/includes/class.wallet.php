<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}

class Wallet
{  
    
    public static function getAll()  {
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `wallet`");
        $sql->execute(); 
        $datos = []; 
            while ($row = $sql->fetch()) { 
                $datos[] = [
                    'id' => $row['id'],
                    'codigo' => self::convertStringCode($row['codigo']),
                    'date_hour_wallet' => $row['date_hour_wallet']
                ]; 
            } 
            return $datos; 
    }
    public static function getWhere($id_)  {
        global $dbh;
        $stmt = $dbh->prepare("SELECT id, codigo,date_hour_wallet FROM wallet WHERE id=:id");
        $stmt->bindParam(':id', $id_); 
        $stmt->execute(); 
        $datos = [];  
            while ($row = $stmt->fetch()) { 
                $datos[] = [
                    'id' => $row['id'],
                    'codigo' => $row['codigo'],
                    'date_hour_wallet' => $row['date_hour_wallet']
                ]; 
            }
            return $datos; 
    }
    public static function WalletNews()
    {
        global $dbh;
        if (isset($_POST['postnews']))
        {
            $_SESSION['codigo'] = $_POST['codigo']; 
            if (!empty($_POST['codigo']))
            {
                
                    $walletnews = $dbh->prepare("
                    INSERT INTO wallet(codigo)
                    VALUES
                    (
                    :codigo
                    )");
                    $walletnews->bindParam(':codigo', self::convertHexadecimalCode($_POST['codigo'])); 
                    $walletnews->execute();
                    $_SESSION['codigo'] = ''; 
                    $_SESSION['news'] ='';
                    Admin::succeed("News item is posted!"); 
            }
            else
            {
                Admin::error("There is no adress!");
                return;
            }
        }
        else
        {
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

    public static function DeleteWallet()
		{
			Global $dbh;
			if(isset($_GET['delete'])) 
			{ 
				$deleteNews = $dbh->prepare("DELETE FROM wallet WHERE id=:newsid");
				$deleteNews->bindParam(':newsid', $_GET['delete']);
				$deleteNews->execute();
				Admin::succeed('The news message was deleted!');
			}
		}

    public static function EditWallet($variable)
    {
        global $dbh;
        if (isset($_GET['news'])) 
        {
            $getNews = $dbh->prepare("SELECT * FROM wallet WHERE id=:newsid LIMIT 1");
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

    public static function UpdateWallet()
    {
        global $dbh;
        if (isset($_POST['update'])) 
        {
            $editNews = $dbh->prepare("UPDATE wallet SET 
            id=:id,
            codigo=:codigo
            WHERE id = :id"); 
            $editNews->bindParam(':codigo', $_POST['codigo']);
            $editNews->bindParam(':id', $_POST['id']);
            $editNews->execute();
            Admin::succeed("News message edited!");
        }
    }
}