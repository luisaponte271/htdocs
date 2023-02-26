<html>

<head>
    <title>Add Data</title>
</head>

<body>
    <?php
    
            if (!empty($_REQUEST['oldPass'])) { 
                $stmt = $dbh->prepare("SELECT username,password FROM users WHERE id = :id");
                $stmt->bindParam(':id', $_SESSION['id']); 
                $stmt->execute();
                if ($stmt->RowCount() == 1) { 
                    $row = $stmt->fetch();
                    if (User::checkUser($_REQUEST['oldPass'], $row['password'],$row['username'])) {
                        //la contraseña antigua es la correcta
                        $passwordBcrypt = User::hashed($_REQUEST['newPass']);
                      
                        $stmt = $dbh->prepare("UPDATE users SET password = :password WHERE username = :username");
                        $stmt->bindParam(':username', $row['username']); 
                        $stmt->bindParam(':password', $passwordBcrypt); 
                        $stmt->execute();
                         echo "La contraseña se cambio con exito";
                    } else  { 
                        //la contrasseña antigua no es la correcta
                        echo "La contraseña no se cambio, porfavor corregir";
                    }
                }
            }
    
 
    ?>
</body>

</html>