<?php
    include "db.php";
    $result = mysqli_query($link, "SELECT * FROM 'Termins'");
?>

<div class="box">
    <?php 
    while($row = mysqli_fetch_assoc($result)){
    ?>
        <p><strong>Термин:</strong> <?php echo $row['termin']; ?></p>
        <p><strong>Определение:</strong> <?php echo $row['definition']; ?></p>
    <?php
    }
    ?>
</div>