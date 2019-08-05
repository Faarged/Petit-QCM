<?php
if (! empty($result)) {
    foreach ($result as $k => $v) {
        ?>
<div class="box-container">
    
    <div class=""><?php echo $result[$k]["titre"]; ?>...</div>
    <div class=""><?php echo $result[$k]["question"]; ?></div>
    <div class="">
    <form action="../modele/deleteQuestion.php"></form>
        <button class="btn-action bn-delete"
            id="<?php echo $result[$k]["id"]; ?>">Effacer</button>
    </div>
</div>
<?php
    }
}
?>