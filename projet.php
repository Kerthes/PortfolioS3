<?php
session_start();
include 'co_bdd.php';
$result = $objPDO->query('select * from prj ORDER BY semestre ASC ');
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="cv.css">
</head>

<body>
<ul class="menu">
    <li><a href="cv.php">CV</a></li>
    <li><a href="projet.php">Projet</a></li>
</ul>

<h1>Liste des projets</h1>
<article class ='listeprj'>
<?php
while ($row=$result->fetch()){
    echo"<div class ='prj'>";
    echo"<tr>";
    echo"<td align='center' class='nom'>".$row['nom']."</td>";
    echo"<br>";
    echo"<td align='center' class='langage'>". $row['langage']."</td>";
    echo"<br>";
    echo"<td align='center' class='semestre'> Semestre : ". $row['semestre']."</td>";?>
    <br>
    <td align='center'> <a href=<?php echo ("AffichageProjet.php?id=".$row['num']); ?> > Lien </a> </td>
    <?php
    echo"</tr>";
    echo"<br>";
    echo"</div>";
    echo"<br>";
}
$result->closeCursor();
?>
</article>

</body>
</html>