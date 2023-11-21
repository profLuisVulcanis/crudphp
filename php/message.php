<?php

if(isset($message) && $message !== ""){
    ?>
    <div class="message"><h3>Atenção:</h3><p><?php echo $message; ?></p></div>
    <?php
}