<?php
if (! empty($result)) {
    foreach ($result as $k => $v) {
        ?>

    
    <div class="affiche col-3 d-flex row-wrap justify-content-center ">
        <p>
            <?php echo $result[$k]["titre"]; ?><br>
            <a href="../modele/deleteQcm.php?id=<?php echo $result[$k]["id"]; ?>">Supprimer</a>
        </p>
    </div>
<?php
    }
}
?>