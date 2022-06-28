<?php

 include("./connect_db.php");

 $sql = "SELECT * FROM `users` ";

 $result = mysqli_query($conn, $sql);

 $records = ""; 


 while($record = mysqli_fetch_assoc($result)) {
    $records .= "<tr><th scope='row'> " . $record["id"] . "</th><td> " . $record["naam"] ."</td><td>" . $record["vraag1"] . "</td><td> " . $record["vraag2"] . "</td><td>" .$record["vraag3"] . "</td><td>" .$record["vraag4"] . "</td><td>" .$record["vraag5"] . "</td></tr>";
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Open dag MBO</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="./index.php"><img src="mboicon4.webp" width="30" height="30" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="./review.php">Enquete</a>
      <a class="nav-item nav-link" href="./read.php">Alle reviews</a>
      <a class="nav-item nav-link" href="./info.php">Info</a>
      <a class="nav-item nav-link" href="./presentaties.php">Presentaties</a>
    </div>
  </div>
</nav>
    <main class="container">
        <div class="row">
            <div class="col-12"> 
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Enquete</h1>
                    <p class="lead">Alle reviews</p>
                </div>
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Naam</th>
                    <th scope="col">Vraag 1</th>
                    <th scope="col">Vraag 2</th>
                    <th scope="col">Vraag 3</th>
                    <th scope="col">Vraag 4</th>
                    <th scope="col">Vraag 5</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       echo $records;
                    ?>
                </tbody>
                </table>
             </div> 
                <div class="row">
            <div class="col-12"></div>                    
        </div>
    </main> 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>