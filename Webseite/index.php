<!doctype html>
<html lang="de">
  <head>
    <title>M307</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="public/img/favicon.ico">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="public/css/style.css" rel="stylesheet">    
  </head>
  <body>

    <div class="container">
      <header class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Formular</a>
            </li>

          </ul>
        </nav>
        <h3 class="text-muted">Kessler Stephanie</h3>
      </header>

      <main role="main">

        <div class="jumbotron">
          <h1 class="display-3">Interaktives Webformular</h1>
          <p class="lead">Als junges, dynamisches Unternehmen haben Sie den Auftrag bekommen für ein Projekt ein Webformular zu entwickeln. Als Vorlage zum Auftrag bekommen alle für das Formular relevanten Dateien. Damit wird sichergestellt, dass das Webformular nach vorgegebenem Rahmen entwickelt und einfach ins Projekt integriert werden kann.</p>
          <p><a class="btn btn-lg btn-success" href="#" role="button">Ich bin dabei!</a></p>
        </div>

        <div class="row marketing">
          <div class="col-lg-12">
          <?php 
            echo "<h3>Meine Funktionen...</h3>";
            require("app/bootstrap.php");

            
          ?>
          </div>
        </div> 



<!-- MEINE ARBEIT - STEPHANIE KESSLER -->

<!--neues Objekt vom Typ Model ( Datenbankverbindung)-->
<?php $connect = new Model; ?>
<?php $dataArray = $connect->getAllData();





?>
<!--Aufrufe der entsprechenden Funktionen zum bearbeiten der Darenbank-->
<?php 

    if(isset($_POST['submit'])){
        if(isset($dataID)){
            $connect->editData();
        }else{
            $connect->insertData();
        }
    }
    if(isset($_POST['edit'])){
        $connect->editData();
    }
    if(isset($_POST['delete'])){
        $connect->deleteData();
    }






?>


<!--HTML code für das Formular-->
<h1>Formular</h1>
<form action="index.php" method="POST">
<input type="hidden" value="<?php echo $_POST['dataID']; ?>" id="dataID" name="dataID"></input>
    <div class="row">
        <div class="col-md-6">
            <fieldset class="anrede">
                <label>Anrede:</label>
                <input id="gender-select" type="radio" name="gender-select" value="1" <?php if(@$cleanArray['gender-select'] == 1){echo 'checked';} ?>> Male</input>
                <input id="gender-select" type="radio" name="gender-select" value="2"  <?php if(@$cleanArray['gender-select'] == 2){echo 'selected';} ?>> Female</input>
            </fieldset>
            <fieldset class="vorname">
                <label>Vorname:</label>
                <input type="text" id="firstname" placeholder="Vorname" name="firstname" maxlength="100" required  value="<?php echo @utf8_encode($cleanArray['Vorname']); ?>"></input>
            </fieldset>
            <fieldset class="nachname">
                <label>Nachname</label>
                <input type="text" id="lastname" placeholder="Nachname" name="lastname" maxlength="100" required></input>
            </fieldset>
            <fieldset class="adresse">
                <label>Adresse:</label>
                <input type="text" id="adresse" placeholder="Adresse" name="adresse" maxlength="200" required></input>
            </fieldset>
            <fieldset class="plz">
                <label>PLZ:</label> 
                <input type="number" id="plz" placeholder="PLZ" name="plz" min="1000" max="9999" required></input>
            </fieldset>
            <fieldset class="ort">
                <label>Ort:</label>
                <input type="text" id="ort" placeholder="Ort" name="ort" maxlength="100" required></input>
            </fieldset>
            <fieldset class="email">
                <label>E-Mail:</label>
                <input type="email" id="email" placeholder="E-Mail" name="email" maxlength="100" required></input>
            </fieldset>
            <fieldset class="tel">
                <label>Telefon:</label>
                <input type="tel" id="tel" placeholder="Telefon" name="tel" maxlength="100"></input>
            </fieldset>
        </div>
        <div class="col-md-6">
            <fieldset class="agb">
                <label><a href="#">unsere AGB:</a></label>
                <input type="checkbox" id="agb" name="agb" required>AGB gelesen &amp; akzeptiert.</input>
            </fieldset>
            <fieldset class="funktion">
                <label>Funktion:</label>
                <select name="funktion-options" required>
                    <option value="Professor">Professor</option>
                    <option value="Lehrer">Lehrer</option>
                    <option value="Vorstand">Vorstand</option>
                    <option value="Dozent">Dozent</option>
                    <option value="Student">Student</option>
                    <option value="Verwaltung">Verwaltung</option>
                </select>
            </fieldset>
            <fieldset class="ankunft">
                <label>Ankunft</label>
                <input type="date" id="date" name="date" required></input>
            </fieldset>
            <fieldset class="nachricht">
                <label>Nachricht:</label>
                <input type="text" id="nachricht" placeholder="Nachricht" name="nachricht" maxlength="1000"></input>
            </fieldset>
            <fieldset class="btnSpeichern">          
                <button type="submit" id="submit" name="submit">Anmeldung abschicken</button>
            </fieldset>
        </div>
    </div>
</form>

<h1>Ausgabe in Tabelle</h1>
<?php 
    echo '<table>';
        echo '<tr>';
            echo '<th>';
                echo 'Name';
            echo '</th>';
            echo '<th>';
                echo 'Adresse';
            echo '</th>';
            echo '<th>';
                echo 'E-Mail';
            echo '</th>';
            echo '<th>';
                echo 'Ankunft';
            echo '</th>';
            echo '<th>';
                echo 'Bearbeiten';
            echo '</th>';
        echo '</tr>';


        foreach ($dataArray as $key => $value) {
            $dataID = $value['ID'];
            $anrede = $value['Anrede'];
            $vorname = $value['Vorname'];
            $nachname = $value['Nachname'];
            $adresse = $value['Adresse'];
            $plz = $value['PLZ'];
            $ort = $value['Ort'];
            $email = $value['EMail'];
            $tel = $value['Telefon'];
            $funktion =$value['Funktion'];
            $ankunft = $value['Ankunft'];
            $nachricht = $value['Nachricht'];  
            echo '<tr>';
                echo '<td>';
                    if($anrede == 1){
                        echo 'Herr ';
                    }else{
                        echo 'Frau ';
                    }
                    echo "$vorname ";
                    echo "$nachname";
                echo '</td>';
                echo '<td>';
                    echo "$adresse, $plz $ort";
                echo '</td>';
                echo '<td>';
                    echo "$email";
                echo '</td>';
                echo '<td>';
                    echo "$ankunft";
                echo '</td>';
                echo '<td>';
                ?><form action="index.php" method="POST">
                <button type="submit" id="edit" name="edit" value="<?php echo $dataID; ?>">edit <?php echo $dataID; ?></button>
            </form><?php
            echo '</td>';
            echo '<td>'; ?>
                <form action="index.php" method="POST">
                    <input type="hidden" name="dataID" value="<?php echo $dataID; ?>">
                    <button type="submit" id="delete" name="delete" value="delete">delete <?php echo $dataID; ?></button>
                </form><?php
                echo '</td>';


            echo'</tr>';
        }





        
    echo '</table>';













 ?>
<!-- ENDE MEINER ARBEIT -->




      </main>

      <footer class="footer">
        <p>&copy; Copyleft 2017</p>
      </footer>

    </div> <!-- /container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="public/js/app.js"></script>




  </body>
</html>