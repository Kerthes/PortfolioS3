<?php
include 'co_bdd.php';
$id=$_GET['id'];
$result = $objPDO->prepare('select * from prj where num = ?');
$result -> bindValue('1',$id);
$result->execute();
?>
    <!doctype html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="cv.css">
        <script
                src="https://code.jquery.com/jquery-3.1.1.js"
                integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
                crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </head>

    <body>
    <ul class="menu">
        <li><a href="cv.php">CV</a></li>
        <li><a href="projet.php">Projet</a></li>
    </ul>
    <p class ='listeprj'>
        <?php
        while ($row=$result->fetch()) {
            echo "<h2 align='center' class='nom'>" . $row['nom'] . "</h2>";
            echo "<br>";
            echo "<td align='center' class='langage'>" . $row['langage'] . "</td>";
            echo "<br>";
            echo "<td align='center' class='semestre'> Semestre : " . $row['semestre'] . "</td>";
            echo "<br>";
            echo "<td align='center' class='duree'> Durée :" . $row['duree'] . " semaines </td>";
            echo "<br>";
            echo "<td align='center' class='nbpers'>  " . $row['nbpers'] . " personnes </td>";
            echo "<br>";
            echo "<td align='center' class='obj'> Objectif du projet : " . $row['obj'] . "</td>";
            echo "<br>";
            echo "<td align='center' class='comp'> Compétences visées : " . $row['comp'] . "</td>";
            echo "<br>";
            echo "<br>";

            $result->closeCursor();
        }
        ?>
    </p>
    <div class="container">
    <div class="slider-outer">
        <img src="images/arrow-left.png" class="prev" alt="Prev">
        <div class="slider-inner">
            <img src=<?php echo ("images/projet".$id."/code.png"); ?> alt='Screen du code' class='active'/>
            <img src=<?php echo ("images/projet".$id."/screen.png"); ?> alt='Screen du projet'/>
        </div>
        <img src="images/arrow-right.png" class="next" alt="Next">
    </div>
    </div>
       </body>
    </html>
