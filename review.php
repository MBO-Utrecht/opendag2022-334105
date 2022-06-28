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
                    <p class="lead">Vul hier jouw ervaring van de open dag in</p>
                </div>
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="./create.php" method="post">
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Invoer naam" name="name">
                    </div>
                    <div class="form-group">
                        <label for="vraag1">1)	Voldoet de open dag en de informatie die je hebt ontvangen aan jouw verwachting? </label>
                        <input type="text" class="form-control" id="vraag1" aria-describedby="vraag1Help" placeholder="Invoer antwoord vraag 1" name="vraag1"> 
                    </div> 
                    <div class="form-group">
                        <label for="vraag2">2) Wat vond je van vakinhoudelijke voorlichting?</label>
                        <input type="text" class="form-control" id="vraag2" aria-describedby="vraag2Help" placeholder="Invoer antwoord vraag 2" name="vraag2">
                    </div>
                    <div class="form-group">
                        <label for="vraag3">3) Wat vond je van gesprek met studenten?</label>
                        <input type="text" class="form-control" id="vraag3" aria-describedby="vraag3Help" placeholder="Invoer antwoord vraag 3" name="vraag3">
                    </div>
                    <div class="form-group">
                        <label for="vraag4">4) Heb je de schoolsfeer als positief ervaren?</label>
                        <input type="text" class="form-control" id="vraag4" aria-describedby="vraag4Help" placeholder="Invoer antwoord vraag 4" name="vraag4">
                    </div>
                    <div class="form-group">
                        <label for="vraag5">5) Heb je voor ons nog tips?</label>
                        <input type="text" class="form-control" id="vraag5" aria-describedby="vraag5Help" placeholder="Invoer antwoord vraag 5" name="vraag5">
                    </div>
                    <button type="sumbit" class="btn btn-primary">Submit</button>
                    </form></div>
                   <div class="col-6"></div> 
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