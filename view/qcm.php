<?php
if (! empty($result)) {
    foreach ($result as $k => $v) {
        ?>

    
    <div class="affiche col d-flex row-wrap justify-content-center ">
        <p>
            <?php echo $result[$k]["titre"]; ?><br>
            <a href="view/quizz.php?id=<?php echo $result[$k]['id']; ?>">Faire le quizz</a><br>
            <a href="modele/deleteQcm.php?id=<?php echo $result[$k]["id"]; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ?')">Supprimer</a>
        </p>
    </div>
<?php
    }
}
?>