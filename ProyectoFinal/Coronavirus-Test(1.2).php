<!doctype html>
<html lang="en">
  <head>
    <title>CoronaVirus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
<div style="background-color:red; position: fixed; left: 92%; width: 105px; height:1647px;"></div>
<div style="background-color:red; position: fixed; rifgt: 92%; width: 105px; height:1647px;"></div>
<div class="container" style="padding-bottom:10px; background-color: darkgrey;">  
    <!--  -->
<div class="container">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="Coronavirus-Home.php">
        <div class="container" href="Coronavirus-Home.php">
            <h1>CORONA<span class="badge badge-danger">VIRUS</span></h1>
            </button>
        </div></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="Coronavirus-Home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Coronavirus-Localizaciones.php">Localizaciones</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="Coronavirus-Test.php">Test Online<span class="sr-only">(current)</span></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <!--cuerpo-->
    <?php
    if(isset($_POST['Respuesta'])){
        $check1 = $_REQUEST['check1'];
        $check2 = $_REQUEST['check2'];
        $check3 = $_REQUEST['check3'];
        $check4 = $_REQUEST['check4'];
        $check5 = $_REQUEST['check5'];
        $check6 = $_REQUEST['check6'];
        $check7 = $_REQUEST['check7'];
        $check8 = $_REQUEST['check8'];
        $check9 = $_REQUEST['check9'];
        $check10 = $_REQUEST['check10'];
        $check11 = $_REQUEST['check11'];
        $check12 = $_REQUEST['check12'];
        $check = $check1+$check2+$check3+$check4+$check5+$check6+$check7+$check8+$check9+$check10+$check11+$check12;
        echo 'La respuesta es:', $check;
        }
    ?>
    <br>
    <p>Si su respuesta es es de 0 - 2, Podria ser estres tome sun precuaciones y observe.</p>
    <p>Si su respuesta es es de 3 - 5, Hidratese, conserve medidas de higiene, observe y reevalue en 2 dias.</p>
    <p>Si su respuesta es es de 6 - 11, Acuda a consulta con el medico.</p>
    <p>Si su respuesta es es de 12 - mas, LLame a los servicios para acudir a la detecciondel covid-19.</p>
    
        <br>
    <!-- footer -->
        <div class="footer" style="background-color: lightgray; padding-left: 200px; padding-top: 30px;">
                <a class="grey-text text-lighten-4 right"  href="#!">        
                    <div class="container">
                    <a href="#politica" data-toggle="collapse">Políticas de privacidad</a>
                    <div id="politica" class="collapse">
                    Una política de seguridad en el ámbito de la criptografía de clave pública o PKI es un plan de acción
                    para afrontar riesgos de seguridad, o un conjunto de reglas para el mantenimiento de cierto nivel de 
                    seguridad. Pueden cubrir cualquier cosa desde buenas prácticas para la seguridad de un solo ordenador,
                    reglas de una empresa o edificio, hasta las directrices de seguridad de un país entero..
                    </div>    
                </div></a>
                <a class="grey-text text-lighten-4 right" style="text-align: right;">©2020 Copyright Text</p>
            <br>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>