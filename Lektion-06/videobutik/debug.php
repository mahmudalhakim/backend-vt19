<?php
/**********************************************
 *       debug.php
 *       Inkluderas vid felsökning för att visa 
 *       Superglobals (GET, POST, SESSION)
 **********************************************/
?>
    
<pre>
<div class="row">
    <div class="col-md-4">
        <h4>POST</h4>
        <?php print_r($_POST); ?>
    </div>
    <div class="col-md-4">
        <h4>GET</h4>
        <?php print_r($_GET); ?>
    </div>
    <div class="col-md-4">
        <h4>SESSION</h4>
        <?php 
        if(isset($_SESSION)) 
            print_r ($_SESSION = array_map("htmlspecialchars" ,$_SESSION )); 
            // array_map är en funktion som går igenom alla element i arrayen
            // vi kör funktionen htmlspecialchars på varje element
        ?>
    </div>
</div>
</pre>