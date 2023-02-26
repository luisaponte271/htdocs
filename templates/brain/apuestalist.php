<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../../templates/brain/assets/css/apuesta.css">
</head>

<body>
    <?php
$sql = $dbh->prepare("SELECT * FROM confrontation"); 
$sql->execute();

?>
    <!-- 
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">team1</th>
                <th scope="col">team1imagen</th>
                <th scope="col">team2</th>
                <th scope="col">team2imagen</th>
                <th scope="col">date</th>
            </tr>
        </thead>
        <tbody>


        </tbody>
    </table> -->
    <div class="container">
        <div class="row">
            <?php 
	
	while ($news = $sql->fetch()) { 
        $imagen1= $news['team1imagen'];
        $imagen2= $news['team2imagen'];
        file_put_contents('team1.png', $imagen1); 
        file_put_contents('team2.png', $imagen2);

     //   echo '<img src="data:image/png;base64,'.base64_encode($news['team1imagen']).'" class="u-full-width" />';
        echo '<img src="team1.png" alt="team1" width="100" heigth="100"  />';
        echo '<img src="team2.png" alt="team2" width="100" heigth="100"  />';
             
	}
	?>
        </div>
    </div>

    <button onclick="location.href='/apuestaddhtml'" class="animate__animated animate__headShake">
        <span class="icon"></span> Crear Apuesta
    </button>
</body>