<html>

<head>
    <title>Add Data</title>
</head>

<body>
    <?php
    
            if (!empty($_REQUEST['billetera'])) { 
         
              $stmt = $dbh->prepare("UPDATE users SET motto = :motto WHERE id = :id");
              $stmt->bindParam(':id', $_SESSION['id']); 
              $stmt->bindParam(':motto', $_REQUEST['billetera'] ); 
              $stmt->execute(); 
             }
    ?>
</body>

</html>